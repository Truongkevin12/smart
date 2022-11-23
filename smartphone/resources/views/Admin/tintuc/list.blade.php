@extends('Admin.layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh Sách Tin Tức</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Mã Tin Tức</th>
                                        <th>Tên Tiêu Đề</th>
                                        <th>Nội Dung</th>
                                        <th>Thời gian</th>
                                        <th>Tác Gỉa</th>
                                        <th>Hiển Thị</th>
                                        <th>Chức Năng</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $new )
                                    <tr class="text-dark">
                                        <td>{{$new->id }}</td>
                                        <td>{{$new->title }}</td>
                                        <td>{{$new->content }}</td>
                                        <td>{{$new->time }}</td>
                                        <td>{{$new->author }}</td>
                                        @if ($new->status ==0)
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
                                                    <li><a href="{{ route ('news.edit' ,$new->id) }}"><button class="dropdown-item" type="button">Sửa</button></a></li>
                                                    <form action="{{ route ('news.destroy',$new->id) }}" method="POST">
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
