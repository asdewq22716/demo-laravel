<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
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
            ]
        ];

        //การดึงข้อมูลจากtable 
        $blogs1 = DB::table('blogs')->get();
        return view("blog", compact('blogs1'));
    }
    function about()
    {
        /* เป็นการส่งตัวแปรเเบบธรรมดาเข้าหน้าเว็บ  */
        $name = "อัณณพ เลิศสันติคุปต์";
        $date = "24 เมษายน 2567";
        /* การส่งตัวแปรเข้าที่หน้า about ใช้function compactในการส่งเข้าไป */
        return view("about", compact('name', 'date'));
    }
    function create()
    {
        return view('form');
    }

    //เรียกใช้ class Requests
    function insert(Request $request)
    { //ห้ามเป็นค่าว่าง required 
        $request->validate(
            [ //คือการตรวจสอบข้อมูลที่ส่งเข้ามา
                'title' => 'required|max:50',
                'content' => 'required'
            ],
            [
                'title.required' => 'กรุณาป้อนชื่อบทความ',
                'title.max' => 'ชื่อบทความไม่ควรเกิน 50 ตัวอักษร',
                'content.required' => 'กรุณาป้อนชื่อบทความของคุณ'
            ]
        );
    }
    function delete($id)
    {
        // dd($id); ดีบัก
        //การลบข้อมูล
        DB::table('blogs')->where('id', $id)->delete();
        return redirect('/blog');
    }
}
