<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    {//ห้ามเป็นค่าว่าง required 
        $request = validator([ //คือการตรวจสอบข้อมูลที่ส่งเข้ามา
            'title' => 'required|max:50',
            'content' => 'required'
        ]);
    }
}
