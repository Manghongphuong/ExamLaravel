
@extends('layout')

@section('content-wrapper')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <form class="search-form mb-3" action="{{ route('list_user') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" value="{{ request('keyword') }}" placeholder="Search category...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> STT </th>
                                <th> Thành viên </th>
                                <th> Vai Trò </th>
                                <th> Công cụ </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $index => $user)
                                <tr>
                                    <td> {{ $users->firstItem() + $index }} </td>
                                    <td> {{ $user->name }} </td>
                                    <td> {{ $user->role }} </td>
                                    <td> 
                                        <form action="{{ route('destroy_user', $user->id) }}" method="POST" style="display: inline-block">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
