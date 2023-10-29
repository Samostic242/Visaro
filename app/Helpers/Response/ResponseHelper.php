<?php

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Exceptions\HttpResponseException;

if (!function_exists('respondSuccess')) {
    function respondSuccess(String $message, array|object $data = null, Int $code = 200)
    {
        return response()->json([
            'code' => '00',
            'status' => true,
            'message' => $message,
            'data' => empty($data) ? null  : $data,
        ], $code);
    }
}
if (!function_exists('respondError')) {
    function respondError(Int $status_code, String $status,  String $message, array $data = null)
    {
        $possible_status = ['00', '01', '02', '03', '04', '05', '06'];
        $new_status = in_array($status, $possible_status) ? $status : '01';
        return response()->json([
            'code' => $new_status,
            'status' => false,
            'status_code' => $status_code,
            'message' => $message,
            'data' => empty($data) ? null  : $data,
        ], $status_code);
    }
}
if (!function_exists('validationError')) {
    function respondValidationError(String $message, $errors = null)
    {
        throw new HttpResponseException(
            response()->json([
                'code' => '02',
                'status' => false,
                'status_code' => 422,
                'message' => $message,
                'errors' => $errors
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
