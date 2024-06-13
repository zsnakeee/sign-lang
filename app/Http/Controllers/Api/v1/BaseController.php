<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function success($data, $message = 'success')
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ]);
    }

    public function error($error)
    {
        return response()->json([
            'error' => $error,
        ], 400);
    }
}
