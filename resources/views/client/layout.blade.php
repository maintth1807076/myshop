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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="container-fluid">
    <div class="header">
        <nav class="bg-light sticky-top">
            <div class="navbar navbar-expand-lg bg-light">
                <a href="#" style="padding-left: 200px">
                    <img src="https://icon-library.net/images/icon-anime/icon-anime-24.jpg" width="100px" height="auto"
                         alt="">
                </a>
                <div class="collapse navbar-collapse" style="margin-left: 200px">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link  active-page" href="#">TRANG CHỦ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown1" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                SẢN PHẨM
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">MÔ HÌNH/FIGURE</a>
                                <a class="dropdown-item" href="#">ÁO TSHIRT</a>
                                <a class="dropdown-item" href="#">PHỤ KIỆN</a>
                                <a class="dropdown-item" href="#">ĐỒ COSPLAY</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#">GIỚI THIỆU</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#">LIÊN HỆ</a>
                        </li>
                        <li>
                            <form class="form-inline" >
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" style="font-size:25px"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Đăng ký</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Đăng nhập</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
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
            <div>
                <img src="https://ae01.alicdn.com/kf/HTB12S67dAfb_uJkSnfoq6z_epXaX/anime-sexy-girl-with-headphones-PSG025-wall-art-canvas-fabric-poster-custom-print-frame-available-room.jpg_640x640.jpg"
                     width="500px" height="auto" alt="">
            </div>
            <div class="col-3" style="color: white;margin: 50px">
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

