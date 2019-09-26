@extends('client.layout')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-6 col-12 col-sm-12 mb-3">
                <div id="carousel-simple" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-simple" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-simple" data-slide-to="1"></li>
                            <li data-target="#carousel-simple" data-slide-to="2"></li>
                        </ol>
                        @foreach($list_product_detail as $key => $item)
                            <div class="carousel-item thumbnail {{ $key == 0 ? 'active' : '' }}">
                                <div class="product-image"
                                     style="  width: 100%; height: 540px;  background-size: cover; background-image:url('{{$item->thumbnail}}')"></div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel-simple" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-simple" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="product-details-wrapper">
                    <h2 class="product-name">
                        <a title=" "> {{$product->name}}</a>
                    </h2>
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="rating">đánh giá</span>
                    </div>
                    <div class="product-status">
                        <span>Đang bán chạy</span>
                    </div>

                    <div><p>{{$product->description}}</p></div>
                    <div class="product-price product-actions">
                        <span class="price">{{number_format($product->price)}} <ins>đ</ins></span>
                    </div>
                    <div class="product-actions-wrapper">
{{--                        <div class="product-signle-options clearfix">--}}
{{--                            <div class="product-single-quantity">--}}
{{--                                <label for="Quantity">Số Lượng: </label>--}}
{{--                                <input type="number" id="Quantity" name="quantity" value="1" min="1"--}}
{{--                                       class="quantity-selector form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="product-actions">
                            <div class="row">
                                <div class="col-xl-3 col-md-3 col-sm-4 mb-3">
{{--                                    <button class="btn btn-lg btn-warning">--}}
{{--                                        <a style="color: black" class="add-cart " href="javascript:void(0)" data-id="{{$product->id}}"--}}
{{--                                           data-price="{{$product->price}}"--}}
{{--                                           data-name="{{$product->name}}"--}}
{{--                                           data-thumbnail="{{$product->productDetail->first()->thumbnail}}">--}}
{{--                                            <i class="fa fa-shopping-cart" style="font-size:1.125rem">Mua ngay</i>--}}
{{--                                        </a>--}}
{{--                                    </button>--}}
                                </div>
                                <div class="col-xl-3 col-md-3 col-sm-4">
                                    <button class="btn btn-lg btn-primary">
                                        <a style="color: black" class="add-cart " href="javascript:void(0)" data-id="{{$product->id}}"
                                           data-price="{{$product->price}}"
                                           data-name="{{$product->name}}"
                                           data-thumbnail="{{$product->productDetail->first()->thumbnail}}">
                                            <i class="fa fa-shopping-bag" style="font-size:1.125rem">Thêm vào giỏ
                                                hàng</i>
                                        </a>
                                    </button>
                                </div>
                                <div class="col-xl-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="title-name">
                            <h5 class="font-weight-bold">Mô Tả Sản Phẩm</h5>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Xuất xứ</dt>
                                <dd>Trung Quốc</dd>
                                <dt>Kích cỡ</dt>
                                <dd>16x7cm</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Chất Liệu</dt>
                                <dd>PVC cao cấp</dd>
                                <dt>Tình Trạng</dt>
                                <dd>Full Box</dd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-detail">
            <div class="col-md-12">
                <div class="title-name">
                    <h4>Chi Tiết Sản Phẩm</h4>
                    <hr>
                </div>
            </div>
            <span>
                <ul>
                    <li>Mô hình nhân vật huyền thoại trong tâm trí các fan châu Á nói chung và Việt Nam nói riêng: Tôn Ngộ Không.</li>
                    <li>Thể loại: Mô hình đồ chơi</li>
                    <li>Mã sản phẩm: TNK-2019 </li>
                    <li>Xuất xứ: Trung Quốc</li>
                    <li>Chiều cao: 16cm</li>
                    <li>Chất liệu: PVC, vải</li>
                    <li>Đóng hộp: Fullbox</li>
                    <li>Phụ kiện: Đầy đủ như hình</li>
                </ul>
            </span>
        </div>
        <div class="product-detail">
            <div class="col-md-12">
                <div class="title-name">
                    <h4>Đánh Giá Sản Phẩm</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p>
                        <img
                            src="https://yt3.ggpht.com/a/AGF-l79_5C7nXoG-wA7O4ipOvuy8Luiso7_NhhAIRA=s900-c-k-c0xffffffff-no-rj-mo"
                            class="rounded-circle img-fluid ml-5" width="65px" height="65px" alt="">
                    </p>
                    <p class="name-dt" itemprop="author">Thơ Nguyễn</p>
                    <p class="day-dt">3 ngày trước</p>
                </div>
                <div class="col-lg-10 mb-3">
                    <div class="info-dt">
                        <div class="rating-dt stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="rating">Rất Hài Lòng</span>
                        </div>
                        <div class="comment-text">
                            <span>Sản phẩm chất lượng. Giá cả phải chăng. Các bé trên kênh youtube của chị rất thích nó. Chúc shop càng ngày càng phát triển hơn.<br></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <p>
                        <img
                            src="http://assets.htv.com.vn/Images/TAP%20CHI%20HTV/HAU%20TRUONG%20TRUYEN%20HINH/HIEN/CAU%20CHUYEN%20TRUYEN%20THONG/Ba%20Tan%20Vlog/H%C3%8CNH%201_BA%20TAN%20VLOG_THUMBAIL.jpg"
                            class="rounded-circle ml-5" width="65px" height="65px" alt="">
                    </p>
                    <p class="name-dt" itemprop="author">Bà Tân Vlog</p>
                    <p class="day-dt">5 ngày trước</p>
                </div>
                <div class="col-lg-10 mb-3">
                    <div class="info-dt">
                        <div class="rating-dt stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="rating">Rất Hài Lòng</span>
                        </div>
                        <div class="comment-text">
                            <span>Các cháu ơi hơn 60 nồi bánh trưng mà bà chưa thấy sản phẩm nào đẹp như này. Hy vọng các sau này các cháu có thể làm những sản phẩm siêu to khổng lồ như bà.<br></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <p>
                        <img src="https://2sao.vietnamnetjsc.vn/images/2018/09/01/11/13/shark-Hung-02.jpg"
                             class="rounded-circle img-fluid ml-5" width="65px" height="65px" alt="">
                    </p>
                    <p class="name-dt" itemprop="author">Shark Hưng</p>
                    <p class="day-dt">7 ngày trước</p>
                </div>
                <div class="col-lg-10 mb-3">
                    <div class="info-dt">
                        <div class="rating-dt stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="rating">Rất Hài Lòng</span>
                        </div>
                        <div class="comment-text">
                            <span>Mô hình công nghệ cũng như sản phẩm bên em rất tốt. Hãy liên lạc với anh để chúng ta có thể cùng hợp tác và phát triển dự án này<br></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <form accept-charset='UTF-8' action='/contact' class='contact-form' method='post'>
                    <input name='form_type' type='hidden' value='contact'>
                    <input name='utf8' type='hidden' value='✓'>
                    <div class="form-group">
                        <textarea class="form-control dark" rows="3" id="comment"
                                  placeholder="Nhận xét của bạn"></textarea>
                    </div>
                    <div class="text-center">
                        <span>Vui lòng <a href="">đăng nhập</a> hoặc <a href="">đăng kí</a> để bình luận</span>
                        <div class="form-button">
                            <button type="submit" class="btn btn-lg btn-danger far fa-comment-dots"> Gửi Tin Nhắn
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="product-detail">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-name">
                        <h4>Sản Phẩm Liên Quan</h4>
                        <hr>
                    </div>
                </div>
            </div>
            <div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i
                                class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i
                                class="fa fa-chevron-right"></i></a>
                </div>
                <div class="carousel-inner" role="listbox">
                    @for($i = 0; $i <count($list_product_hot)-4; $i++)
                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                            <div class="row">
                                <div class="col-sm-3">
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
                                                <div class="overlay overlay-product-home2">
                                                    <p>{{number_format($list_product_hot[ $i]->price)}} VNĐ</p>
{{--                                                    <div style="display: flex">--}}
{{--                                                                <span style="width: 50%; text-align: center">--}}
{{--                                                                 <a class="add-cart nav-link active color" href="#">--}}
{{--                                                        <i class="fa fa-shopping-bag" style="font-size:30px;"></i>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                        <span style="width: 50%; text-align: center">--}}
{{--                                                    <a class="nav-link color1" href="#">--}}
{{--                                                        <i class="fa fa-eye" style="font-size:30px"></i>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <div class="img-cart">
                                                <a target="_blank"
                                                   href="/product/{{$list_product_hot[ $i + 1]->id}}">
                                                    <div
                                                            style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i + 1]->productDetail->first()->thumbnail}}')"></div>
                                                </a>

                                            </div>
                                            <div class="overlay overlay-product-home2">
                                                <p>{{number_format($list_product_hot[ $i + 1]->price)}} VNĐ</p>
{{--                                                <div style="display: flex">--}}
{{--                                                                <span style="width: 50%; text-align: center">--}}
{{--                                                                 <a class="add-cart nav-link active color" href="#">--}}
{{--                                                        <i class="fa fa-shopping-bag" style="font-size:30px;"></i>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                    <span style="width: 50%; text-align: center">--}}
{{--                                                    <a class="nav-link color1" href="#">--}}
{{--                                                        <i class="fa fa-eye" style="font-size:30px"></i>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <div class="img-cart">
                                                <a target="_blank"
                                                   href="/product/{{$list_product_hot[ $i + 2]->id}}">
                                                    <div
                                                            style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i + 2]->productDetail->first()->thumbnail}}')"></div>
                                                </a>

                                            </div>

                                            <div class="overlay overlay-product-home2">
                                                <p>{{number_format($list_product_hot[ $i + 2]->price)}} VNĐ</p>
{{--                                                <div style="display: flex">--}}
{{--                                                                <span style="width: 50%; text-align: center">--}}
{{--                                                                 <a class="add-cart nav-link active color" href="#">--}}
{{--                                                        <i class="fa fa-shopping-bag" style="font-size:30px;"></i>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                    <span style="width: 50%; text-align: center">--}}
{{--                                                    <a class="nav-link color1" href="#">--}}
{{--                                                        <i class="fa fa-eye" style="font-size:30px"></i>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <div class="img-cart">
                                                <a target="_blank"
                                                   href="/product/{{$list_product_hot[ $i + 3]->id}}">
                                                    <div
                                                            style="  width: 100%; height: 300px;  background-size: cover; background-image:url('{{$list_product_hot[$i + 3]->productDetail->first()->thumbnail}}')"></div>
                                                </a>

                                            </div>

                                            <div class="overlay overlay-product-home2">
                                                <p>{{number_format($list_product_hot[ $i + 3]->price)}} VNĐ</p>
{{--                                                <div style="display: flex">--}}
{{--                                                                <span style="width: 50%; text-align: center">--}}
{{--                                                                 <a class="add-cart nav-link active color" href="#">--}}
{{--                                                        <i class="fa fa-shopping-bag" style="font-size:30px;"></i>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                    <span style="width: 50%; text-align: center">--}}
{{--                                                    <a class="nav-link color1" href="#">--}}
{{--                                                        <i class="fa fa-eye" style="font-size:30px"></i>--}}
{{--                                                    </a>--}}
{{--                                                </span>--}}
{{--                                                </div>--}}
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

@endsection

