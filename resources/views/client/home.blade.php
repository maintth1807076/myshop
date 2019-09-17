@extends('client.layout')

@section('content')
    <div class="">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($list_slide as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{$item->url}}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid">

        <div class="text-center  text-uppercase col-12 col-sm-auto ">
            <h1>
                <pre> S ả n  p h ẩ m  n ổ i  b ậ t</pre>
            </h1>
            <hr>
        </div>

        <div class="row m-2">
            @foreach($list_product_hot as $item)
                <div class="col-xl-3 col-sm-4 col-12 mb-5">
                    <div class="card">
                        <div class="fuild">
                            <div class="img-cart">
                                <a target="_blank" href="/product/{{$item->id}}">
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
        <div class="col-12 col-sm-auto text-center show-more">
            <button type="button" class="btn btn-outline-dark">
                <h4>Xem thêm sản phẩm</h4>
            </button>

        </div>

        <section class=" border-bottom-product">
                <div class="policy-wrapper">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="policy">
                                <div class="policy-icon">
                                    <img src="//hstatic.net/630/1000124630/1000169630/policy_1.png?v=784" alt="GIÁ SẢN PHẨM">
                                </div>

                                <div class="policy-text">
                                    <h5>GIÁ SẢN PHẨM</h5>
                                    <p>Tốt nhất thị trường </p>
                                </div>
                            </div><!-- /.policy -->
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="policy">
                                <div class="policy-icon">
                                    <img src="//hstatic.net/630/1000124630/1000169630/policy_2.png?v=784" alt="GIAO HÀNG">
                                </div>

                                <div class="policy-text">
                                    <h5>GIAO HÀNG</h5>
                                    <p>Siêu tốc, uy tín</p>
                                </div>
                            </div><!-- /.policy -->
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="policy">
                                <div class="policy-icon">
                                    <img src="//hstatic.net/630/1000124630/1000169630/policy_3.png?v=784" alt="24/7">
                                </div>

                                <div class="policy-text">
                                    <h5>24/7</h5>
                                    <p>Tư vấn chuyên nghiệp về sản phẩm</p>
                                </div>
                            </div><!-- /.policy -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.policy-wrapper --><!-- /.container -->
        </section>

        <div class="container-fluid product1">
            <div class="text-center  text-uppercase col-12 col-sm-auto ">
                <h1>
                    <pre> X u  h ư ớ n g  m u a  h à n g</pre>
                </h1>
                <hr>
            </div>

            <div class="row product-hot">
                <div class="col-sm-9">
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                        <div class="controls-top">
                            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                    class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="carousel-inner" role="listbox">

                            @for($i = 0; $i <count($list_product_hot)-3; $i++)
                                <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="card mb-2">
                                                <div class="card">
                                                    <div class="fuild">
                                                        <div class="img-cart">
                                                            <a target="_blank"
                                                               href="/product/{{$list_product_hot[$i]->id}}">
                                                                <div
                                                                    style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i]->productDetail->first()->thumbnail}}')"></div>
                                                            </a>

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
                                        </div>
                                        <div class="col-sm-4 clearfix d-none d-md-block">
                                            <div class="card mb-2">
                                                <div class="fuild">
                                                    <div class="img-cart">
                                                        <a target="_blank"
                                                           href="/product/{{$list_product_hot[ $i + 1]->id}}">
                                                            <div
                                                                style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i + 1]->productDetail->first()->thumbnail}}')"></div>
                                                        </a>

                                                    </div>
                                                    <div class="overlay">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link active color" href="#">
                                                                    <i class="fa fa-shopping-bag"
                                                                       style="font-size:30px"></i>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link color1" href="#">
                                                                    <i class="fa fa-eye" style="font-size:30px"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix d-none d-md-block">
                                            <div class="card mb-2">
                                                <div class="fuild">
                                                    <div class="img-cart">
                                                        <a target="_blank"
                                                           href="/product/{{$list_product_hot[ $i + 2]->id}}">
                                                            <div
                                                                style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i + 2]->productDetail->first()->thumbnail}}')"></div>
                                                        </a>

                                                    </div>

                                                    <div class="overlay">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link active color" href="#">
                                                                    <i class="fa fa-shopping-bag"
                                                                       style="font-size:30px"></i>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link color" href="#">
                                                                    <i class="fa fa-eye" style="font-size:30px"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 clearfix d-none d-md-block">
                    <div class="fuild" style="margin-top: 23px">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                 src="http://mohinhdep.net/wp-content/uploads/2018/05/Your-name-mohinhdep.net-1.jpg"
                                 alt="Card image cap">
                        </div>
                        <div class="overlay overlay1">
                            <div class="card-title">
                                <h3><b>Mô hình/FIGRUTE</b></h3>
                            </div>
                            <a href="#">
                                <section class="buttons">
                                    <div class="container1">
                                        <a href="#" class="btn1 btn-5">
                                            View all
                                        </a>
                                    </div>
                                </section>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row  product-hot">
                <div class="col-sm-3 clearfix d-none d-md-block">
                    <div class="fuild" style="margin-top: 23px">
                        <div class="card mb-2">
                            <img class="card-img-top"
                                 src="https://zpro.vn/images/product/500x500/moc-khoa-chao-game-pubg-nhieu-kieu-moi.1544426036.jpg"
                                 alt="Card image cap">
                        </div>
                        <div class="overlay overlay1">
                            <div class="card-title">
                                <h3><b>Móc khóa</b></h3>
                            </div>
                            <a href="#">
                                <section class="buttons">
                                    <div class="container1">
                                        <a href="#" class="btn1 btn-5">
                                            View all
                                        </a>
                                    </div>
                                </section>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                        <div class="controls-top">
                            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                    class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="carousel-inner" role="listbox">

                            @for($i = 0; $i <count($list_product_hot)-3; $i++)
                                <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="card mb-2">
                                                <div class="card">
                                                    <div class="fuild">
                                                        <div class="img-cart">
                                                            <a target="_blank"
                                                               href="/product/{{$list_product_hot[$i]->id}}">
                                                                <div
                                                                    style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i]->productDetail->first()->thumbnail}}')"></div>
                                                            </a>

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
                                        </div>
                                        <div class="col-sm-4 clearfix d-none d-md-block">
                                            <div class="card mb-2">
                                                <div class="fuild">
                                                    <div class="img-cart">
                                                        <a target="_blank"
                                                           href="/product/{{$list_product_hot[ $i + 1]->id}}">
                                                            <div
                                                                style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i + 1]->productDetail->first()->thumbnail}}')"></div>
                                                        </a>

                                                    </div>
                                                    <div class="overlay">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link active color" href="#">
                                                                    <i class="fa fa-shopping-bag"
                                                                       style="font-size:30px"></i>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link color" href="#">
                                                                    <i class="fa fa-eye" style="font-size:30px"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 clearfix d-none d-md-block">
                                            <div class="card mb-2">
                                                <div class="fuild">
                                                    <div class="img-cart">
                                                        <a target="_blank"
                                                           href="/product/{{$list_product_hot[ $i + 2]->id}}">
                                                            <div
                                                                style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i + 2]->productDetail->first()->thumbnail}}')"></div>
                                                        </a>

                                                    </div>

                                                    <div class="overlay">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link active color" href="#">
                                                                    <i class="fa fa-shopping-bag"
                                                                       style="font-size:30px"></i>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link color" href="#">
                                                                    <i class="fa fa-eye" style="font-size:30px"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
