@extends('client.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class=" sidenav col-sm-3">
                <a href="#" class="active" style="background: rgba(7,7,7,0.8); color: white;">Lọc sản phẩm</a>
                <button class="dropdown-btn active">Giá tiền
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container active">
                    <a href="#">0 - 1000$</a>
                    <a href="#">1000$ - 2000$</a>
                    <a href="#">2000$ - 6000$</a>
                    <a href="#">Lớn hơn 6000$</a>
                </div>
                <button class="dropdown-btn active">Hãng sản xuất
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container active">
                    <a href="#">Titan</a>
                    <a href="#">Toys</a>
                </div>
                <button class="dropdown-btn active">Màu
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container active">
                    <a href="#">Red</a>
                    <a href="#">Green</a>
                    <a href="#">Bmw</a>
                </div>
                <button class="dropdown-btn active">Bảo hành
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container active">
                    <a href="#">1 năm</a>
                    <a href="#">6 tháng</a>
                </div>

            </div>
            <div class="col-sm-9">
                <h3> Tất cả sản phẩm</h3>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#gridView">
                            <button class="btn"><i class="fa fa-bars"></i></button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#listView">
                            <button class="btn"><i class="fa fa-th-large"></i></button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="#" method="post" style="float:right; margin-top:0;" class="form-inline col-sm-6">
                            <div class="row">
                                <label> Sắp xếp: <br></label>
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
                        </form>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="gridView" class="container tab-pane active"><br>
                        <div class="row">
                            @foreach($list_product as $item)
                                <div class="col-xl-3 col-sm-4 col-12 mb-5">
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
                                            <div class="overlay">
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
                    <div id="listView" class="container tab-pane fade"><br>
                        <div class="row">
                            @foreach($list_product as $item)
                                <div class="col-xl-3 col-sm-4 col-12 mb-5">
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
                                            <div class="overlay">
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

