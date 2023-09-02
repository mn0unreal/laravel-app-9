<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use \Illuminate\Http\UploadedFile;

class UploadImage extends Controller
{
public function showForm(){

    return view('upload');
}

public function store(Request $request)
{
    $image = $request->file('photo')->getClientOriginalName();

    $path = $request->file('photo')->storeAs('users',$image,'avatars');

    return $path;
}
public function store2admins(Request $request)
{
    $image = $request->file('photo')->getClientOriginalName();

    $path = $request->file('photo')->storeAs('admins',$image,'avatars');

    return $path;
}
public function store2superadmin(Request $request)
{
    $image = $request->file('photo')->getClientOriginalName();

    $path = $request->file('photo')->storeAs('superadmin',$image,'avatars');

    return $path;
}
public function store2items(Request $request)
{
    $image = $request->file('photo')->getClientOriginalName();

    $path = $request->file('photo')->storeAs('items',$image,'avatars');

    return $path;
}

}
