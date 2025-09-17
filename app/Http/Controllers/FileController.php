<?php

namespace App\Http\Controllers;

use App\Services\UploadService;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public $service;

    public function __construct() {
        $this->service = new UploadService();
    }

    public function uploadImage(Request $request){
        $request->validate(['file'=>'image']);
        $name = $this->service->upload($request);

        if(!$request->hasFile('file')){
            return $name;
        }

        return response()->json(['url'=>'http://10.188.35.86:8024/cont_api/public/uploads/'.$name]);
    }
}
