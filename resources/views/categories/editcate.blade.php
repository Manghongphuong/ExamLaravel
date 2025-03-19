@extends('layout')

@section('content-wrapper')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample" action="{{ route('categories.update', $editcate->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="namecate" value="{{ $editcate->name}}" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Slug</label>
                        <input type="text" name="slugcate" value="{{ $editcate->slug}}" class="form-control" id="exampleInputName2" placeholder="Slug">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
                </div>
            </div>
        </div>  
    </div>
@endsection