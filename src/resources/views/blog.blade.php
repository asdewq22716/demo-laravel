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
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            {{--   <pre>
            {{ print_r($blogs1) }}
        </pre> --}}
            @foreach ($blogs1 as $key => $value)
                <tr>
                    <td>{{ $value->title }}</td>
                    {{-- Str::limit การจำกัดจำนวนการเเสดงผล --}}
                    <td>{{ Str::limit($value->content, 10) }}</td>
                    @if ($value->status == true)
                        <td>
                            <p class="text text-success">เผยแพร่</p>
                        </td>
                    @else
                        <td>
                            <p class="text text-danger">ฉบับล่าง</p>
                        </td>
                    @endif
                    <td>
                        <a onclick="return confirm('คุณต้องการลบบทความหรือไม่ ?');" href="{{ route('delete', $value->id) }}" class="btn btn-danger">
                            ลบรายการ {{ $value->id }}
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
@endsection

