@extends('layouts.master')
@section('title', 'Thêm mới lớp học')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <h4>Thêm mới lớp học</h4>
            </div>
            <div class="col-12">
                <form method="post" >
                    @csrf
                    <div class="form-group">
                        <label>Tên lớp học</label>
                        <input type="text" class="form-control" name="name"  placeholder="Tên lớp học" required>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái lớp học</label>
                        <input type="text" class="form-control" name="status"  placeholder="Trạng thái lớp học" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection

