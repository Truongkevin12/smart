@extends('Admin.layout.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                    <h4 class="card-title">Đăng Tin Tức </h4>
                    <div class="compose-content">
                        <form action="{{ route ('news.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="title" class="form-control bg-transparent" placeholder=" Tiêu đề">
                            </div>
                            <div class="form-group">
                                <textarea id="email-compose-editor" name="content" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Nội dung tin tức ..."></textarea>
                            </div>
                            <div class="form-group">
                                <div class="example">
                                    <p class="mb-1">Thời Gian</p>
                                    <input type="text" class="form-control input-daterange-timepicker" name="time" value="01/01/2015 1:30 PM">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng Bài</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
