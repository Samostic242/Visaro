<?php

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

if (!function_exists('respondSuccess')) {
    function respondSuccess(string $message, array|object $data = null, int $code = 200): JsonResponse
    {
        return response()->json([
            'code' => '00',
            'status' => true,
            'message' => $message,
            'data' => empty($data) ? null : $data,
        ], $code);
    }
}
if (!function_exists('respondError')) {
    function respondError(int $status_code, string $status, string $message, array|object $data = null): JsonResponse
    {
        $possible_status = ['00', '01', '02', '03', '04', '05', '06'];
        $new_status = in_array($status, $possible_status) ? $status : '01';
        return response()->json([
            'code' => $new_status,
            'success' => false,
            'message' => $message,
            'data' => empty($data) ? null : $data,
        ], $status_code);
    }
}
if (!function_exists('validationError')) {
    function respondValidationError(string $message, $errors = null)
    {
        throw new HttpResponseException(
            response()->json([
                'code' => '02',
                'success' => false,
                'message' => $message,
                'errors' => $errors
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
