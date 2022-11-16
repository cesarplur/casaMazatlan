<?php
use app\Http\Controllers\EnviarCorreo;
use Illuminate\Support\Facades\Route;

use app\Mail\mandarcorreo;
use Illuminate\Support\Facades\Mail;

/*Route::get('/', function () {
    return view('denuncia');
});*/
Route::get('/', function () {
    return view('enviarcorreo');
});
Route::post('/denuncia', 'EnviarCorreo@store')->name('denuncia');
Route::post('/enviarcorreo', 'EnviarCorreo@store')->name('enviarcorreo');
Route::get('/', function () {
    return view('enviarcorreo');
});
Route::get('mandarcorreo', function () {
    $correo = new mandarcorreo();
    Mail::to('cesarplur@hotmail.com')->send($correo);
});