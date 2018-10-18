<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class FileController extends Controller
{
    public function index(){
        return view('file_upload');
    }

    public function doUpload(Request $request){
        if ($request->hasFile('file_upload')) {
            $file = $request->file_upload;

            foreach($file as $key=>$detailImage){
                $fileName = $detailImage->getClientOriginalName();
                $newPath = public_path('/upload');
                $detailImage->move($newPath, $fileName);

                $imageUrl = $newPath.'/'.$fileName;
                $thumbnail = Image::make($imageUrl);
                $thumbnail->resize(100, 100);
                $thumbnail->save($newPath.'/thubnail_'.$fileName);
            }
        }
    }
}
