@extends('layout'){{-- นำเข้าไฟล์layout.blade.php เข้ามาใช้ --}}
@section('title', 'บทความทั้งหมด'){{-- เเบบย่อ --}}
@section('content')
    @if (count($blogs1) > 0)
        <h2>บทความทั้งหมด</h2>
        <hr>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">ชื่อบทความ</th>
                    <th scope="col">เนื้อหา</th>
                    <th scope="col">สถานะ</th>
                    <th>เเก้ไขข้อความ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                {{-- <pre>
                       {{ print_r($blogs1) }}
                   </pre> --}}
                @foreach ($blogs1 as $key => $value)
                    <tr>
                        <td>{{ $value->title }}</td>
                        {{-- Str::limit การจำกัดจำนวนการเเสดงผล --}}
                        <td>{{ Str::limit($value->content, 10) }}</td>
                        @if ($value->status == true)
                            <td>
                                <a class="btn btn-success" href="{{ route('change', $value->id) }}">เผยแพร่</a>
                            </td>
                        @else
                            <td>
                                <a class="btn btn-warning" href="{{ route('change', $value->id) }}">ฉบับล่าง</a>
                            </td>
                        @endif
                        <td><a href="{{ route('edit', $value->id) }}" class="btn btn-warning">เเก้ไขข้อความ</a></td>
                        <td>
                            <a onclick="return confirm('คุณต้องการลบบทความหรือไม่ ?');"
                                href="{{ route('delete', $value->id) }}" class="btn btn-danger">
                                ลบ
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs1->links() }}
        <hr>
    @else
    <h2>ไม่มีบทความในระบบ</h2>
    @endif
@endsection
