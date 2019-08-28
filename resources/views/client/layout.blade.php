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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .navbar {
            background: white;

        }

        .nav-item {
            font-size: 14px;
            font-family: Verdana;

        }

        b:hover {
            color: #1bb206;
        }

        i:hover {
            color: #1bb206;
        }

        * {
            box-sizing: border-box;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        footer {
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm  navbar-light  fixed-top">

    <a class="navbar-brand" href="#" style="margin-left: 80px;"> <img src="https://res.cloudinary.com/dkzqu5nh2/image/upload/v1566975633/image.png" width="150px" height="auto" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="margin-left: 150px;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active " href="#"> <b>TRANG CHỦ</b></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link  active   dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    <b>SẢN PHẨM</b>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">MÔ HÌNH/FIGURE</a>
                    <a class="dropdown-item" href="#"> ÁO TSHIRT</a>
                    <a class="dropdown-item" href="#"> PHỤ KIỆN</a>
                    <a class="dropdown-item" href="#"> ĐỒ COSPLAY</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  active   " href="#"><b> GIỚI THIỆU</b></a>
            </li>
            <li class="nav-item"  style="margin-right: 20px;">
                <a class="nav-link  active  " href="#"><b>LIÊN HỆ</b></a>
            </li>
            <li>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">  <i class="fas fa-search"></i></button>


                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" style="margin-left: 50px">
                    <i class="fa fa-shopping-basket" style="font-size:25px"></i>
                </a>
            </li>
            @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user" style="font-size:25px"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <div class="dropdown-divider"></div>
                        @if (Route::has('register'))
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </div>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<div class="dropdown-divider" style="margin-top:180px"></div>
<main class="py-4">
    @yield('content')
</main>
<div class="dropdown-divider"></div>
<div class="dropdown-divider"></div>

<footer class="bg-dark">

    <div class="container" >
        <div class="row" style="padding-top: 40px;">

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 col-sm-6">




                        <div class="widget" style="padding-top: 20px;">

                            <h3 class="widget-title">GIỚI THIỆU </h3>

                            <div class="widget-content">
                                <p>Cửa hàng quà tặng
                                    - Vật phẩm trong game : Liên minh huyền thoại, Overwatch, ...
                                    - Phụ kiện anime : Onepiece, Naruto, dragonball, Attack on Titan...
                                    - Vật phẩm trong siêu anh hùng...
                                    Chất lượng đảm bảo - uy tín - Độc nhất</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 col-sm-6">


                        <div class="widget" style="padding-top: 20px;">
                            <h3 class="widget-title">CHÚNG TÔI CÓ THỂ GIÚP BẠN?</h3>

                            <div class="widget-content">
                                <p>Hotline 1: 0985-776-331</p>
                                <p>Hotline 2: 0934-648-240</p>
                                <p>Open - Close: 08:30-22:00</p>
                                <p>Mail: anhnguyentvn@gmail.com</p>
                            </div>
                        </div><!-- /.widget -->

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">

                <div class="widget" style="padding-top: 20px;">
                    <h3 class="widget-title">KẾT NỐI VỚI CHÚNG TÔI</h3>
                    <img src="https://media.timeout.com/images/103173510/630/472/image.jpg"
                         width="350px" height="auto" alt="">


                </div><!-- /.widget -->

            </div>


            <div class="col-md-4">


                <div class="widget" style="padding-top: 20px;">
                    <h3 class="widget-title">SOCIAL</h3>


                    <a href="#"  style="margin-right: 40px;color: white;" title=""><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#"   style="margin-right: 40px ; color: white;" title=""><i class="fab fa-facebook-f fa-2x" ></i></a>
                    <a href="#"   style="margin-right: 40px; color: white;" title=""><i class="fab fa-google-plus-g fa-2x"></i></a>
                    <a href="#"   style="margin-right: 40px;color: white;" title=""><i class="fab fa-pinterest fa-2x"></i></a>

                </div>




                <div class="widget" style="padding-top: 20px;">

                    <h3 class="widget-title">THANH TOÁN</h3>
                    <p>
                        Các bạn có thể thanh toán trước qua tài khoản ngân hàng hoặc thanh toán COD khi nhận hàng.
                    </p>
                </div>
            </div>

        </div>
    </div>
    </div><!-- Preloader -->
</footer>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({

        duration:1200
    });
</script>
</body>
</html>

