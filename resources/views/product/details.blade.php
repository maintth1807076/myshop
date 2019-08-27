<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">

    <title>Chi Tiết Sản Phẩm</title>
</head>
<body>

<div class="container margin-top-20">
    <div class="row">
        <div class="col-md-6">
            <div>
                <a href=" "
                   class="cloud-zoom" title="MÔ HÌNH TÔN NGỘ KHÔNG"
                   data-rel="useWrapper: false, showTitle: false, zoomWidth:'auto', zoomHeight:'auto', adjustY:0, adjustX:10">
                    <img src="https://cf.shopee.vn/file/c9240c39cf24c4dd5e96e6813a03426a"
                         id="ProductPhotoImg" alt="" width="450" height="500">
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="product-details-wrapper">
                <h2 class="product-name">
                    <a title=" Mô Hình Yasuo"> MÔ HÌNH TÔN NGỘ KHÔNG</a>
                </h2>

                <div class="product-status">
                    <span>Đang bán chạy</span>
                </div>

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
                            <div class="col-4">
                                <button type="submit" name="add" id="AddToCart" class="btn btn-lg btn-warning">
                                    <span class="fas fa-shopping-cart"> Mua ngay</span>
                                </button>
                            </div>
                            <div class="col-4">
                                <button type="submit" name="add" id="AddToCart" class="btn btn-lg btn-danger">
                                    <span id="AddToCartText" class="fas fa-cart-plus"> Thêm vào giỏ hàng</span>
                                </button>
                            </div>
                            <div class="col-4">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <div class="product-detail margin-top-50">
        <div class="product-detail-text">Chi Tiết Sản Phẩm</div>
        <div>
            <dt>Danh mục</dt>
            <dd>Mô Hình Đồ Chơi</dd>
            <dt>Chất Liệu</dt>
            <dd>PVC cao cấp</dd>
            <dt>Kích cỡ</dt>
            <dd>24x10x7cm</dd>
        </div>
    </div>
</div>


<style>
    .product-price {
        font-size: 25px;
        font-weight: bold;
        color: #ff5002;
    }

    .product-single-quantity {
        width: 16%;
        display: inline-block;
    }

    .product-actions {
        margin-top: 30px;
        overflow: hidden;
    }

    .margin-top-20 {
        margin-top: 20px;
    }

    .margin-top-50 {
        margin-top: 50px;
    }

    .product-detail {
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .05);
        border-radius: .125rem;
        overflow: hidden;
        background: #fff;
        margin-top: 1.25rem;
        padding: .625rem;
    }

    .product-detail-text {
        color: rgba(119, 18, 26, 0.87);
        font-size: 26px;
        padding: .875rem;
        text-transform: capitalize;
    }

</style>
</body>
</html>