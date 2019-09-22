@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List [Oders]
                <small class="text-muted">All [Oders] availble</small>
            </h3>
            <a href="{{route('products.create')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add new Products</a>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-7">
        </div>
{{--        <div class="col-5">--}}
{{--            <div class="form-group float-left mr-2">--}}
{{--                <select name="categoryId" class="form-control">--}}
{{--                    <option value="0" {{($currentCategoryId == 0) ? 'selected':''}}>Tất cả</option>--}}
{{--                    @foreach($categories as $category)--}}
{{--                        <option value="{{$category->id}}" {{($currentCategoryId == $category->id) ? 'selected':''}}>{{$category->name}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <div class="form-group float-left mr-2">--}}
{{--                <input type="text" class="form-control mb-2 mr-sm-2" name="keyword"--}}
{{--                       placeholder="Enter keyword to search" value="{{$currentKeyword}}">--}}
{{--                <input type="hidden" name="currentPage" value="{{$currentPage}}">--}}
{{--            </div>--}}
{{--            <div class="form-group float-left">--}}
{{--                <button type="submit" id="btn-search" class="btn btn-outline-primary mb-2">Search</button>--}}
{{--            </div>--}}
{{--            <div class="filter-btn form-inline" action="/admin/order" method="GET">--}}
{{--                <div class="form-group mx-sm-4 mb-3">--}}
{{--                    <label for="chooseStatus">Status</label>--}}
{{--                    <select id="select-action" name="status" class="form-control">--}}
{{--                        <option selected value="3" {{3==$choosedStatus?'selected':''}}>All</option>--}}
{{--                        <option value="0" {{0==$choosedStatus?'selected':''}}>Confirming</option>--}}
{{--                        <option value="1" {{1==$choosedStatus?'selected':''}}>Confirmed</option>--}}
{{--                        <option value="2" {{2==$choosedStatus?'selected':''}}>Finished</option>--}}
{{--                        <option value="-1" {{-1==$choosedStatus?'selected':''}}>Cancelled</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                --}}{{--<div class="form-group mx-sm-4 mb-3">--}}
{{--                --}}{{--<label for="chooseTime">Time</label>--}}
{{--                --}}{{--<select id="select-action" name="categoryId" class="form-control">--}}
{{--                --}}{{--<option selected value="1">Today</option>--}}
{{--                --}}{{--<option selected value="2">Last Week</option>--}}
{{--                --}}{{--<option selected value="3">Last Month</option>--}}
{{--                --}}{{--<option selected value="4">Last 2 Months</option>--}}
{{--                --}}{{--<option selected value="5">All</option>--}}
{{--                --}}{{--</select>--}}
{{--                --}}{{--</div>--}}

{{--            </div>--}}
{{--        </div>--}}
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <table class="table">
                <thead>
                <tr>
                    <th class="column-0"></th>
                    <th class="column-1 text-center">ID</th>
                    <th class="column-2">Receiver</th>
                    <th class="column-3">Address</th>
                    <th class="column-4">Phone Number</th>
                    <th class="column-5">Order Detail</th>
                    <th class="column-6" style="width: 6%;">Total</th>
                    <th class="column-9">Created Time</th>
                    <th class="column-7">Status</th>
                    <th class="column-8 text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $item)
                    <tr class="row-item" id="row-item-{{$item->id}}">
                        <td class="column-0">
                            @if($item->status==1 || $item->status==0)
                                <input type="checkbox" class="check-item">
                            @endif
                        </td>
                        <td class="column-1 text-center">
                            <div>{{$item->id}}</div>
                            <a class="btn btn-simple btn-link btn-icon text-center" data-placement="top"
                               title="Click to view the details of this order" href="/admin/order/{{$item->id}}">
                                <button class="btn btn-outline-success">Detail</button>
                            </a>
                        </td>
                        <td class="column-2">{{$item->ship_name}}</td>
                        <td class="column-3">{{$item->ship_address}}</td>
                        <td class="column-4">{{$item->ship_phone}}</td>
{{--                        <td class="column-5">--}}
{{--                            @foreach($item->details as $order_detail)--}}
{{--                                <li>{{$order_detail->quantity}} - {{$order_detail->product->name}}</li>--}}
{{--                            @endforeach--}}
{{--                        </td>--}}
{{--                        <td class="column-6" style="width: 6%;">{{$item->total_money_with_format}} (vnd)</td>--}}
{{--                        <th class="column-9" style="font-weight: normal;">{{$item->created_at}}</th>--}}
{{--                        <td class="column-7 font-weight-bold status-label">{{$item->statusLabel}}</td>--}}
{{--                        <td class="column-8 text-center">--}}
{{--                            @if($item->status == 0)--}}
{{--                                <a href="/admin/order/update-status/{{$item->id}}?status=1" onclick="return confirm('Are sure to confirm this order?')"--}}
{{--                                   class="btn btn-simple btn-info btn-icon edit" title="Click to have this order confirmed"><i class="fas fa-hourglass"></i></a>--}}
{{--                                <a href="/admin/order/update-status/{{$item->id}}?status=-1" onclick="return confirm('Are sure to confirm this order?')"--}}
{{--                                   class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i class="fas fa-times"></i></a>--}}
{{--                            @elseif($item->status==1)--}}
{{--                                <a href="/admin/order/update-status/{{$item->id}}?status=2" onclick="return confirm('Are you sure to finish this order?')"--}}
{{--                                   class="btn btn-simple btn-success btn-icon edit" title="Click to have this order finished"><i class="fas fa-check"></i></a>--}}
{{--                                <a href="/admin/order/update-status/{{$item->id}}?status=-1" onclick="return confirm('Are sure to cancel this order?')"--}}
{{--                                   class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i class="fas fa-times"></i></a>--}}
{{--                            @elseif($item->status==2)--}}
{{--                                <i class="fas fa-check 4x text-danger"></i>--}}
{{--                            @elseif($item->status==-1)--}}
{{--                                <i class="fas fa-times 4x text-danger"></i>--}}
{{--                            @endif--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-8 form-inline">
                    <div class="form-check mb-2">
                        <input class="form-check-input col-lg-2" type="checkbox" value="" id="check-all">
                        <select id="select-action" name="select-action" class="form-control">
                            <option selected value="0">Action</option>
                            <option value="1">Confirm All</option>
                            <option value="2">Finish All</option>
                            <option value="-1">Cancel All</option>
                        </select>
                        <button type="submit" class="btn btn-primary ml-2" id="btn-apply-action">Submit</button>
                    </div>
                </div>
            </div>
{{--            @else--}}
{{--                <div class="alert alert-info">Have no order in this field.--}}
{{--                </div>--}}
{{--            @endif--}}
            <div class="pagination pull-right">
                {!! $orders->links() !!}
            </div>
            </thead>
        </table>
    </div>
@endsection