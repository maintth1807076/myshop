@extends('client.layout')

@section('content')
    <div class="container-fluid">
        <div class="row" style="margin-top: 5%;">
            <div class="col-sm-3 filter ">
                <div class="title-filter"><p>Lọc sản phẩm</p></div>
                <div class="filter-name">
                    <label for="name"><b> Lọc theo tên:</b></label>
                    <br>
                    <input type="text" name="keyword1" value="{{$currentKeyword}}">
                    <input type="hidden" name="currentPage" value="{{$currentPage}}">
                </div>
                {{--                <div class="filter-price">--}}
                {{--                    <label for="name"><b> Lọc theo giá:</b></label>--}}
                {{--                    <br>--}}
                {{--                    <input type="checkbox" name="price1" value="price1">100.000VNĐ.--}}
                {{--                    <br>--}}
                {{--                    <input type="checkbox" name="price2" value="price2">100.000VNĐ-500.000VNĐ.--}}
                {{--                    <br>--}}
                {{--                    <input type="checkbox" name="price3" value="price3">Trên 500.000VNĐ.--}}
                {{--                </div>--}}
                <div class="filter-category">
                    <label for="name"><b> Lọc theo loại sản phẩm:</b></label>
                    <br>
                    <input type="radio" name="categoryId" value="0" {{($currentCategoryId == 0) ? 'checked':''}}>Tất cả
                    <br>
                    @foreach($list_category as $category)
                        <br>
                        <input type="radio" name="categoryId"
                               value="{{$category->id}}" {{($currentCategoryId == $category->id) ? 'checked':''}}>{{$category->name}}
                    @endforeach
                </div>
                <div class="button-filter">
                    <button type="button" class="btn btn-primary" id="btn-search-home">Lọc</button>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="text-center">
                    @if ($currentCategoryId == 0)
                        <h3><b>Tất cả sản phẩm</b></h3>
                    @elseif ($currentCategoryId == 1)
                        <h3><b>Sản phẩm PVC Figure</b></h3>
                    @elseif ($currentCategoryId == 2)
                        <h3><b>Sản phẩm Nendoroid</b></h3>
                    @elseif ($currentCategoryId == 3)
                        <h3><b>Sản phẩm Figma</b></h3>
                    @else
                        <h3><b>Sản phẩm Revoltech</b></h3>
                    @endif
                </div>
                <ul class="nav nav-tabs">

                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#gridView">
                            <button class="btn btn-outline-info"><i class="fa fa-th-large"></i></button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href=" #listView">
                            <button class="btn btn-outline-info"><i class="fa fa-bars"></i></button>
                        </a>
                    </li>
                    <li class="nav-item sort">
                        <div class="row ">
                            <label>Sắp xếp:</label>
                            <div class="filter-btn form-inline" action="/products" method="GET">
                                <select name="sortBy" id="index-view-page" class="form-control">
                                    <option value="1" {{($currentSortBy == 1) ? 'selected':''}}>Sản phẩm nổi bật</option>
                                    <option value="2" {{($currentSortBy == 2) ? 'selected':''}}>Sản phẩm bán chạy</option>
                                    <option value="3" {{($currentSortBy == 3) ? 'selected':''}}>Tên: A-Z</option>
                                    <option value="4" {{($currentSortBy == 4) ? 'selected':''}}>Tên: Z-A</option>
                                    <option value="5" {{($currentSortBy == 5) ? 'selected':''}}>Giá: Tăng dần</option>
                                    <option value="6" {{($currentSortBy == 6) ? 'selected':''}}>Giá: Giảm dần</option>
                                </select>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                    <div id="gridView" class="container tab-pane  active"><br>
                        @if($list_product->isEmpty())
                            <h6>Không có sản phẩm phù hợp.</h6>
                        @else
                            <div class="row">
                                @foreach($list_product as $item)
                                    <div class=" col-sm-4  mb-5">
                                        <div class="card">
                                            <div class="fuild">
                                                <div class="img-cart">
                                                    <a href="/product/{{$item->id}}">
                                                        <div
                                                                style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$item->productDetail->first()->thumbnail}}')"></div>
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-text name">{{$item->name}}</h4>
                                                    <h3 class="card-text ">
                                                        <pre> <b> {{number_format($item->price)}} VNĐ</b></pre>
                                                    </h3>
                                                </div>
                                                <div class="overlay overlay-product">
                                                    <div style="display: flex">
                                                    <span style="width: 50%; text-align: center">
                                                     <a class="add-cart nav-link active color" href="javascript:void(0)"
                                                        data-id="{{$item->id}}"
                                                        data-price="{{$item->price}}"
                                                        data-name="{{$item->name}}"
                                                        data-thumbnail="{{$item->productDetail->first()->thumbnail}}">
                                            <i class="fa fa-shopping-bag" style="font-size:30px;"></i>
                                        </a>
                                    </span>
                                                        <span style="width: 50%; text-align: center">
                                        <a class="nav-link color1" href="/product/{{$item->id}}">
                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                        </a>
                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div id="listView" class="container tab-pane  fade"><br>
                        @if($list_product->isEmpty())
                            <h6>Không có sản phẩm phù hợp.</h6>
                        @else
                            <div class="row">
                                @foreach($list_product as $item)
                                    <div class="col-12">
                                        <div class="card2">
                                            <div class="fuild">
                                                <div class="img-cart2 col-sm-4">
                                                    <a href="/product/{{$item->id}}">
                                                        <div
                                                                style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$item->productDetail->first()->thumbnail}}')"></div>
                                                    </a>
                                                </div>
                                                <div class="card-body2 col-sm-8">
                                                    <h4 class="card-text name">{{$item->name}}</h4>
                                                    <h3 class="card-text ">
                                                        <pre> <b> {{number_format($item->price)}} VNĐ</b></pre>
                                                    </h3>
                                                    <h5 class="card-text ">{{$item->detail}} </h5>
                                                    <div class="button-add-car">
                                                        <button name="add" class="btn btn-primary ">
                                                            <a class="add-cart nav-link active color"
                                                               href="javascript:void(0)"
                                                               data-id="{{$item->id}}"
                                                               data-price="{{$item->price}}"
                                                               data-name="{{$item->name}}"
                                                               data-thumbnail="{{$item->productDetail->first()->thumbnail}}"
                                                               style="color: black">
                                                                <b>Thêm vào giỏ hàng</b>
                                                            </a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <nav aria-label="Page navigation example">
                            {{$list_product->links()}}
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

