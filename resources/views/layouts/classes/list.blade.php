@extends('layouts.master')
@section('title','Thông tin lớp học')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Thông tin lớp học</h4>
                    <a href="{{route('classes.create')}}" class="btn btn-success">Thêm mới</a>
                </div>
                @if (Session::has('success'))
                    <p class="text-success" style="margin-left: 10px">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
                <div class="card-body">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th>Số thứ tự</th>
                                <th>Tên lớp</th>
                                <th>Trạng thái</th>
                                <th>Sĩ số</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($classes as $key=>$class)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$class->name}}</td>
                                <td>{{$class->status}}</td>
                                <td>{{ count($class->student) }}</td>
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
                                </tr>

                            @endforelse
                            </tbody>
                        </table>
                    </div>
            </div>
            {{ $classes->appends(request()->query()) }}
        </div>
@endsection
