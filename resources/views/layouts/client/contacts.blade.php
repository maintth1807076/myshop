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
        img.img-thumbnail{
            border-radius:100%;
        }
        h1{
            text-align: center;
            border-bottom: 1px solid black;
            font-family: playfair display,serif;
        }
        img.titel-about{
            width: 30%;
            border-radius: 100%;
            margin-left: 35%;
        }
        i.font1{
            font-family: " Nestle-Text-Light";
            font-size: 30px;
        }
        i.font2{
            font-family: " Nestle-Text-Light";
            font-size: 30px;
            margin-left: 26%;
        }
        p.font1{
            font-family: " playfair display,serif";
            font-size: 160%;
            margin-left: -35%;
        }
        i.fas fa-user-tie{
            font-size: 100px;
        }
        p.text-toy{
            text-align: center;
        }
        strong{
            font-size: 120%;
            color: #1d68a7;
        }
        strong.kiluc{
            font-size: 120%;
            color: orangered;
        }
        b.kiluc{
            font-size: 250%;
            color:orangered;
        }
        b{
            font-size: 250%;
            color: #1d68a7;
        }
        .card-body#card{
            margin-bottom: 39%;
        }
        @media screen and (min-width: 576px)and (max-device-width: 776px) {
        #thua2{
            display: none;
        }
        }
        @media screen and (min-width: 576px)and (max-device-width: 992px) {
         #thua{
display: none;
         }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>About Us</h1>
    <img class="titel-about" src="/img/us.jpg">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-4 col-lg-4 col-md-12 col-sm-12 mt-5 ml-5">

                    <img src="/img/toy3.jpg" alt="..." class="img-thumbnail">
                </div>
                <div class="col-6 col-lg-6 col-md-12 col-sm-12 mt-5 mr-5 pt-3 ">
                    <i class="font1">Lorem Ipsum is simply dummy text</i><br>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12 mt-5 ml-5 pt-3 ">
                    <i class="font1">Lorem Ipsum is simply dummy text</i><br>
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
            </div>

{{--    </div>--}}
</div>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-2 col-lg-2 col-md-2 col-sm-1 "></div>
                <div class="col-3 col-lg-3 col-md-3 col-sm-3 ml-4 mt-4">
                    <i class="fas fa-user-tie" style="font-size: 500%"></i><br>
                   <p class="font1">Mục đích của MyToys</p>
                    <p class="text-toy">
                </div>
                <div class="col-3 col-lg-3 col-md-3 col-sm-3 ml-4 mt-4">
                    <i class="fas fa-lightbulb" style="font-size: 500%"></i><br>
                    <p class="font1">Mục đích của MyToys</p>
                </div>
                <div class="col-3 col-lg-3 col-md-2 col-sm-3 ml-4 mt-4">
                    <i class="fas fa-exclamation" style="font-size: 500%"></i><br>
                    <p class="font1">Mục đích của MyToys</p>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col">
        <div class="row"id="thua2">
            <div class="col-1 col-lg-1 "></div>
            <div class="col-3 col-lg-3 col-md-3 col-sm-3 ml-4 mr-1">
               <p class="text-toy"> Mục đích của chúng tôi là nâng cao chất lượng cuộc sống và góp phần vào một
                   tương lai khỏe mạnh hơn. Chúng tôi mong muốn tạo ra một thế giới tốt đẹp và
                   khỏe mạnh hơn. Chúng tôi cũng mong muốn truyền cảm hứng cho mọi người sống
               </p>
            </div>
            <div class="col-3 col-lg-3 col-md-3 col-sm-3 ml-4 mr-1">
                <p class="text-toy"> Mục đích của chúng tôi là nâng cao chất lượng cuộc sống và góp phần vào một
                    tương lai khỏe mạnh hơn. Chúng tôi mong muốn tạo ra một thế giới tốt đẹp và
                    khỏe mạnh hơn. Chúng tôi cũng mong muốn truyền cảm hứng cho mọi người sống
                </p>
            </div>
            <div class="col-3 col-lg-3 col-md-3 col-sm-3 ml-4 mr-1">
                <p class="text-toy"> Mục đích của chúng tôi là nâng cao chất lượng cuộc sống và góp phần vào một
                    tương lai khỏe mạnh hơn. Chúng tôi mong muốn tạo ra một thế giới tốt đẹp và
                    khỏe mạnh hơn. Chúng tôi cũng mong muốn truyền cảm hứng cho mọi người sống
                </p>
            </div>
            </div>
        </div>
    </div>
    <div class="col-12" style="font-size: 300%;color: #2fa360;text-align: center;margin-bottom: 1%">Những con số kỉ lục</div>
    <div class="row">
        <div class="col">
<div class="row">
    <div class="col-2 col-lg-2 col-md-2 col-sm-5 ml-5"id="thua"></div>
    <div class="col-3 col-lg-3 ml-4 col-md-6 col-sm-5" style="border-right: black 1px solid">
        <strong>CHO CÁ NHÂN & GIA ĐÌNH</strong>
        <p>giúp đỡ </p><br>
        <b> 50 TRIỆU</b><br>
        <p>trẻ em có cuộc sống lành mạnh hơn</p>
    </div>
    <div class="col-4 col-lg-4 col-md-5 col-sm-5">
        <strong class="kiluc">CHO CỘNG ĐỒNG</strong>
        <p>giúp đỡ </p><br>
        <b class="kiluc"> 30 TRIỆU</b><br>
        <p>trẻ em có cuộc sống lành mạnh hơn</p>
    </div>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 mt-5 ml-5 pt-3 mb-3 " >
            <i class="font2">Lorem Ipsum is simply dummy text</i><br>
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
    </div>
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <div class="row">--}}
{{--                <div class="col-1 col-lg-2"id="thua">--}}
{{--                </div>--}}
{{--                <div class="col-3 col-lg-3 col-md-5 mr-3">--}}
{{--                    <div class="card" style="width: 18rem;">--}}
{{--                        <img src="/img/mohinh.jpg" class="card-img-top" alt="...">--}}
{{--                        <div class="card-body" id="card">--}}
{{--                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-7 col-lg-6 col-md-6">--}}
{{--                    <div class="card mb-3">--}}
{{--                        <img src="/img/moto.jpg" class="card-img-top" alt="...">--}}
{{--                        <div class="card-body"style="margin-bottom: 30%">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
{{--                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>