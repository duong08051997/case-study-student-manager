@extends('layouts.master')
@section('title','Chỉnh sửa thông tin học sinh')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-12">
                <h4>Chỉnh sửa thông tin học sinh</h4>
            </div>
            <div class="col-12">
    <form action="{{route('students.store')}}" method="post" class="mt-4" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >Ảnh hoc sinh: </label>
            <input type="file" class="form-control" name="image" required>
        </div>
        <div class="form-group">
            <label >Họ và tên: </label>
            <input type="text" class="form-control" name="name" placeholder="ten hoc sinh" required>
        </div>
        <div class="form-group">
            <label>Giới tính: </label><br>
            <input name="gender" type="radio" value="Nam" />Nam<br>
            <input name="gender" type="radio" value="Nữ" />Nữ<br>
            <input name="gender" type="radio" value="Khác" />Khác<br>
        </div>
        <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" name="email" placeholder="xxx@gmail.com" required>
        </div>
        <div class="form-group ">
            <label >Ngày sinh:</label>
            <input type="date" name="dob" class="form-control">
        </div>
        <div class="form-group">
            <label>Lớp học:</label>
            <select class="form-control" name="class_room_id">
                @foreach($classes as $class)
                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

