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
                <select name="categoryId" class="form-control">
                    <option value="0" {{($currentCategoryId == 0) ? 'selected':''}}>Tất cả</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{($currentCategoryId == $category->id) ? 'selected':''}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group float-left mr-2">
                <input type="text" class="form-control mb-2 mr-sm-2" name="keyword"
                       placeholder="Enter keyword to search" value="{{$currentKeyword}}">
                <input type="hidden" name="currentPage" value="{{$currentPage}}">
            </div>
            <div class="form-group float-left">
                <button type="submit" id="btn-search" class="btn btn-outline-primary mb-2">Search</button>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><input style="width: auto" id="check-all" type="checkbox" class="form-control" name="">
                </th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Detail</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr>
                    <th><input type="checkbox" class="check-item" value="{{$item->id}}"></th>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td width="5%"><img width="100%" alt="{{$item->name}}" src="{{$item->productDetail->first()->thumbnail}}"></td>
                    <td>{{$item->price}}</td>
                    <td>{{substr($item->description,0,100)}}{{strlen($item->description)>100?"...":""}}</td>
                    <td>{{substr($item->detail,0,100)}}{{strlen($item->detail)>100?"...":""}}</td>
                    <td>{{$item->categories->name}}</td>
                    <td width="15%">
                        <a href="{{route('products.show', [$item->id])}}" class="mr-2"
                           title="View product detail">Detail</a>
                        <a href="javascript:void(0)" id="btn-edit-{{$item->id}}" class="mr-2 btn-product-edit"
                           title="Edit this product">Edit</a>
                        <a href="javascript:void(0)" id="btn-delete-{{$item->id}}" class="mr-2 btn-product-delete"
                           title="Delete this product">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="form-group mr-3">
            <select class="form-control mr-2" name="action-id">
                <option value="0">Choose action</option>
                <option value="-1">Delete</option>
                <option value="1">Publish</option>
            </select>
        </div>
        <div class="form-group">
            <button id="btn-product-apply-all" type="submit" class="btn btn-outline-primary mb-2">Apply to all</button>
        </div>
    </div>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">
            <nav aria-label="Page navigation example">
                {{$list->links()}}
            </nav>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="form-product-edit-model">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" method="post" action="">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Please enter name">
                        @error('name')
                        <small class="text-danger form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="images" multiple>
                        @error('name')
                        <small class="text-danger form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input name="description" type="text" class="form-control" placeholder="Please enter description">
                        @error('description')
                        <small class="text-danger form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input name="price" type="text" class="form-control" placeholder="Please enter price">
                        @error('price')
                        <small class="text-danger form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Detail</label>
                        <input name="detail" type="text" class="form-control" placeholder="Please enter detail">
                        @error('detail')
                        <small class="text-danger form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <input name="category_id" type="text" class="form-control" placeholder="Please enter description">
                        @error('category_id')
                        <small class="text-danger form-text text-muted">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection