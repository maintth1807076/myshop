@extends('client.layout')

@section('content')
    <div class="container">
        <a href="/home">Trang chủ</a>/<a href="">Về chúng tôi</a>     <h1>Về chúng tôi</h1>
        {{--        <img class="titel-about" src="/img/us.jpg">--}}
        <div class="row">
            <div class="col">
                <div class="row">
                    <div data-aos="fade-up" class="col-xl-4 col-lg-4 col-md-12 col-sm-10 mt-5 ml-5">
                        <img src="/img/mohinh.jpg" alt="..." class="img-thumbnail">
                    </div>
                    <div data-aos="fade-down" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-5 mr-5 pt-3 ">
                        <i class="font1">MyToys là shop hàng đầu trong lĩnh vực Manga - Anime.</i><br>
                        Nếu là một fan ruột của Manga-Anime thì bạn không thể không đến với shop,
                        bạn có thể tìm thấy cho mình những nhân vật
                        manga mà từ thời bé xíu đã gắn bó với bạn qua những tập truyện tranh như mèo máy Đoraemon,
                        hay thám từ lừng danh Conan đến người máy Arale nghịch ngợm cùng 2 nhóc Boco và cũng ko thể bỏ
                        qua những nhân vật nổi tiếng trong truyện OnePiece, Dragon Ball và còn rất nhiều những nhân vật
                        trong truyện khác như Gintama, Naruto, hay Anime đang rất hot là Tokyo Ghoul, SAO, Date A
                        Live..v…v.
                        Còn nếu bạn là fan ruột của những thước phim hoạt hình Pixar, Disney: ToyStory, Incredible,
                        Wall-e, Ice Age,… hay những bộ phim Hollywood bom tấn như Batman, Avenger, Ironman, Hulk,.. thì
                        bạn cũng không thể bỏ qua
                    </div>
                </div>
                <div  class="row">
                    <div data-aos="fade-left" class="col-xl-12 col-lg-12 col-md-12 col-sm-10 mt-5 ml-5 pt-3">
                        <i class="font1">Lorem Ipsum is simply dummy text</i><br>
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </div>
                </div>
            </div>

            {{--    </div>--}}
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 "></div>
                    <div class="col-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 ml-4 mt-4">
                        <i data-aos="flip-left" class="fas fa-user-tie" style="font-size: 500%"></i><br>
                        <p data-aos="flip-right" class="font1">Mục đích của MyToys</p>
                        <p class="text-toy">
                    </div>
                    <div class=" col-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 ml-4 mt-4">
                        <i data-aos="flip-up" class="fas fa-lightbulb" style="font-size: 500%"></i><br>
                        <p data-aos="flip-down" class="font1">Mục đích của MyToys</p>
                    </div>
                    <div class=" col-3 col-xl-3 col-lg-3 col-md-2 col-sm-3 ml-4 mt-4">
                        <i data-aos="flip-up" class="fas fa-exclamation" style="font-size: 500%"></i><br>
                        <p data-aos="flip-right"class="font1">Mục đích của MyToys</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="row" id="thua2">
                    <div class="col-xl-1 col-lg-1 "></div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 ml-4 mr-1">
                        <p data-aos="zoom-in" class="text-toy"> Mục đích của chúng tôi là nâng cao chất lượng cuộc sống và góp phần vào một
                            tương lai khỏe mạnh hơn. Chúng tôi mong muốn tạo ra một thế giới tốt đẹp và
                            khỏe mạnh hơn. Chúng tôi cũng mong muốn truyền cảm hứng cho mọi người sống
                        </p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 ml-4 mr-1">
                        <p data-aos="zoom-in" class="text-toy"> Mục đích của chúng tôi là nâng cao chất lượng cuộc sống và góp phần vào một
                            tương lai khỏe mạnh hơn. Chúng tôi mong muốn tạo ra một thế giới tốt đẹp và
                            khỏe mạnh hơn. Chúng tôi cũng mong muốn truyền cảm hứng cho mọi người sống
                        </p>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 ml-4 mr-1">
                        <p data-aos="zoom-in-up" class="text-toy"> Mục đích của chúng tôi là nâng cao chất lượng cuộc sống và góp phần vào một
                            tương lai khỏe mạnh hơn. Chúng tôi mong muốn tạo ra một thế giới tốt đẹp và
                            khỏe mạnh hơn. Chúng tôi cũng mong muốn truyền cảm hứng cho mọi người sống
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12" style="font-size: 300%;color: #2fa360;text-align: center;margin-bottom: 1%">Những con số kỉ
            lục
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-5 ml-5" id="thua"></div>
                    <div data-aos="fade-up" class="col-xl-3 col-lg-3 ml-4 col-md-6 col-sm-5" style="border-right: black 1px solid">
                        <strong class="kiluc1">CHO CÁ NHÂN & GIA ĐÌNH</strong>
                        <p>giúp đỡ </p><br>
                        <b class="kiluc"> 50 TRIỆU</b><br>
                        <p>trẻ em có cuộc sống lành mạnh hơn</p>
                    </div>
                    <div data-aos="fade-down" class="col-xl-4 col-lg-4 col-md-5 col-sm-5">
                        <strong class="kiluc">CHO CỘNG ĐỒNG</strong>
                        <p>giúp đỡ </p><br>
                        <b class="kiluc1"> 30 TRIỆU</b><br>
                        <p>trẻ em có cuộc sống lành mạnh hơn</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-10 mt-5 ml-5 pt-3 mb-3 ">
                <i class="font2">Lorem Ipsum is simply dummy text</i><br>
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
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
@endsection
