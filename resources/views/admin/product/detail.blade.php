@extends('admin.layout')
@section('content')
    <div class="row">
        <h3 class="mb-3">
            <i class="fas fa-plus-square"></i> Create new product
            <small class="text-muted">Enter product information</small>
        </h3>
    </div>

    <div class="row">
        <div class="col-6">
            <p>{{$item->name}}</p>
            <p>{{$item->price}}</p>
            @foreach($list as $item)
                <img src="{{$item->thumbnail}}" alt="">
                @endforeach
        </div>
    </div>
@endsection
