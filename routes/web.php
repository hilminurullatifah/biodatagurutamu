<?php
use App\Http\Controllers\RuteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
Route::get('/', function () {
    return view('welcome');
});

//ini adalah rute  tanpa MVC
Route::get('/rutebaru', function()
{
    return ' <h1 style="color:red;">ini adalah rute baru tanapa MVC';
});

// INI ADALAH RUTE DENGAN  VIEW
Route::get('/ruteview', function () {
    return view('ruteview');
});
//ini adalah rute dengan view & controller
Route::get ('/ruteview',[RuteController::class,'menampilkanData']);
 //ini adalah rute dengan view,controller & model
Route::get ('/rutemodel',[RuteController::class,'menampilkanDataModel']);

Route::get ('/biodata',[BiodataController::class,'menampilkanDataBiodata']);
 