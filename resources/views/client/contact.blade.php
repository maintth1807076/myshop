@extends('client.layout')

@section('content')

    @if (session('alert'))
        <div class="alert alert-success text-md-center" role="alert">
            {{ session('alert') }}
        </div>
    @endif
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096814183571!2d105.7800937149326!3d21.028811885998316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f9bdf0e1c7%3A0x26caee8e7662dd9b!2zRlBUIEFwdGVjaCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1566843331684!5m2!1svi!2s"
                        width="100%" height="460" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-content">
                    <div class="contact-form-heading" style="font-family: -webkit-body">
                        <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
                        <p>Mọi thắc mắc xin liên hệ theo form bên dưới. Cảm ơn, rất hân hạnh được phục vụ.</p>
                    </div>
                    <form action='' method='post'>
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control dark" type="text"
                                           name="c_name" required
                                           placeholder="Họ tên">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control dark" type="email"
                                           name="c_email" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control dark" type="text"
                                           name="c_address" required
                                           placeholder="Địa chỉ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control dark" type="tel"
                                           name="c_phone" required
                                           placeholder="Điện thoại" pattern="[0-9\-]*">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control dark" type="text"
                                   name="c_title" required
                                   placeholder="Chủ đề liên hệ">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control dark" rows="6"
                                      name="c_content" placeholder="Nội dung liên hệ" required></textarea>
                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn btn-lg btn-danger">Gửi yêu cầu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <div class="row">
                <div class="col-lg-3 col-sm-6 d-flex mt-3">
                    <i class="media-contact rounded-circle fa-2x fas fa-home"></i>
                    <div class="ml-2 mt-2"><strong> Địa chỉ</strong>
                        <br>Tôn Thất Thuyết, Hà Nội
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-flex mt-3">
                    <i class="media-contact rounded-circle fa-2x fas fa-phone"></i>
                    <div class="ml-2 mt-2"><strong> Điện thoại</strong>
                        <br>0934-648-240
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-flex mt-3">
                    <i class="media-contact rounded-circle fa-2x fas fa-envelope"></i>
                    <div class="ml-2 mt-2"><strong> Email</strong>
                        <br>anhnguyentvn@gmail.com
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 d-flex mt-3">
                    <i class="media-contact rounded-circle fa-2x fas fa-clock"></i>
                    <div class="ml-2 mt-2"><strong> Thời gian làm việc</strong>
                        <br>8:30-22:00
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
