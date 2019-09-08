@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> Search
                <small class="text-muted">All products availble</small>
            </h3>
            <a href="{{route('products.create')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add new Products</a>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-7">
        </div>
        <div class="col-5">
            <div class="form-group float-left mr-2" id="action_search">
                <select class="form-control">
                    <option>tìm theo Name</option>
                    <option>tìm theo Id_categories</option>
                    <option>tìm theo detail</option>
                </select>
            </div>
            <form method="get" action="{{route('search')}}"> <div class="form-group float-left mr-2">
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Enter keyword to search" name="key">
                </div>
                <div class="form-group float-left">
                    <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
                </div></form>

        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead >
            <tr id="action_search">
                <th scope="col"><input style="width: auto" id="check-all" type="checkbox" class="form-control" name=""></th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Detail</th>
                <th scope="col">Id_Categories</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <h1> Tìm thấy {{count($product)}} sản phẩm</h1>
            <tbody>
            @foreach($product as $item)
                <tr>

                    <th><input name="checkedAll" type="checkbox" class="check-item" value="{{$item->id}}"></th>
                    <td>{{$item->id}}</td>
                    <td><a href="/game/{{$item->id}}">{{$item->name}}</a></td>
                    <td style="width: 25%"><img alt="{{$item->name}}" style="width: 20%" src="{{$item->thumbnail}}"></td>
                    <td><a href="admin/products/{{$item->id}}">{{$item->price}}</a></td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->detail}}</td>
                    <td>{{$item->id_categories}}</td>
                    <td>
                        <a href="/admin/products/{{$item->id}}"id="btn-update-{{$item->id}}"  class="mr-2" title="View game detail">Detail</a>
                        <a href="/admin/products/{{$item->id}}/edit" id="btn-update-{{$item->id}}" class="mr-2 btn-update" title="Edit this game">Edit</a>
                        <a href="javascript:void(0)" id="btn-delete-{{$item->id}}" class="mr-2 btn-delete" title="Delete this game">Delete</a>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
