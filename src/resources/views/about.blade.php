@extends('layuot')
@section('title')
    {{-- การใช้ section หเเสดงเเบบเต็ม --}}
    เกี่ยวกับเรา
@endsection
@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <hr>
    <p>ผู้พัฒนาระบบ : {{ $name }}</p>
    <p>วันเริ่มต้นโปรเจค: {{ $date }}</p>
    <p>เนื้อหา</p>
@endsection
