<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends BaseController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'min:8'],
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = auth('api')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return response()->json([
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }

        $credentials = $request->only('email', 'password');
        if (!$token = auth('api')->attempt($credentials)) {
            return $this->error('The provided credentials are incorrect.');
        }

        return response()->json([
            'token' => $token,
            'user' => auth('api')->user(),
        ]);
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function me()
    {
        return response()->json(auth('api')->user());
    }

    public function refresh()
    {
        return response()->json([
            'token' => auth('api')->refresh()
        ]);
    }

    public function send_reset_token(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails())
            return $this->error($validator->errors()->first());

        $user = User::where('email', $request->email)->first();
        if (!$user)
            return $this->error('We can\'t find a user with that email address.');

        $token = Password::createToken($user);
        return response()->json(['token' => $token, 'message' => 'Reset token generated.']);
    }

    public function reset_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails())
            return $this->error($validator->errors()->first());

        $response = Password::reset($request->only('email', 'token', 'password'), function ($user, $password) {
            $user->password = Hash::make($password);
            $user->setRememberToken(Str::random(60));
            $user->save();
            event(new PasswordReset($user));
        });

        return $response === Password::PASSWORD_RESET
            ? response()->json(['message' => 'Password reset successfully.'])
            : $this->error($response);
    }



}
