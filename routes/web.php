<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});


Route::post('/upload',function(Request $request){
    Storage::disk("google")->putFileAs("",$request->file("thing"), "A001010101.jpg");
    Storage::disk("google")->putFileAs("",$request->file("thing"), "A001010102.jpg");
    Storage::disk("google")->putFileAs("",$request->file("thing"), "A001010103.jpg");
})->name("upload");
