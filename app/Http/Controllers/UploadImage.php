<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
//use \Illuminate\Http\UploadedFile;

class UploadImage extends Controller
{
    use UploadImageTrait;
public function showForm(){

    return view('upload');
}

//public function store(Request $request)
//{
//    return $this->UploadImage($request,'admins' );
//}
public function store(Request $request)
{
//    $path = $this->UploadImage($request,'users' );
    $path = $this->UploadImage($request,'admins' );
    Image::create([
        'path'=>$path
    ]);
    return 'uploaded';
}

}
