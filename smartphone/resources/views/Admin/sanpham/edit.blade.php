@extends('Admin.layout.layout')
@section('content')
@php
$category = DB::table('categories')->get();
@endphp
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Sửa Menu </h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route ('products.update',$product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Tên Sản Phẩm</label>
                        <input name="name" value="{{ $product->name }}" type="text" class="form-control" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Giá</label>
                        <input name="price" value="{{ $product->price }}"  type="text" class="form-control" placeholder="Giá tiền">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Giảm Giá</label>
                        <input name="discount" value="{{ $product->discount }}"  type="text" class="form-control" placeholder="Giảm giá">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Số lượng</label>
                        <input type="text" name="slug" value="{{ $product->slug }}"  class="form-control" placeholder="Số lượng">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Dung Lượng</label>
                        <input type="text" value="{{ $product->capacity }}"  name="capacity" class="form-control" placeholder="Dung lượng">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Màu sắc</label>
                        <input type="text" name="color" value="{{ $product->color }}"  class="form-control" placeholder="Số lượng">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Hình Ảnh</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Loại Hàng</label>
                        <select id="inputState" class="form-control">
                        @foreach ($category as $item)
                        <option value="{{ $item->id}}">{{$item->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <label>Mô Tả</label>
                    <textarea id="basic-default-message" value="{{ $product->describe}}"  class="form-control" name="describe" placeholder="Chi tiết sản phẩm : Điểm nổi bật, chức năng ...."></textarea>
                </div>
                    <button type="submit" class="btn btn-primary mt-3">Sửa</button>
            </form>
        </div>
    </div>
</div>
@endsection
