@extends('admin.layout')
@section('content')
    <div class="row">
        <h3 class="mb-3">
            <i class="fas fa-plus-square"></i> Create new slide
            <small class="text-muted">Enter category information</small>
        </h3>
    </div>
    <div class="row">
        <div class="col-6">
            <form enctype="multipart/form-data" method="post" action="{{route('slides.store')}}">
                @csrf
                <div class="form-group">
                    Image<input type="file" name="images" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"></label>
                    <input name="description" type="text" class="form-control" placeholder="Please enter description">
                    @error('description')
                    <small class="text-danger form-text text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
