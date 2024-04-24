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
    //return view('welcome');
   // return "<a href='admin/user'>Login</a>";
   return view('home');
});

Route::get('/about', function () {
   // return "อธิบายการทำงาน laravel";
   $name="อัณณพ เลิศสันติคุปต์";
   $date="24 เมษายน 2567";
   /* การส่งตัวแปรเข้าที่หน้า about ใช้function compactในการส่งเข้าไป */
   return view("about",compact('name','date'));
})->name('about');

//name คือparamiter สำหรับส่งข้อมูล เป็น พาร์ต
Route::get('/blog', function () {
    return view("blog");
})->name('blog');



Route::get('admin/user', function () {
    return "ยินดีตอนรับ Admin";
})->name('login');

Route::fallback(function(){
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});