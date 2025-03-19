
@extends('layout')

@section('content-wrapper')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <form class="search-form mb-3" action="{{ route('blogs.index') }}" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" value="{{ request('keyword') }}" placeholder="Search category...">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th> Tiêu đề </th>
                            <th> Mô tả </th>
                            <th> Nội dung </th>
                            <th> Hình ảnh </th>
                            <th> Công cụ </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $bl)
                            <tr>
                                <td> {{$bl->title}} </td>
                                <td> {{$bl->slug}} </td>
                                <td> {{$bl->content }} </td>
                                <td> <img src="{{ asset('images/' . $bl->image) }}" alt=""> </td>
                                <td>
                                    <a href="{{ route('blogs.edit', $bl->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('blogs.destroy', $bl->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    <div class="pagination">
                        {{ $blog->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
