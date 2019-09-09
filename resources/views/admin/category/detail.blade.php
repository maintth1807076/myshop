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
            <p>{{$item->name}}</p>
        </div>
    </div>
@endsection
