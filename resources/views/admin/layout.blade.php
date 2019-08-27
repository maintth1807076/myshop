<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <i class="fas fa-ad fa-2x text-white"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row pt-5 ml-2">
        <div class="col-4 col-md-3 col-lg-2">
            <div class="nav flex-column nav-pills">
                <a class="nav-link active" href="/admin"><i class="fas fa-cogs pr-2"></i>Quản lí</a>
                <a class="nav-link" href="/admin/users"><i class="fas fa-users pr-2"></i>Khách hàng</a>
                <a class="nav-link" href="/admin/categories"><i class="fas fa-th-list pr-2"></i>Danh mục</a>
                <a class="nav-link" href="/admin/products"><i class="fas fa-cube pr-2"></i>Sản phẩm</a>
                <a class="nav-link" href="/admin/orders"><i class="fas fa-shopping-cart pr-2"></i>Đơn hàng</a>
                <a class="nav-link" href="/admin/reports"><i class="fas fa-file-alt pr-2"></i>Báo cáo</a>
            </div>
        </div>
        <div class="col-8 col-md-9 col-lg-10 pl-5">
            @section('content')
            @show()
        </div>
    </div>
    <div class="row">
        <div class="col bg-dark p-2 fixed-bottom">
            <div class="text-center text-white">
                Copyright &copy; by A Little Hope
            </div>
        </div>
    </div>
</div>
</body>
</html>
