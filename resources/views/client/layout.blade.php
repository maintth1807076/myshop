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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" style="font-size:25px"></i>
</button>
<div class="container-fluid">
    <div class="row" style="background-color: #fff8b3">
        <div class="col-sm-5">
            <a class="navbar-brand" href="/home" style="padding-left:20% ">
                <img class="responsive" src="{{ asset('img/logo-home.png') }}" width="auto"
                     height="70px" alt="">
            </a>
        </div>
        <div class="col-sm-4">
            <div method="get" action="">
                <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <ul class="user">
                <div class="dropdown nav-item">
                    <div class="userdrop">
                        @guest
                            <li>
                                <a class="active" href="{{ route('login') }}"><b
                                        style="color: black">{{ __('Đăng nhập ') }}</b></a>
                                <b>/</b>
                                @if (Route::has('register'))
                                    <a class="active" href="{{ route('register') }}"><b
                                            style="color: black">{{ __('Đăng ký') }}</b></a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img class="rounded-circle" src=" {{ Auth::user()->avatar }}" alt=""
                                         style="width: 50px; height: 50px"> <span
                                        class="caret">{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/information">Thông tin tài khoản</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
<div class="navhome sticky" style="background-color: red">
    <div class=" navbar-expand-lg navbar-light bg-light">
        <div class="text-center" style="background-color: red">
            <div class="row mr-auto">
                <div class="col-sm-1"></div>
                <div class=" nav-item col-sm-2 ">
                    <a class="nav-link dropbtn" href="/home"><b>TRANG CHỦ</b></a>
                </div>
                <div class="dropdown nav-item col-sm-2">
                    <a class="nav-link  active dropdown-toggle dropbtn" href="#" id="navbardrop"
                       data-toggle="dropdown">
                        <b>SẢN PHẨM</b>
                    </a>
                    <div class="dropdown-menu dropdown-content">
                        <a class="dropdown-item" href="/category/1"><b style="font-size: 20px">PVC Figure</b></a>
                        <a class="dropdown-item" href="/category/2"><b style="font-size: 20px">Nendoroid</b></a>
                        <a class="dropdown-item" href="/category/3"><b style="font-size: 20px">Figma</b></a>
                        <a class="dropdown-item" href="/category/4"><b style="font-size: 20px">Revoltech</b></a>
                    </div>
                </div>
                <div class="nav-item col-sm-2 ">
                    <a class="nav-link dropbtn" href="/about"><b>GIỚI THIỆU</b></a>
                </div>
                <div class="nav-item col-sm-2">
                    <a class="nav-link active dropbtn" href="/contact"><b>LIÊN HỆ</b></a>
                </div>
                <div class="nav-item col-sm-2">
                    <a class="nav-link dropbtn" href="/cart">
                        <i class="fas fa-shopping-cart"></i>
                        <div class="d-inline list-added text-dark" id="added-quantity">0</div>
                        GIỎ HÀNG
                    </a>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
</div>
<main class="">
    @yield('content')
</main>
<footer class="bg-dark row" style="color: white; font-family: -webkit-body">
    <div class="col-sm-4">
        <div style="padding: 25px">
            <h3>GIỚI THIỆU</h3>
            <p>Cửa hàng quà tặng - Vật phẩm trong game : Liên minh huyền thoại, Overwatch, ... - Phụ kiện anime :
                Onepiece,
                Naruto, dragonball, Attack on Titan... - Vật phẩm trong siêu anh hùng... Chất lượng đảm bảo - uy tín -
                Độc
                nhất</p>
        </div>

        <div style="padding: 25px">
            <h3>CHÚNG TÔI CÓ THỂ GIÚP BẠN?</h3>
            <p>Hotline : 0985-776-331</p>
            <p>Open - Close: 08:30-22:00</p>
            <p>Mail: anhnguyentvn@gmail.com</p>
        </div>

    </div>
    <div class="col-sm-4">
        <div style="padding: 25px;">
            <h3 class="widget-title mb-3">KẾT NỐI VỚI CHÚNG TÔI</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096814183571!2d105.7800937149326!3d21.028811885998316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f9bdf0e1c7%3A0x26caee8e7662dd9b!2zRlBUIEFwdGVjaCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1566843331684!5m2!1svi!2s"
                width="100%" height="280" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

    </div>
    <div class="col-sm-4">
        <div style="padding: 25px">
            <h3 class="widget-title">LIÊN KẾT</h3>
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
        <div style="padding: 25px">
            <h3 class="widget-title">THANH TOÁN</h3>
            <p>
                Các bạn có thể thanh toán trước qua tài khoản ngân hàng hoặc thanh toán COD khi nhận hàng.
            </p>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200
    });
</script>
<script>
    var mybutton = document.getElementById("myBtn");

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>

