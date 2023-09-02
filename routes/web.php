<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//
//    Storage::disk('local')->put('test.txt', 'welcome');
    return 'ok';
});

Route::get('show',[\App\Http\Controllers\UploadImage::class,'showForm']);

Route::post('store',[\App\Http\Controllers\UploadImage::class,'store'])->name('photo.save');
