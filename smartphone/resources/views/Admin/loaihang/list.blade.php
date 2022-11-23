@extends('Admin.layout.layout')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">THANH MENU</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Status</th>
                            <th>Status</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $categori )
                        <tr>
                            <th>{{  $categori->id }}</th>
                            <td>{{  $categori->name }}</td>
                            <td>{{ $categori->slug }}</td>
                        @if ($categori->status ==0)
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
                                  <li><a href="{{ route ('categories.edit' ,$categori->id) }}"><button class="dropdown-item" type="button">Sửa</button></a></li>
                                  <form action="{{ route ('categories.destroy',$categori->id) }}" method="POST">
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
@endsection
