<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('trangchu');
// });
Route::view('/home', 'masterPage');
Route::get('/aboutus', function () {
    $name = "Binhht";
    return view('gioithieu', ['myName' => $name]);
});
Route::get('/sinhvien', [DemoController::class, 'index']);


