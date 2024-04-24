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

/* Route มีหน้าที่ระบุเส้นทางในการรับส่งข้อมูล */
/* ส่วนของการประมวลผลข้อมูลจะต้องไปทำที่controler */


Route::get('/', function () {
    //return view('welcome');
    // return "<a href='admin/user'>Login</a>";
    $Route = "";
    $Controler = [
        [
            'header' => 'หัว',
            'process' => 'การทำงาน',
            'how' => 'ทำงานอย่างไร'
        ]
    ];
    return view('home', compact('Route', 'Controler'));
});

Route::get('/about', function () {
    /* เป็นการส่งตัวแปรเเบบธรรมดาเข้าหน้าเว็บ  */
    $name = "อัณณพ เลิศสันติคุปต์";
    $date = "24 เมษายน 2567";
    /* การส่งตัวแปรเข้าที่หน้า about ใช้function compactในการส่งเข้าไป */
    return view("about", compact('name', 'date'));
})->name('about');


Route::get('/blog', function () {
    /* การส่งตัวแปร Array เข้าไปที่หน้า Route */
    /* มีการสอนใช้งาน foreash เเละ if() */
    $blogs = [
        [
            "title" => "บทความที่ 1",
            "content" => "เนื้อหาบาความที่ 1",
            "status" => true,
        ], [
            "title" => "บทความที่ 2",
            "content" => "เนื้อหาบาความที่ 2",
            "status" => true,
        ], [
            "title" => "บทความที่ 3",
            "content" => "เนื้อหาบาความที่ 3",
            "status" => false,
        ], [
            "title" => "บทความที่ 4",
            "content" => "เนื้อหาบาความที่ 4",
            "status" => false,
        ], [
            "title" => "บทความที่ 5",
            "content" => "เนื้อหาบาความที่ 5",
            "status" => true,
        ]
    ];
    return view("blog", compact('blogs'));
})->name('blog');



Route::get('admin/user', function () {
    return "ยินดีตอนรับ Admin";
})->name('login');

Route::fallback(function () {
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});
