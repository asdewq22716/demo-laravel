@extends('layout');
@section('title', 'เพิ่มข้อมูล')
@section('content')
    <h4>เพิ่มบทความ</h4>
    <form action="">
        <div class="form-group">
            <label for="">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-control">
            <label for="content">เนื้อหาบทความ</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="5"></textarea>
        </div>
        <input type="submit" name="btn_save" value="บันทึก" class="btn btn-primaty my-3">
    <a href="/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>
@endsection
