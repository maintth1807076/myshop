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
            <div class="col-3">
                <img src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg" alt=""
                     class="image">
                <h5 style="margin-top: 10px"><b>Kaneki Ken</b></h5>
                <h3><b>1,200,000 đ</b></h3>
            </div>
            <div class="col-3">
                <img src="https://cdn11.bigcommerce.com/s-0kvv9/images/stencil/500x659/products/296842/419642/banprestonezukokamado__63251.1558102934.jpg?c=2" class="image" alt="">
                <h5 style="margin-top: 10px"><b>Nezuko</b></h5>
                <h3><b>560,000 đ</b></h3>
            </div>
            <div class="col-3">
                <img src="https://animemegamerch.com/wp-content/uploads/2018/07/16-48cm-Figuarts-ZERO-Majin-Buu-PVC-Action-Figures-Dragon-Ball-Z-Super-Saiyan-Dragonball-Z.jpg_640x640-6.jpg" alt="" class="image">
                <h5 style="margin-top: 10px"><b>Majin Buu</b></h5>
                <h3><b>300,000</b></h3>
            </div>
            <div class="col-3">
                <img src="https://www.derivefigurine.com/39854-large_default/honkai-impact-3rd-figure-yae-sakura-mandarin-gown.jpg" class="image" alt="">
                <h5 style="margin-top: 10px"><b>Yae Sakura</b></h5>
                <h3><b>3,600,000</b></h3>
            </div>
        </div>
        <div class="row" style="margin-top: 50px">
            <div class="col-3">
                <img src="https://image.dhgate.com/0x0/f2/albu/g8/M00/4E/37/rBVaVFxBNcaAQ2pxAADOJJcXDvg341.jpg" alt=""
                     class="image">
                <h5 style="margin-top: 10px"><b>Kaneki Ken</b></h5>
                <h3><b>1,200,000 đ</b></h3>
            </div>
            <div class="col-3">
                <img src="https://cdn11.bigcommerce.com/s-0kvv9/images/stencil/500x659/products/296842/419642/banprestonezukokamado__63251.1558102934.jpg?c=2" class="image" alt="">
                <h5 style="margin-top: 10px"><b>Nezuko</b></h5>
                <h3><b>560,000 đ</b></h3>
            </div>
            <div class="col-3">
                <img src="https://animemegamerch.com/wp-content/uploads/2018/07/16-48cm-Figuarts-ZERO-Majin-Buu-PVC-Action-Figures-Dragon-Ball-Z-Super-Saiyan-Dragonball-Z.jpg_640x640-6.jpg" alt="" class="image">
                <h5 style="margin-top: 10px"><b>Majin Buu</b></h5>
                <h3><b>300,000</b></h3>
            </div>
            <div class="col-3">
                <img src="https://www.derivefigurine.com/39854-large_default/honkai-impact-3rd-figure-yae-sakura-mandarin-gown.jpg" class="image" alt="">
                <h5 style="margin-top: 10px"><b>Yae Sakura</b></h5>
                <h3><b>3,600,000</b></h3>
            </div>
        </div>
        <div class="col-12 text-center"style="margin-top: 50px">
            <button type="button" class="btn btn-outline-dark" style="padding-top: 15px">
                <h4>Xem thêm sản phẩm</h4>
            </button>
        </div>

    </div>
@endsection
