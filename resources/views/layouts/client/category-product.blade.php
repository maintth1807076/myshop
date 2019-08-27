<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

    * {
        box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */


    .column {
        float: left;
        width: 50%;
        padding: 10px;

    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    /* Style the buttons */
    .btn {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: #f1f1f1;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #ddd;
    }
    .nav-link{
        color: black;
    }
    .menu{
        color: white;
        background: #5a6268;
    }

</style>
</head>
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-3">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <p class="menu">Bộ lọc tìm kiếm</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Giá</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-9" >
            <h3> Tất cả sản phẩm</h3>
            <hr>
            <div class="row"> <div id="btnContainer" class="col-sm-6">
                    <button class="btn" onclick="listView()"><i class="fa fa-bars"></i></button>
                    <button class="btn" onclick="gridView()"><i class="fa fa-th-large"></i></button>
                </div>
                <form action="#" method="post" style="float:right; margin-top:0;" class="form-inline col-sm-6">
                    <div class="row">
                        <label > Sắp xếp: <br></label>
                        <select name=" index-view-page" id="index-view-page" class="form-control">
                            <option value="date">Ngày: Mới- Cũ</option>
                            <option value="product-hot">Sản phẩm nổi bật</option>
                            <option value="36">Sản phẩm bán chạy</option>
                            <option value="36">Tên: A-Z </option>
                            <option value="36">Tên: Z-A </option>
                            <option value="36">Giá: Tăng dần </option>
                            <option value="36">Giá: Giảm dần </option>
                            <option value="date">Ngày: Mới- Cũ</option>
                            <option value="date">Ngày: Cũ-  Mới</option>
                        </select>
                    </div>
                </form>
            </div>
            <hr>
            <div class="row">
                <div class="column" >
                    <h2>Column 1</h2>
                    <p>Some text..</p>
                </div>
                <div class="column" >
                    <h2>Column 2</h2>
                    <p>Some text..</p>
                </div>

            </div>
            <div class="row">
                <div class="column" >
                    <h2>Column 3</h2>
                    <p>Some text..</p>
                </div>
                <div class="column" >
                    <h2>Column 4</h2>
                    <p>Some text..</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Get the elements with class="column"
    var elements = document.getElementsByClassName("column");

    // Declare a loop variable
    var i;

    // List View
    function listView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "100%";
        }
    }

    // Grid View
    function gridView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "50%";
        }
    }

    /* Optional: Add active class to the current button (highlight it) */
    var container = document.getElementById("btnContainer");
    var btns = container.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>
    </body>
</html>
