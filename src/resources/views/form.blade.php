@extends('layout');
@section('title', 'เพิ่มข้อมูล')
@section('content')
    <h4>เพิ่มบทความ</h4>
    <form method="POST" action="/insert">
        @csrf {{-- คือToken สำหรับส่งค่าข้อมูล --}}
        <div class="form-group">
            <label for="">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        {{-- การดูerror เมื่อข้อมูลที่submmit ไปไม่ตรงเงื่อนไข --}}
        @error('title')
            <div class="my-2">
                <span  style="color: red">{{ $message }}</span>
            </div>
        @enderror
        <div class="form-group">
            <label for="content">เนื้อหาบทความ</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="5"></textarea>
        </div>
        @error('content')
        <div class="my-2">
            <span style="color: red">{{ $message }}</span>
        </div>
    @enderror
        <input type="submit" name="btn_save" value="บันทึก" class="btn btn-primary my-3">
        <a href="/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>
@endsection
