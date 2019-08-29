@extends('client.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://i.ytimg.com/vi/Asn1qJ9gDJ0/maxresdefault.jpg"
                                 alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i.redd.it/37yp9qbro7w21.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                 src="https://webimg.secondhandapp.com/w-i-mgl/5abe60071f1fad51b909b367"
                                 alt="Third slide">
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
        </div>
        <hr>
        <hr>
        <div style="margin-top: 50px" class="text-center col-12">
            <h2>SẢN PHẨM NỔI BẬT</h2>
        </div>
        <div class="row" style="margin-top: 50px">
            <div class="card-deck">
                <div class="card  "  style="width:400px">
                    <img class="card-img-top" src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg" alt="Card image cap">
                    <div class="card-body">
                        <a href="/detail"><h5 class="card-title"><b>Kaneki Ken</b></h5></a>
                        <h3><b>1,200,000 đ</b></h3></div>
                </div>
                <div class="card  col-sm-4"  style="width:400px">
                    <img class="card-img-top" src="https://product.hstatic.net/1000124630/product/htb1kkyfxo_rk1rjy0fcq6zevvxa1_bc27457122e64d4aa8224025b4926cc5_large.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Nezuko</b></h5>
                        <h3><b>560,000 đ</b></h3> </div>
                </div>
                <div class="card  col-sm-4"  style="width:400px">
                    <img class="card-img-top" src="https://animemegamerch.com/wp-content/uploads/2018/07/16-48cm-Figuarts-ZERO-Majin-Buu-PVC-Action-Figures-Dragon-Ball-Z-Super-Saiyan-Dragonball-Z.jpg_640x640-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Majin Buu</b></h5>
                        <h3><b>300,000</b></h3>  </div>
                </div>
            </div>

            <div class="card-deck" style=" margin-top: 30px;">
                <div class="card  "  style="width:400px">
                    <img class="card-img-top" src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Kaneki Ken</b></h5>
                        <h3><b>1,200,000 đ</b></h3></div>
                </div>
                <div class="card  col-sm-4"  style="width:400px">
                    <img class="card-img-top" src="https://product.hstatic.net/1000124630/product/htb1kkyfxo_rk1rjy0fcq6zevvxa1_bc27457122e64d4aa8224025b4926cc5_large.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Nezuko</b></h5>
                        <h3><b>560,000 đ</b></h3> </div>
                </div>
                <div class="card  col-sm-4"  style="width:400px">
                    <img class="card-img-top" src="https://animemegamerch.com/wp-content/uploads/2018/07/16-48cm-Figuarts-ZERO-Majin-Buu-PVC-Action-Figures-Dragon-Ball-Z-Super-Saiyan-Dragonball-Z.jpg_640x640-6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>Majin Buu</b></h5>
                        <h3><b>300,000</b></h3>  </div>
                </div>
            </div>
        </div>
    <div class="col-12 text-center"style="margin-top: 50px">
        <button type="button" class="btn btn-outline-dark" style="padding-top: 15px">
            <h4>Xem thêm sản phẩm</h4>
        </button>
    </div>
    </div>
@endsection
