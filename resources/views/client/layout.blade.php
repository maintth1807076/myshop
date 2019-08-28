<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<nav class="bg-light sticky-top">
    <div id="app" class="container-fluid">
        <div class="header">
            <div class="navbar navbar-expand-lg bg-light">
                <nav class="navbar navbar-light bg-light">
                    <div class="collapse navbar-collapse" style="margin-left: 200px">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active-page" href="#"><h5><b>TRANG CHỦ</b></h5>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" data-hover="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <h5><b>SẢN PHẨM</b></h5>
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">MÔ HÌNH/FIGURE</a>
                                    <a class="dropdown-item" href="#">ÁO TSHIRT</a>
                                    <a class="dropdown-item" href="#">PHỤ KIỆN</a>
                                    <a class="dropdown-item" href="#">ĐỒ COSPLAY</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><h5><b>GIỚI THIỆU</b></h5></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="#"><h5><b>LIÊN HỆ</b></h5></a>
                            </li>
                            <li>
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                           aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                                class="fa fa-search"></i></button>
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#" style="margin-left: 50px">
                                    <i class="fa fa-shopping-basket" style="font-size:25px"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user" style="font-size:25px"></i>
                                </a>
                                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Đăng ký</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Đăng nhập</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</nav>

<div class="dropdown-divider"></div>
<main class="py-4">
    @yield('content')
</main>
<div class="dropdown-divider"></div>
<div class="dropdown-divider"></div>
<footer class="bg-dark">
    <div class="row">
        <div class="col-3" style="color: white;margin: 75px">
            <h3>Giới thiệu</h3>
            <p>
                Cửa hàng quà tặng - Vật phẩm trong game : Liên minh huyền thoại, Overwatch, ... - Phụ kiện anime :
                Onepiece, Naruto, dragonball, Attack on Titan... - Vật phẩm trong siêu anh hùng... Chất lượng đảm
                bảo - uy tín - Độc nhất
            </p>
            <div class="dropdown-divider"></div>
            <h3>Chúng tôi có thể giúp bạn ?</h3>
            <ul>
                <li class="">Hotline 1:</li>
                <li class="">Hotline 2:</li>
                <li class="">Open-Close:7:00-22:00</li>
                <li class="">Email:cuccutdangyeu@gmail.com</li>
            </ul>
        </div>
        <div class="col-md-4">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096814183571!2d105.7800937149326!3d21.028811885998316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f9bdf0e1c7%3A0x26caee8e7662dd9b!2zRlBUIEFwdGVjaCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1566843331684!5m2!1svi!2s"
                        width="462" height="462" frameborder="0"
                        style="border:0;width: 450px;height: 450px;margin-top: 75px" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="col-3" style="color: white;margin: 50px;margin-top: 75px">
            <h3>Kết nối với chúng tôi</h3>
            <a href="#" style="margin-right: 40px">
                <i class="fa fa-twitter" style="font-size:36px"></i>
            </a>
            <a href="#" style="margin-right: 40px">
                <i class="fa fa-facebook-f" style="font-size:36px"></i>
            </a>
            <a href="#">
                <i class="fa fa-google-plus" style="font-size:36px"></i>
            </a>
            <div class="dropdown-divider"></div>
            <h3>Thanh toán</h3>
            <p>Các bạn có thể thanh toán trước qua tài khoản ngân hàng hoặc thanh toán COD khi nhận hàng.</p>
        </div>
    </div>
</footer>
</div>
</body>
</html>

