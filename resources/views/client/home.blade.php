@extends('client.layout')

@section('content')
    <div class="box">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://otakushop.com.vn/upload/slideshow/832394432520815_1301.2232415902x500.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://otakushop.com.vn/upload/slideshow/567682701517304_1366x455.33333333333.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr>
    <div class="container">
        <div style="margin-top: 50px" class="text-center col-12">
            <h2>SẢN PHẨM NỔI BẬT</h2>
        </div>
        <div class="row" style="margin-top: 50px">
            <div class="card-deck">
                <div class="card  col-sm-4" style="width:400px">
                    <img class="card-img-top"
                         src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg"
                         alt="Card image cap">
                    <div class="card-body">
                        <a href="/detail"><h5 class="card-title"><b>Kaneki Ken</b></h5></a>
                        <h3><b>1,200,000 đ</b></h3></div>
                </div>
                <div class="card  col-sm-4" style="width:400px">
                    <img class="card-img-top"
                         src="https://product.hstatic.net/1000124630/product/htb1kkyfxo_rk1rjy0fcq6zevvxa1_bc27457122e64d4aa8224025b4926cc5_large.jpg"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Nezuko</b></h5>
                        <h3><b>560,000 đ</b></h3></div>
                </div>
                <div class="card  col-sm-4" style="width:400px">
                    <img class="card-img-top"
                         src="https://animemegamerch.com/wp-content/uploads/2018/07/16-48cm-Figuarts-ZERO-Majin-Buu-PVC-Action-Figures-Dragon-Ball-Z-Super-Saiyan-Dragonball-Z.jpg_640x640-6.jpg"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Majin Buu</b></h5>
                        <h3><b>300,000</b></h3></div>
                </div>
            </div>

            <div class="card-deck" style=" margin-top: 30px;">
                <div class="card  col-sm-4" style="width:400px">
                    <img class="card-img-top"
                         src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Kaneki Ken</b></h5>
                        <h3><b>1,200,000 đ</b></h3></div>
                </div>
                <div class="card  col-sm-4" style="width:400px">
                    <img class="card-img-top"
                         src="https://product.hstatic.net/1000124630/product/htb1kkyfxo_rk1rjy0fcq6zevvxa1_bc27457122e64d4aa8224025b4926cc5_large.jpg"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Nezuko</b></h5>
                        <h3><b>560,000 đ</b></h3></div>
                </div>
                <div class="card  col-sm-4" style="width:400px">
                    <img class="card-img-top"
                         src="https://animemegamerch.com/wp-content/uploads/2018/07/16-48cm-Figuarts-ZERO-Majin-Buu-PVC-Action-Figures-Dragon-Ball-Z-Super-Saiyan-Dragonball-Z.jpg_640x640-6.jpg"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Majin Buu</b></h5>
                        <h3><b>300,000</b></h3></div>
                </div>
            </div>
        </div>
        <div class="col-12 text-center" style="margin-top: 50px">
            <button type="button" class="btn btn-outline-dark" style="padding-top: 15px">
                <h4>Xem thêm sản phẩm</h4>
            </button>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 text-center" style="margin-bottom: 50px"><h1>Xu hướng mua hàng</h1></div>
            <div class="card-deck">
                <div class="card  col-sm-4" style="width:400px">
                    <div class="fuild">
                        <a href="#">
                            <img class="card-img-top"
                                 src="https://takishop.vn/wp-content/uploads/2019/07/figm013-iron-man-mk50-nano-weapon-set-1.jpg"
                                 alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><b>Mô hình/FIGURE/FIGMA</b></h5>
                        </div>
                        <div class="overlay">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active color" href="#">
                                        <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link color" href="#">
                                        <i class="fa fa-eye" style="font-size:30px"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  col-sm-4" style="width:400px">
                    <div class="fuild">
                        <a href="#">
                            <img class="card-img-top"
                                 src="https://file.hstatic.net/1000124630/file/41jpzyud2xl_grande.jpg"
                                 alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><b>Vật phẩm chưng bày</b></h5>
                        </div>
                        <div class="overlay">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active color" href="#">
                                        <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link color" href="#">
                                        <i class="fa fa-eye" style="font-size:30px"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card  col-sm-4" style="width:400px">
                    <div class="fuild">
                        <a href="#">
                            <img class="card-img-top"
                                 src="https://i0.wp.com/ae01.alicdn.com/kf/HTB1NYkxXS8YBeNkSnb4q6yevFXah/D%E1%BB%85-th%C6%B0%C6%A1ng-Tokyo-ghouls-Acrylic-Anime-Keychain-M%E1%BA%B7t-D%C3%A2y-Chuy%E1%BB%81n-Xe-M%C3%B3c-Ch%C3%ACa-Kh%C3%B3a-Chu%E1%BB%97i-Ph%E1%BB%A5.jpg"
                                 alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><b>Phụ kiên</b></h5>
                        </div>
                        <div class="overlay">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active color" href="#">
                                        <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link color" href="#">
                                        <i class="fa fa-eye" style="font-size:30px"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-9">
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <div class="controls-top">
                        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                    class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://ae01.alicdn.com/kf/HTB1CkZWKVXXXXbQaXXXq6xXFXXXc/Nh-t-b-n-Anime-Fairy-tail-Natsu-Dragnir-pvc-h-nh-ng-h-nh-b.jpg_640x640.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://product.hstatic.net/1000124630/product/sasuku_1024x1024_5ef338f8618f4b1ab4a2edb49ff9b273_master.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://ae01.alicdn.com/kf/HTB12aIJOpXXXXXlXXXXq6xXFXXXU/Anime-Re-Zero-Kara-Hajimeru-Isekai-Seikatsu-Ram-Rem-Maid-Ver-PVC-H-nh-S-u.jpg_640x640.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://ae01.alicdn.com/kf/HTB1qmVVSVXXXXXsXpXXq6xXFXXXM/Anime-Guilty-Crown-Yuzuriha-Inori-143-PVC-H-nh-ng-H-nh-S-u-T-p.jpg_640x640.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="http://mohinhdep.net/wp-content/uploads/2019/01/rem-mohinhdep.net-8.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://cf.shopee.vn/file/bb49a94b31d29098b19499a7e10563d9"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="http://vietnam.selloutontop.com/60321-1-large_default/Juejue-anime-naruto-c%C3%B4-g%C3%A1i-kh%C3%A1c-hyuuga-hinata-h%C3%ACnh-toy-20-cm.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://product.hstatic.net/1000160337/product/728451.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://ae01.alicdn.com/kf/HTB1MVGSMSzqK1RjSZPxq6A4tVXap/M-t-M-nh-h-nh-h-nh-ng-Anime-luffy-Hai-N-m-Sau-One.jpg_q50.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 clearfix d-none d-md-block">
                <div class="fuild" style="margin-top: 23px">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="http://mohinhdep.net/wp-content/uploads/2018/05/Your-name-mohinhdep.net-1.jpg"
                             alt="Card image cap">
                    </div>
                    <div class="overlay overlay1">
                        <div class="card-title">
                            <h3><b>Mô hình/FIGRUTE</b></h3>
                        </div>
                        <a href="#">
                            <section class="buttons">
                                <div class="container1">
                                    <a href="#" class="btn1 btn-5">
                                        View all
                                    </a>
                                </div>
                            </section>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3 clearfix d-none d-md-block">
                <div class="fuild" style="margin-top: 23px">
                    <div class="card mb-2">
                        <img class="card-img-top"
                             src="https://zpro.vn/images/product/500x500/moc-khoa-chao-game-pubg-nhieu-kieu-moi.1544426036.jpg"
                             alt="Card image cap">
                    </div>
                    <div class="overlay overlay1">
                        <div class="card-title">
                            <h3><b>Móc khóa</b></h3>
                        </div>
                        <a href="#">
                            <section class="buttons">
                                <div class="container1">
                                    <a href="#" class="btn1 btn-5">
                                        View all
                                    </a>
                                </div>
                            </section>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <div class="controls-top" style="float: right">
                        <a class="btn-floating" href="#multi-item-example1" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                        <a class="btn-floating" href="#multi-item-example1" data-slide="next"><i
                                    class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://salt.tikicdn.com/cache/550x550/ts/product/14/79/21/80afb999833e339e209e7d52bbbad88e.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://product.hstatic.net/1000090040/product/mockhoa_pubg-25_master.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="http://nanna.vn/wp-content/uploads/2018/11/M%C3%B3c-Kh%C3%B3a-Xe-Pubg-M727.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://cf.shopee.vn/file/0a780aa4e77e91afe479ffb1daf5d903"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="http://cdn.nhanh.vn/cdn/store/7239/ps/20170824/2418201711828_umaru_750x750.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild"><
                                            <img class="card-img-top"
                                                 src="https://vn-test-11.slatic.net/shop/c617097c86142fc9b0aba376ff4792fe.jpeg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://cf.shopee.vn/file/c939ea0d43567e63696f7d24c486535b&zimken.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="http://cdn.nhanh.vn/cdn/store/7239/ps/20190524/4.jpg"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 clearfix d-none d-md-block">
                                    <div class="card mb-2">
                                        <div class="fuild">
                                            <img class="card-img-top"
                                                 src="https://cf.shopee.vn/file/6b9b54eedd048a5e581b831b301e9c91/"
                                                 alt="Card image cap">
                                            <div class="overlay">
                                                <ul class="nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active color" href="#">
                                                            <i class="fa fa-shopping-bag" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link color" href="#">
                                                            <i class="fa fa-eye" style="font-size:30px"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row" style="margin-top: 75px">
            <div class="col-5" style="margin-left: 100px">
                <a href="#">
                    <img src="https://weblinhtinh.xyz/wp-content/uploads/2019/07/one-piece-ss20.jpg" class="image"
                         alt="">
                </a>
            </div>
            <div class="col-5">
                <a href="">
                    <img src="https://www.sbs.com.au/popasia/sites/sbs.com.au.popasia/files/styles/full/public/fairytailanimereturns.jpg?itok=7K4rZWCy&mtime=1501209257"
                         class="image" alt="">
                </a>
            </div>
        </div>
        <div class="col-12 text-center" style="margin-top: 50px">
            <button type="button" class="btn btn-outline-dark" style="padding-top: 15px">
                <h4>Xem thêm sản phẩm</h4>
            </button>
        </div>
    </div>
@endsection