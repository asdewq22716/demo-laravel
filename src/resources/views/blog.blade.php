@extends('layout'){{-- นำเข้าไฟล์layout.blade.php เข้ามาใช้ --}}
@section('title', 'บทความทั้งหมด'){{-- เเบบย่อ --}}
@section('content')
    <h2>บทความทั้งหมด</h2>
    <hr>
    @foreach ($blogs as $key => $value)
        <h4>{{ $value['title'] }}</h4>
        <p>{{ $value['content'] }}</p>
        <p>{{ $value['status'] }}</p>
        @if ($value['status'] == true)
            <p class="text text-success">เผยแพร่</p>
        @else
            <p class="text text-danger">ฉบับล่าง</p>
        @endif
        <hr>
    @endforeach
@endsection
