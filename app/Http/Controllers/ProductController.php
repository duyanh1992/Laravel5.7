<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function uploadImage(Request $request)
    {
        $apiFormat = array();
        $arrInput = $request->all();

        if (empty($arrInput)) {
            $apiFormat['message'] = 'Input is empty';
            return response()->json($apiFormat, 400);
        }

        $rules = [
            'image' => 'required|image'
        ];

        $validator = Validator::make($arrInput, $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $apiFormat['message'] = $errors->first('image');
            return response()->json($apiFormat);
        }
    }
}
