@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List Products
                <small class="text-muted">All products availble</small>
            </h3>
            <a href="{{route('products.create')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add new Products</a>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-7">
        </div>
        <div class="col-5">
            <div class="form-group float-left mr-2">
                <select class="form-control">
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                    <option>Category 01</option>
                </select>
            </div>
            <form method="get" action="{{route('search')}}">
            <div  class="form-group float-left mr-2" >
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter keyword to search" name="key">
            </div>
            <div class="form-group float-left">
                <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
            </div>
            </form>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><input style="width: auto" id="check-all" type="checkbox" class="form-control" name=""></th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Description</th>
                <th scope="col">Detail</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <h1> Tìm thấy {{count($product)}} sản phẩm</h1>
            <tbody>
            @foreach($product as $item)
                <tr>

                    <th><input type="checkbox" class="check-item" value="{{$item->id}}"></th>
                    <td>{{$item->id}}</td>
                    <td><a href="/game/{{$item->id}}">{{$item->name}}</a></td>
{{--                                        <td><img src="https://res.cloudinary.com/khaihoquang/image/upload/v1566356468/c_fit,h_300,w_300/{{$item->thumbnail}}" alt="{{$item->name}}"></td>--}}
                    <td style="width: 25%"><img alt="{{$item->name}}" style="width: 20%" src="{{$item->productDetail->first()->thumbnail}}"></td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->detail}}</td>
                    <td>{{$item->categories->name}}</td>
                    <td>
                        <a href="{{route('products.show', [$item->id])}}" class="mr-2" title="View game detail">Detail</a>
{{--                                                <a href="javascript:void(0)" id="btn-edit-{{$item->id}}" class="mr-2 btn-edit" title="Edit this game">Edit</a>--}}
                        <a href="{{route('products.edit',[$item->id])}}" class="mr-2">Edit</a>
                        <a href="javascript:void(0)" id="btn-delete-{{$item->id}}" class="mr-2 btn-delete" title="Delete this game">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="form-group mr-3">
            <select class="form-control mr-2" name="action-id" id="select-action">
                <option value="2">Choose action</option>
                <option value="-1">Delete</option>
                <option value="1">Publish</option>
            </select>
        </div>
        <div class="form-group">
            <button id="btn-apply-all-product" type="submit" class="btn btn-outline-primary mb-2">Apply to all</button>
        </div>
    </div>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <nav aria-label="Page navigation example">
{{--                {{$list->links()}}--}}
            </nav>
        </div>
    </div>
@endsection
