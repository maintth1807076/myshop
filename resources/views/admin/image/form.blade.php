@extends('admin.layout')
@section('content')
    <div class="row">
        <h3 class="mb-3">
            <i class="fas fa-plus-square"></i> Create new category
            <small class="text-muted">Enter category information</small>
        </h3>
    </div>

    <div class="row">
        <div class="col-6">
            <form action="/admin/images/create" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" name="photos[]" multiple>
                    @error('name')
                    <small class="text-danger form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="" class="form-control" placeholder="Please enter name">
                    @error('name')
                    <small class="text-danger form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
