<?php

namespace App\Services;

class UploadService
{
    public function upload($request){
        if($request->hasFile('file')){
            $file = $request->file('file');
            
            $name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'),$name);

            return $name;
        }else{
            return response()->json(['message'=>'Arquivo inexistente'],400);
        }
    }
}