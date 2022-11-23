@extends('Admin.layout.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Thêm Menu </h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route ('categories.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Tên MENU</label>
                        <input name="name" type="text" class="form-control" placeholder="Thêm loại sản phẩm vào">
                    </div>
                    {{-- <div class="form-group">
                        <label>Thương Hiệu</label>
                        <select class="form-control">
                            <option>Disabled select</option>
                        </select>
                    </div> --}}
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
