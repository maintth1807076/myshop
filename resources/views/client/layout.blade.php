<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/customer.js')}}"></script>
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
<nav class="navbar background navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/home" style="margin-left: 100px">
        <img src="https://www.otakuhouse.com/wp-content/themes/yamidoo/images/new_logo.png" width="auto"
             height="70px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form style="margin-left: 100px;" method="get" action="">
        <div class="form-control">
            <input type="search" placeholder="Search" aria-label="Search" name="key"
                   style="border:none;border-right: 1px solid black;width: 400px;height: 25px">
            <button class="fas fa-search" type="submit"></button>
        </div>
    </form>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 100px">
        <ul class="navbar-nav" style="padding-left: 100px">
            @guest
                <li>
                    <a class="active" href="{{ route('login') }}"><b style="color: black">{{ __('Đăng nhập ') }}</b></a>
                    <b>|</b>
                    @if (Route::has('register'))
                        <a class="active" href="{{ route('register') }}"><b style="color: black">{{ __('Đăng ký') }}</b></a>
                    @endif
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src=" {{ Auth::user()->avatar }}" alt="" style="width: 50px;"> <span
                                class="caret">{{ Auth::user()->name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/information">Thông tin tài khoản</a>
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

<nav class="navbar navbar-expand-sm  navbar-light sticky " style="background:#d6d8d9">
    <div class="collapse navbar-collapse" id="collapsibleNavbar" style="margin-left: 300px;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="/home"> <b>TRANG CHỦ</b></a>
            </li>
            <li class="nav-item dropdown" style="padding-left: 100px">
                <a class="nav-link  active   dropdown-toggle dropbtn" href="#" id="navbardrop"
                   data-toggle="dropdown">
                    <b>SẢN PHẨM</b>
                </a>
                <div class="dropdown-menu dropdown-content">
                    <a class="dropdown-item" href="/category/1">PVC Figure</a>
                    <a class="dropdown-item" href="/category/2">Nendoroid</a>
                    <a class="dropdown-item" href="/category/3">Figma</a>
                    <a class="dropdown-item" href="/category/4">Revoltech</a>
                </div>
            </li>
            <li class="nav-item" style="padding-left: 100px">
                <a class="nav-link  active   " href="/about"><b> GIỚI THIỆU</b></a>
            </li>
            <li class="nav-item" style="margin-right: 20px;padding-left: 100px">
                <a class="nav-link  active  " href="/contact"><b>LIÊN HỆ</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/cart" style="padding-left: 100px">
                    <i class="fas fa-shopping-cart"></i>
                    <div class="d-inline list-added text-dark" id="added-quantity">0</div>
                    GIỎ HÀNG
                </a>
            </li>
        </ul>
    </div>
</nav>
<main class="py-4">
    @yield('content')
</main>
<footer class="bg-dark">
    <div>
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
                    <a href="#" style="margin-right: 40px;color: white;" title=""><i
                                class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" style="margin-right: 40px ; color: white;" title=""><i
                                class="fab fa-facebook-f fa-2x"></i></a>
                    <a href="#" style="margin-right: 40px; color: white;" title=""><i
                                class="fab fa-google-plus-g fa-2x"></i></a>
                    <a href="#" style="margin-right: 40px;color: white;" title=""><i class="fab fa-pinterest fa-2x"></i></a>
                    <a href="#" style="margin-right: 40px;color: white;" title="">
                    </a>
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
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200
    });
</script>
</body>
</html>

