@extends('layout'){{-- นำเข้าไฟล์layout.blade.php เข้ามาใช้ --}}
@section('title', 'บทความทั้งหมด'){{-- เเบบย่อ --}}
@section('content')
    <h2>บทความทั้งหมด</h2>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col">สถานะ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $key => $value)
                <tr>
                    <td>{{ $value['title'] }}</td>
                    <td>{{ $value['content'] }}</td>
                    @if ($value['status'] == true)
                        <td>
                            <p class="text text-success">เผยแพร่</p>
                        </td>
                    @else
                        <td>
                            <p class="text text-danger">ฉบับล่าง</p>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
@endsection
