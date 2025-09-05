
@extends('layout')

@section('content-wrapper')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description"> Add class <code>.table-striped</code></p>
                <div class="table-responsive">
                @if (session('success'))
                    <div style="color: green; margin-bottom: 10px;">
                        {{ session('success') }}
                    </div>
                @endif    
                <form class="forms-sample" action="{{ route('send_email') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email Người Nhận</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" id="email" 
                                placeholder="Nhập nhiều email, cách nhau bằng dấu phẩy (,)">
                            @error('email')<p style="color: red">{{ $message }}</p>@enderror
                        </div>

                        <div class="form-group">
                            <label for="subject">Tiêu Đề</label>
                            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="subject" placeholder="Nhập tiêu đề">
                            @error('subject')<p style="color: red">{{ $message }}</p>@enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Nội Dung</label>
                            <textarea class="form-control" name="message" value="{{ old('message') }}" id="message" rows="4" placeholder="Nhập nội dung email"></textarea>
                            @error('message')<p style="color: red">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Gửi Email</button>
                        <button type="reset" class="btn btn-light">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
