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

    body {
        font-family: "Lato", sans-serif;
    }

    /* Fixed sidenav, full height */
    .sidenav {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
        color: #f1f1f1;
    }

    /* Main content */

    /* Add an active class to the active dropdown button */

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

    .sidenav {
        height: 100%;
        width: 350px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #ffffff;
        overflow-x: hidden;
        padding-top: 20px;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
        color: #060606;
    }

    /* Main content */

    /* Add an active class to the active dropdown button */
    .active {
        background-color: #fffff7;
        color: #060606;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
        display: none;
        background-color: rgba(255, 255, 247, 0.19);
        padding-left: 8px;
    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
        float: right;
        padding-right: 8px;
    }

    /* Some media queries for responsiveness */
    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
    }

</style>
</head>
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-3">
            <div class="sidenav">
                <a href="#" class="active" style="background: black; color: white;">Lọc sản phẩm</a>
                <button class="dropdown-btn">Giá tiền
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">0 - 1000$</a>
                    <a href="#">1000$ - 2000$</a>
                    <a href="#">2000$ - 6000$</a>
                    <a href="#">Lớn hơn 6000$</a>
                </div>
                <button class="dropdown-btn">Hãng sản xuất
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">Titan</a>
                    <a href="#">Toys</a>
                </div>
                <button class="dropdown-btn">Màu
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">Red</a>
                    <a href="#">Green</a>
                    <a href="#">Bmw</a>
                </div>
                <button class="dropdown-btn">Bảo hành
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">1 năm</a>
                    <a href="#">6 tháng</a>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <h3> Tất cả sản phẩm</h3>
            <hr>
            <div class="row" >
                <div id="btnContainer" class="col-sm-6">
                    <button class="btn" onclick="listView()"><i class="fa fa-bars"></i></button>
                    <button class="btn" onclick="gridView()"><i class="fa fa-th-large"></i></button>
                </div>
                <form action="#" method="post" style="float:right; margin-top:0;" class="form-inline col-sm-6">
                    <div class="row">
                        <label> Sắp xếp: <br></label>
                        <select name=" index-view-page" id="index-view-page" class="form-control">
                            <option value="date">Ngày: Mới- Cũ</option>
                            <option value="product-hot">Sản phẩm nổi bật</option>
                            <option value="36">Sản phẩm bán chạy</option>
                            <option value="36">Tên: A-Z</option>
                            <option value="36">Tên: Z-A</option>
                            <option value="36">Giá: Tăng dần</option>
                            <option value="36">Giá: Giảm dần</option>
                            <option value="date">Ngày: Mới- Cũ</option>
                            <option value="date">Ngày: Cũ- Mới</option>
                        </select>
                    </div>
                </form>
            </div>
            <hr>
            <div class="row">
                <div class="column">
                    <div class="card  "  style="width:400px">
                        <img class="card-img-top" src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Kaneki Ken</b></h5>
                            <h3><b>1,200,000 đ</b></h3></div>
                    </div>
                </div>
                <div class="column">
                    <div class="card  "  style="width:400px">
                        <img class="card-img-top" src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Kaneki Ken</b></h5>
                            <h3><b>1,200,000 đ</b></h3></div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="column">
                    <div class="card  "  style="width:400px">
                        <img class="card-img-top" src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Kaneki Ken</b></h5>
                            <h3><b>1,200,000 đ</b></h3></div>
                    </div>
                </div>
                <div class="column">
                    <div class="card  "  style="width:400px">
                        <img class="card-img-top" src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><b>Kaneki Ken</b></h5>
                            <h3><b>1,200,000 đ</b></h3></div>
                    </div>
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
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>
    </body>
</html>
