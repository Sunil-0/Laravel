<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sum;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MailController;
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

//CA2
Route::get('/Sum',function(){
    return view('Sum');
});
Route::post('/Sum',[SumController::class, 'Print']);
Route::get('upload',function(){
    return view('Upload');
});
Route::post('upload',[UploadController::class,'uploadFile'])->name('upload.uploadFile');
Route::post('/semail', function(){
    return view('mail_Input');
});
Route::get('/send-email', [MailController::class,'sendEmail']);

//Ca3
Route::get('/Register',function(){
    return view('Register');
});
Route::post('/Register',[RegisterController::class,'SaveData']);
Route::get('/LoginPage',function(){
    return view('LoginPage');
});
