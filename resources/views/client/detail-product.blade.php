@extends('client.layout')

@section('content')
    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-6">
                <div id="carousel-simple" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-simple" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-simple" data-slide-to="1"></li>
                            <li data-target="#carousel-simple" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-item active thumbnail">
                            <img class="d-block w-100" height="540px"
                                 src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a" alt="First slide">
                        </div>
                        <div class="carousel-item thumbnail">
                            <img class="d-block w-100" height="540px"
                                 src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a" alt="Second slide">
                        </div>
                        <div class="carousel-item thumbnail">
                            <img class="d-block w-100" height="540px"
                                 src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a" alt="Third slide">
                        </div>
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
            <div class="col-md-6">
                <div class="product-details-wrapper">
                    <h2 class="product-name">
                        <a title=" Mô Hình Yasuo"> MÔ HÌNH TÔN NGỘ KHÔNG</a>
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
                    <div><p>Bộ mô hình đồ chơi bằng nhựa PVC cao cấp Tôn Ngộ Không</p></div>
                    <div class="product-price product-actions">
                        <span class="price">1,000,000 đ</span>
                    </div>
                    <div class="product-actions-wrapper">
                        <form action=" " method="post" enctype="multipart/form-data" id="AddToCartForm">
                            <div class="product-signle-options clearfix">
                                <div class="product-single-quantity is-hidden">
                                    <label for="Quantity">Số Lượng: </label>
                                    <input type="number" id="Quantity" name="quantity" value="1" min="1"
                                           class="quantity-selector form-control">
                                </div>
                            </div>

                            <div class="product-actions row">
                                <div class="col-3">
                                    <button type="submit" name="add" id="AddToCart" class="btn btn-lg btn-warning">
                                        <span class="fas fa-shopping-cart"> Mua ngay</span>
                                    </button>
                                </div>
                                <div class="col-3">
                                    <button type="submit" name="add" id="AddToCart" class="btn btn-lg btn-danger">
                                        <span id="AddToCartText" class="fas fa-cart-plus"> Thêm vào giỏ hàng</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-12 margin-top-50">
            <div class="title-name">
                <h3>Chi Tiết Sản Phẩm</h3>
            </div>
        </div>
        <div class="product-detail">
            <dl>
                <dt>Danh mục</dt>
                <dd>Mô Hình Đồ Chơi</dd>
                <dt>Chất Liệu</dt>
                <dd>PVC cao cấp</dd>
                <dt>Kích cỡ</dt>
                <dd>24x10x7cm</dd>
            </dl>
        </div>
        <div class="col-md-12 margin-top-50">
            <div class="title-name">
                <h3>Đánh Giá Sản Phẩm</h3>
            </div>
        </div>
        <div class="product-detail">
            <div class="col-md-12">
                <form accept-charset='UTF-8' action='/contact' class='contact-form' method='post'>
                    <input name='form_type' type='hidden' value='contact'>
                    <input name='utf8' type='hidden' value='✓'>
                    <div class="form-group">
                    <textarea class="form-control dark" rows="4" id="ContactFormMessage"
                              name="contact[body]" placeholder="Nhận xét của bạn:"></textarea>
                    </div>
                    <div class="text-center">
                        <span>Vui lòng <a href="">đăng nhập</a> hoặc <a href="">đăng kí</a> để bình luận</span>
                        <div class="form-button">
                            <button type="submit" class="btn btn-lg btn-danger">Gửi Tin Nhắn</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-12 margin-top-50">
            <div class="title-name">
                <h3>Sản Phẩm Liên Quan</h3>
            </div>
        </div>
        <div class="row product-detail">
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-img hover-img">
                        <a href=""><img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                                        class="img-reponsive" alt=""></a>
                    </div>
                    <div class="pro-name">
                        <a href="">Mô Hình Tôn Ngộ Không</a>
                    </div>
                    <div class="pro-price">
                        200,000 đ
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-img hover-img">
                        <a href=""><img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                                        class="img-reponsive" alt=""></a>
                    </div>
                    <div class="pro-name">
                        <a href="">Mô Hình Tôn Ngộ Không</a>
                    </div>
                    <div class="pro-price">
                        200,000 đ
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-img hover-img">
                        <a href=""><img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                                        class="img-reponsive" alt=""></a>
                    </div>
                    <div class="pro-name">
                        <a href="">Mô Hình Tôn Ngộ Không</a>
                    </div>
                    <div class="pro-price">
                        200,000 đ
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-item">
                    <div class="product-img hover-img">
                        <a href=""><img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                                        class="img-reponsive" alt=""></a>
                    </div>
                    <div class="pro-name">
                        <a href="">Mô Hình Tôn Ngộ Không</a>
                    </div>
                    <div class="pro-price">
                        200,000 đ
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

