@extends('layout')

@section('content-wrapper')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if (session('success'))
                        <div style="color: green; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="exampleSelectGender">Danh mục</label>
                        <select class="form-select" name="cate_pro" id="exampleSelectGender">
                            @foreach($cate_pro as $procategory)
                            <option value="{{$procategory->id}}">{{$procategory->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Sản Phẩm</label>
                        <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Sản Phẩm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Thông Tin</label>
                        <input type="text" class="form-control" name="infoproduct" id="exampleInputCity1" placeholder="Thông Tin">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Gía</label>
                        <input type="text" class="form-control" name="price" id="exampleInputCity1" placeholder="Gía">
                    </div>
                    <div class="form-group">
                        <label>Tải Anh</label>
                        <input type="file" class="form-control" name="file_upload" id="inputGroupFile01">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Chi Tiết</label>
                        <textarea class="form-control" name="desproducts" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
                </div>
            </div>
        </div>  
    </div>
@endsection