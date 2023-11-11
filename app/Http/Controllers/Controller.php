<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function successResponse($data)
    {
        return response()->json([
            "success" => true, 
            "data" => $data,
        ], 200);
    }
    public function failResponse($data){
        return response()->json([
            'status' => false,
            'data'=>$data
        ], 402);
    }
    public function notFoundResponse(){
        return response()->json(null, 404);
    }
    public function requestKurang($errors){
        return response()->json([
            'success' => false,
            'errors' => $errors,
        ], 400);
    }
    public function unauthorized(){
        return response()->json([
            'success' => false,
        ], 401);
    }
}
