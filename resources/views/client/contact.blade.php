@extends('client.layout')

@section('content')
    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096814183571!2d105.7800937149326!3d21.028811885998316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f9bdf0e1c7%3A0x26caee8e7662dd9b!2zRlBUIEFwdGVjaCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1566843331684!5m2!1svi!2s"
                            width="462" height="462" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-content">
                    <div class="contact-form-heading">
                        <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>
                        <p>Mọi thắc mắc xin liên hệ theo form bên dưới. Cảm ơn, rất hân hạnh được phục vụ.</p>
                    </div>

                    <div id="ajax-message"></div>
                    <form accept-charset='UTF-8' action='/contact' class='contact-form' method='post'>
                        <input name='form_type' type='hidden' value='contact'>
                        <input name='utf8' type='hidden' value='✓'>


                        <div class="form-group">
                            <label>Tên:</label>
                            <input class="form-control dark" type="text" id="ContactFormName" name="contact[ten]"
                                   placeholder="Tên" autocapitalize="words" value="">

                        </div>

                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control dark" type="email" id="ContactFormEmail"
                                   name="contact[email]" placeholder="Email" autocorrect="off" autocapitalize="off"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label>Điện thoại:</label>
                            <input class="form-control dark" type="tel" id="ContactFormPhone" name="contact[ten]"
                                   placeholder="Điện thoại" pattern="[0-9\-]*" value="">
                        </div>

                        <div class="form-group">
                            <label>Tin nhắn:</label>
                            <textarea class="form-control dark" rows="5" id="ContactFormMessage"
                                      name="contact[body]" placeholder="Tin nhắn"></textarea>
                        </div>

                        <div class="form-button">
                            <button type="submit" class="btn btn-lg btn-danger">Gửi</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

