@extends('admin.layout')
@section('content')
    <div class="row">
        <h3 class="mb-3">
            <i class="fas fa-plus-square"></i>Detail[USER]
            <small class="text-muted">Enter DETAIL information</small>
        </h3>
    </div>

    <div class="row">
        <div class="col-6">
         <p>   Name: {{$item->name}}</p>
         <p>   Email: {{$item->email}}</p>
            Avartar:   <img src="{{$item->avatar}}" style="width: 30%">
        </div>
    </div>
@endsection