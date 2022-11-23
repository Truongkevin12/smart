@extends('Admin.layout.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Sửa Menu </h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route ('categories.update',$category->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label>Tên MENU</label>
                        <input name="name" value="{{  $category->name }}" type="text" class="form-control" placeholder="Thêm loại sản phẩm vào">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Sửa</button>
            </form>
        </div>
    </div>
</div>
@endsection
