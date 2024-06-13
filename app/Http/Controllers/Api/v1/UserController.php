<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends BaseController
{
    public function update_profile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
        ]);

        if ($validator->fails())
            return $this->error($validator->errors()->first());

        $user = auth('api')->user();
        $user->update($request->only(['first_name', 'last_name', 'phone']));
        return response()->json([
            'user' => $user,
        ]);
    }
}
