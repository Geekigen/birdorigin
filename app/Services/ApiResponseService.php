<?php

namespace App\Services;

use Illuminate\Http\Request;
use Auth;

class ApiResponseService
{
	public function __construct()
	{
		//
	}

	public function success($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }

    public function notFound($result, $message)
    {
        $response = [
            'success' => false,
            'data'    => $result,
            'message' => $message,
        ];
        return response()->json($response, 404);
    }

    public function validation($result, $message)
    {
        $response = [
            'success' => false,
            'data'    => $result,
            'message' => $message,
        ];
        return response()->json($response, 400);
    }
    public function error($result, $message)
    {
        $response = [
            'success' => false,
            'data'    => $result,
            'message' => $message,
        ];
        return response()->json($response, 500);
    }
}
