<?php

use Illuminate\Support\Facades\Route;

//ต้องอ้างการเข้าถึงController ที่จะใช้ก่อน
use App\Http\Controllers\AdminController;


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
    return view('home', compact('Route', 'Controler')); //ส่งตัวแปรไป2ตัว
});
// Route มีการทำงาน 2 แบบ คือ 1)ทำงานที่ Route คือfunction 2)ไปทำงานที่ Controller 

//เเบบ 1 ทำงานที่ Route
Route::fallback(function () {
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});

//เเบบ 2 ทำงานที่ Controller
Route::get('/blog', [AdminController::class, 'index'])->name('blog');

Route::get('/about', [AdminController::class, 'about'])->name('about');

Route::get('/form', [AdminController::class, 'create'])->name('form');

Route::post('/insert', [AdminController::class, 'insert'])->name('insert');

Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');

Route::get('change/{id}', [AdminController::class, 'change'])->name('change');

Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');

Route::post('update/{id}', [AdminController::class,'update'])->name('update');