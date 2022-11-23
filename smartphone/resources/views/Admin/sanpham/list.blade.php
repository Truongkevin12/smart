@extends('Admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh Sách Sản Phẩm</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Mã Sản Phẩm</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Giá</th>
                                        <th>Giảm Giá</th>
                                        <th>Dung Lượng</th>
                                        <th>Màu Sắc</th>
                                        <th>Hiển Thị</th>
                                        <th>Chức Năng</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Products as $Product )
                                    <tr class="text-dark">
                                        <td>{{$Product->id }}</td>
                                        <td>{{$Product->name }}</td>
                                        <td>{{$Product->price }}</td>
                                        <td>{{$Product->discount }}</td>
                                        <td>{{$Product->capacity }}</td>
                                        <td>{{$Product->color}}</td>
                                        @if ($Product->status ==0)
                                        <td><span class="badge badge-primary">Hiển Thị</span></td>
                                        @else
                                            <td><span class="badge badge-danger">Ẩn</span></td>
                                        @endif
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Chức Năng
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ route ('products.edit' ,$Product->id) }}"><button class="dropdown-item" type="button">Sửa</button></a></li>
                                                    <form action="{{ route ('products.destroy',$Product->id) }}" method="POST">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="submit" class="dropdown-item">Xoá</button>
                                                      </form>
                                                  </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
