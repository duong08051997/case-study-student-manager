@extends('layouts.master')
@section('title','Chỉnh sửa thông tin học sinh')
@section('content')

    <div class="content">
        <div class="row">
            <div class="col-12">
                <h4>Chỉnh sửa thông tin học sinh</h4>
            </div>
            <div class="col-12">
    <form method="post" class="mt-4" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label >Ảnh hoc sinh: </label><br>
            <i class='fa fa-camera-retro' style='font-size:32px'></i>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <label >Họ và tên: </label>
            <input type="text" class="form-control" name="name" value="{{$students->name}}">
        </div>
        <div class="form-group">
            <label>Giới tính: </label><br>
            <input name="gender" type="radio" value="Nam" @if($students->gender == "Nam")  {{'checked'}}  @endif/>Nam<br>
            <input name="gender" type="radio"  value="Nữ" @if($students->gender == "Nữ") {{'checked'}}  @endif />Nữ<br>
            <input name="gender" type="radio" value="Khác" @if($students->gender == "Khác")  {{'checked'}}  @endif  />Khác<br>
        </div>
        <div class="form-group">
            <label>Email: </label>
            <input type="email" class="form-control" name="email" value="{{$students->email}}">
        </div>
        <div class="form-group ">
            <label >Ngày sinh:</label>
            <input type="date" name="dob" class="form-control" value="{{$students->dob}}">
        </div>
        <div class="form-group">
            <label>Lớp học:</label>
            <select class="form-control" name="class_room_id">
                @foreach($classes as $class)
                    <option
                        @if($students->class_room_id == $class->id)
                        {{"selected"}}
                        @endif
                        value="{{$class->id}}" >{{$class->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>
@endsection

