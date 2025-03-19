@extends('layout')

@section('content-wrapper')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Tên bài viết</label>
                        <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Bài viết">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">Thông Tin</label>
                        <input type="text" class="form-control" name="slug" id="exampleInputCity1" placeholder="Thông Tin">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Nội dung</label>
                        <textarea class="form-control" name="content" id="editor exampleTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tải Anh</label>
                        <input type="file" class="form-control" name="file_upload" id="inputGroupFile01">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
                </div>
            </div>
        </div>  
    </div>
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endsection