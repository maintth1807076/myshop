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
                        <div class="carousel-item active thumbnail">
                            <img class="d-block w-100 img-fluid" height="540px"
                                 src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a" alt="First slide">
                        </div>
                        <div class="carousel-item thumbnail">
                            <img class="d-block w-100 img-fluid" height="540px"
                                 src="https://cf.shopee.vn/file/3a79b120e0d89c94397ba62ba1db5567" alt="Second slide">
                        </div>
                        <div class="carousel-item thumbnail">
                            <img class="d-block w-100 img-fluid" height="540px"
                                 src="https://cf.shopee.vn/file/da48b2b1f5b6849b421a0d7d62460f9c" alt="Third slide">
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
            <div class="col-xl-6">
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
                        <span class="price">1,000,000 <ins>đ</ins></span>
                    </div>
                    <div class="product-actions-wrapper">
                        <form action=" " method="post" enctype="multipart/form-data" id="AddToCartForm">
                            <div class="product-signle-options clearfix">
                                <div class="product-single-quantity">
                                    <label for="Quantity">Số Lượng: </label>
                                    <input type="number" id="Quantity" name="quantity" value="1" min="1"
                                           class="quantity-selector form-control">
                                </div>
                            </div>
                            <div class="product-actions">
                                <div class="row">
                                    <div class="col-xl-3 col-md-3 col-sm-4 mb-3">
                                        <button type="submit" name="add" id="AddToCart" class="btn btn-lg btn-warning">
                                            <span class="fas fa-shopping-cart"> Mua ngay</span>
                                        </button>
                                    </div>
                                    <div class="col-xl-3 col-md-3 col-sm-4">
                                        <button type="submit" name="add" id="AddToCart" class="btn btn-lg btn-d1">
                                            <span id="AddToCartText" class="fas fa-cart-plus"> Thêm vào giỏ hàng</span>
                                        </button>
                                    </div>
                                    <div class="col-xl-6">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 mt-4">
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
                        <img src="https://yt3.ggpht.com/a/AGF-l79_5C7nXoG-wA7O4ipOvuy8Luiso7_NhhAIRA=s900-c-k-c0xffffffff-no-rj-mo"
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
                        <img src="http://assets.htv.com.vn/Images/TAP%20CHI%20HTV/HAU%20TRUONG%20TRUYEN%20HINH/HIEN/CAU%20CHUYEN%20TRUYEN%20THONG/Ba%20Tan%20Vlog/H%C3%8CNH%201_BA%20TAN%20VLOG_THUMBAIL.jpg"
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
                            <button type="submit" class="btn btn-lg btn-danger far fa-comment-dots"> Gửi Tin Nhắn</button>
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
                <div class="col-xl-3 col-md-6 col-lg-4">
                    <div class="product-item">
                        <div class="product-img hover-img">
                            <a href=""><img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                                            class="img-reponsive img-fluid" alt=""></a>
                        </div>
                        <div class="pro-name">
                            <a href="">Mô Hình Tôn Ngộ Không</a>
                        </div>
                        <div class="pro-price">
                            200,000 đ
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-4">
                    <div class="product-item">
                        <div class="product-img hover-img">
                            <a href=""><img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                                            class="img-reponsive img-fluid" alt=""></a>
                        </div>
                        <div class="pro-name">
                            <a href="">Mô Hình Tôn Ngộ Không</a>
                        </div>
                        <div class="pro-price">
                            200,000 đ
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-4">
                    <div class="product-item">
                        <div class="product-img hover-img">
                            <a href=""><img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                                            class="img-reponsive img-fluid" alt=""></a>
                        </div>
                        <div class="pro-name">
                            <a href="">Mô Hình Tôn Ngộ Không</a>
                        </div>
                        <div class="pro-price">
                            200,000 đ
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="product-item">
                        <div class="product-img hover-img">
                            <a href=""><img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                                            class="img-reponsive img-fluid" alt=""></a>
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
    </div>

@endsection
