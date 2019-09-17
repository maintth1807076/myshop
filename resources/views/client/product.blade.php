@extends('client.layout')

@section('content')
    <div class="container-fluid">
        <div class="row" style="margin-top: 5%;">
            <div class="col-sm-3 filter">
                <div class="title-filter" ><p>Lọc sản phẩm</p></div>
                <div class="filter-name">
                    <label for="name"><b> Lọc theo tên:</b></label>
                    <br>
                    <input type="text" name="name"></div>
                <div class="filter-price">
                    <label for="name"><b> Lọc theo giá:</b></label>
                    <br>
                     <input type="checkbox" name="price1" value="price1" checked>100.000VNĐ.
                    <br>
                     <input type="checkbox" name="price2" value="price2">100.000VNĐ-500.000VNĐ.
                    <br>
                        <input type="checkbox" name="price3" value="price3">Trên 500.000VNĐ.



                </div>
                <div class="filter-category">
                    <label for="name"><b> Lọc theo loại sản phẩm:</b></label>
                    <br>
                       <input type="checkbox" name="category1" value="category1" checked>PVC Figure
                    <br>
                       <input type="checkbox" name="category2" value="category2">Nendoroid
                    <br>
                      <input type="checkbox" name="category3" value="category3">Figma
                    <br>
                       <input type="checkbox" name="category4" value="category4">Revoltech



                </div>
                <div class="ce">
                    <button  type="button" class="btn btn-danger" >Lọc</button>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="text-center">
                    <h3><b>Tất cả sản phẩm</b> </h3>
                </div>
                <ul class="nav nav-tabs">

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#listView">
                            <button class="btn btn-outline-info"><i class="fa fa-th-large"></i></button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#gridView">
                            <button class="btn btn-outline-info"><i class="fa fa-bars"></i></button>
                        </a>
                    </li>
                    <li class="nav-item sort">
                      <div class="row " >

                          <label>Sắp xếp:</label>
                          <select name=" index-view-page" id="index-view-page" class="form-control">
                                <option value="date">Ngày: Mới- Cũ</option>
                                <option value="product-hot">Sản phẩm nổi bật</option>
                                <option value="36">Sản phẩm bán chạy</option>
                                <option value="36">Tên: A-Z</option>
                                <option value="36">Tên: Z-A</option>
                                <option value="36">Giá: Tăng dần</option>
                                <option value="36">Giá: Giảm dần</option>
                                <option value="date">Ngày: Mới- Cũ</option>
                                <option value="date">Ngày: Cũ- Mới</option>
                            </select>
                        </div>

                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div id="gridView" class="container tab-pane fade"><br>
                        <div class="row">
                            @foreach($list_product as $item)
                                <div class="col-12">
                                    <div class="card2">
                                        <div class="fuild">
                                            <div class="img-cart2 col-sm-4">
                                                <a target="_blank" href="/product/{{$item->id}}">
                                                    <div style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$item->productDetail->first()->thumbnail}}')"></div>
                                                </a>

                                            </div>
                                            <div class="card-body2 col-sm-8">
                                                <h4 class="card-text name">{{$item->name}}</h4>
                                                <h3 class="card-text "> <pre> <b> {{number_format($item->price)}} VNĐ</b></pre> </h3>
                                                <h5 class="card-text ">{{$item->detail}} </h5>
                                                <div class="button-add-car">
                                                    <button type="submit" name="add" id="AddToCart" class="btn btn-danger ">
                                                        <a class=" nav-link " href="#">
                                                            <b >Thêm vào giỏ hàng</b>
                                                        </a>
                                                        {{--                                            <span id="AddToCartText" class="fas fa-cart-plus"> Thêm vào giỏ hàng</span>--}}
                                                    </button></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="listView" class="container tab-pane active"><br>
                        <div class="row">
                            @foreach($list_product as $item)
                                <div class=" col-sm-4  mb-5">
                                    <div class="card">
                                        <div class="fuild">
                                            <div class="img-cart">
                                                <a target="_blank" href="/product/{{$item->id}}">
                                                    <div style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$item->productDetail->first()->thumbnail}}')"></div>
                                                </a>

                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-text name">{{$item->name}}</h4>
                                                <h3 class="card-text "> <pre> <b> {{number_format($item->price)}} VNĐ</b></pre> </h3>
                                            </div>
                                            <div class="overlay overlay-product">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="add-cart nav-link active color" href="javascript:void(0)" data-id="{{$item->id}}"
                                                           data-price="{{$item->price}}"
                                                           data-name="{{$item->name}}"
                                                           data-thumbnail="{{$item->productDetail->first()->thumbnail}}">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px;"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="/product/{{$item->id}}">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
{{--    <style>--}}


{{--        /* Main content */--}}

{{--        /* Add an active class to the active dropdown button */--}}

{{--        * {--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}

{{--        /* Create two equal columns that floats next to each other */--}}


{{--        .column {--}}
{{--            float: left;--}}
{{--            width: 50%;--}}
{{--            padding: 10px;--}}

{{--        }--}}

{{--        /* Clear floats after the columns */--}}
{{--        .row:after {--}}
{{--            content: "";--}}
{{--            display: table;--}}
{{--            clear: both;--}}
{{--        }--}}

{{--        /* Style the buttons */--}}
{{--        .btn {--}}
{{--            border: none;--}}
{{--            outline: none;--}}
{{--            padding: 12px 16px;--}}
{{--            background-color: #f1f1f1;--}}
{{--            cursor: pointer;--}}
{{--        }--}}

{{--        .btn:hover {--}}
{{--            background-color: #ddd;--}}
{{--        }--}}

{{--        .sidenav {--}}
{{--            z-index: 1;--}}
{{--            left: 0;--}}
{{--            background-color: #ffffff;--}}
{{--            overflow-x: hidden;--}}
{{--            padding-top: 20px;--}}
{{--        }--}}

{{--        /* Style the sidenav links and the dropdown button */--}}
{{--        .sidenav a, .dropdown-btn {--}}
{{--            padding: 6px 8px 6px 16px;--}}
{{--            text-decoration: none;--}}
{{--            font-size: 20px;--}}
{{--            color: #818181;--}}
{{--            display: block;--}}
{{--            border: none;--}}
{{--            background: none;--}}
{{--            width: 100%;--}}
{{--            text-align: left;--}}
{{--            cursor: pointer;--}}
{{--            outline: none;--}}
{{--        }--}}

{{--        /* On mouse-over */--}}
{{--        .sidenav a:hover, .dropdown-btn:hover {--}}
{{--            color: #060606;--}}
{{--        }--}}

{{--        /* Main content */--}}

{{--        /* Add an active class to the active dropdown button */--}}
{{--        .active {--}}
{{--            background-color: #fffff7;--}}
{{--            color: #060606;--}}
{{--        }--}}

{{--        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */--}}
{{--        .dropdown-container {--}}
{{--            display: none;--}}
{{--            background-color: rgba(255, 255, 247, 0.19);--}}
{{--            padding-left: 8px;--}}
{{--        }--}}

{{--        /* Optional: Style the caret down icon */--}}
{{--        .fa-caret-down {--}}
{{--            float: right;--}}
{{--            padding-right: 8px;--}}
{{--        }--}}

{{--        /* Some media queries for responsiveness */--}}
{{--        @media screen and (max-height: 450px) {--}}
{{--            .sidenav {--}}
{{--                padding-top: 15px;--}}
{{--            }--}}

{{--            .sidenav a {--}}
{{--                font-size: 18px;--}}
{{--            }--}}
{{--        }--}}

{{--        .dropdown-container a:hover {--}}
{{--            background: rgba(90, 98, 104, 0.13);--}}
{{--        }--}}

{{--        .dropdown-btn:hover {--}}
{{--            background: rgba(90, 98, 104, 0.13);--}}
{{--        }--}}

{{--    </style>--}}
@endsection

