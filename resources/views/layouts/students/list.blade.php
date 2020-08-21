@extends('layouts.master')
@section('title','Thông tin học sinh')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
        <h4 class="card-title">Thông tin lớp học</h4>
        <a href="{{route('students.create')}}" class="btn btn-success">Thêm mới</a>
    </div>
    @if (Session::has('success'))
        <p class="text-success" style="margin-left: 10px">
            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
        </p>
    @endif
        <table class="table" style="margin-left: 10px">
            <thead class=" text-primary">
            <tr>
                <th>Số thứ tự</th>
                <th>Ảnh</th>
                <th>Họ Và Tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>email</th>
                <th>Lớp học</th>
                <th></th>
            </tr>
            </thead>
                <tbody>
                @forelse($students as $key =>$student)
            <tr>
                <td> {{++$key}}</td>
                <td><img class="rounded-circle" src="{{asset('storage/'.$student->image)}}" alt="" width="50" height="50"></td>
                <td>{{$student->name}}</td>
                <td>{{$student->dob}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->email}}</td>
                <td>{{$classes[1]['name']}}</td>
                <td>
                    <a href="#">
                        <i class="fa fa-edit" style="font-size:24px"></i></a>
                </td>
                <td>
                    <a href="#" >
                        <i class="fa fa-trash-o" style="font-size:24px;color: red"></i></a>
                </td>
            </tr>
                @empty
                    <tr>
                        <td>Không có dữ liệu</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforelse
                </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
