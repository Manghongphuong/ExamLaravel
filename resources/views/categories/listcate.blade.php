
@extends('layout')

@section('content-wrapper')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <form class="search-form mb-3" action="{{ route('categories.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" 
                                value="{{ request('keyword') }}" 
                                placeholder="Search category...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th> STT </th>
                        <th> Danh Mục </th>
                        <th> Công Cụ </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cate as $category)
                            <tr>
                                <td> {{ $category->id }} </td>
                                <td> {{ $category->name }} </td>
                                <td>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block">
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
                    {{ $cate->links('pagination::bootstrap-4') }}
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
