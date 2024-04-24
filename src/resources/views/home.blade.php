@extends('layout')
@section('title')
    หน้าแรกของเว็บไซน์
@endsection
ิิิ@section('content')
    <h2>ยินดีตอนรับสู่เว็บไซน์</h2>
    <h4> Route มีหน้าที่ระบุเส้นทางในการรับส่งข้อมูล </h4>
    <hr>
    <h4>ส่วนของการประมวลผลข้อมูลจะต้องไปทำที่controler</h4>
    @foreach ($Controler as $key => $value)
        <p><b>หัวข้อ : {{ $value['header'] }}</b></p>
        <p>การทำงาน : {{ $value['process'] }}</p>
        <p>การเรียกใช้คำสั่ง {{ $value['how'] }}</p>
        <hr>
    @endforeach
@endsection
