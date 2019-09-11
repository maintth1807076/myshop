@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List category
                <small class="text-muted">All category availble</small>
            </h3>
            <a href="{{route('categories.create')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add new</a>
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
            <div class="form-group float-left mr-2">
                <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                       placeholder="Enter keyword to search">
            </div>
            <div class="form-group float-left">
                <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><input id="check-all" type="checkbox" class="form-control" name=""></th>
                <th scope="col">ID</th>
                <th scope="col">Thumbnail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr>
                    <th scope="row"><input type="checkbox" class="form-control check-item" value="{{$item->id}}"></th>
                    <td><img src="{{$item->url}}" alt="{{$item->id}}"></td>
                    <td>{{$item->content}}</td>
                    <td>
                        <a href="{{route('categories.show', [$item->id])}}" class="mr-2"
                           title="View game detail">Detail</a>
                        <a href="javascript:void(0)" id="btn-edit-{{$item->id}}" class="mr-2 btn-edit"
                           title="Edit this game">Edit</a>
                        <a href="javascript:void(0)" id="btn-delete-{{$item->id}}" class="mr-2 btn-delete"
                           title="Delete this game">Delete</a>
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
            <button id="btn-apply-all" type="submit" class="btn btn-outline-primary mb-2">Apply to all</button>
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
    <div class="modal" tabindex="-1" role="dialog" id="form-edit-model">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" method="post" action="">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Please enter name">
                            @error('name')
                            <small class="text-danger form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            Thumbnail<input type="file" name="images" class="form-control" value="">
                            <img src="" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <input name="description" type="text" class="form-control"
                                   placeholder="Please enter description">
                            @error('description')
                            <small class="text-danger form-text text-muted">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection




