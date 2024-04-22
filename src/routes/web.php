<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/detail-laravel', function () {
    return "อธิบายการทำงาน laravel";
});

//name คือparamiter สำหรับส่งข้อมูล เป็น พาร์ต
Route::get('/blog{name}', function () {
    return "บทความทั้งหมด";
});
