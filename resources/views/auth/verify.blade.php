@extends('client.layout')

@section('content')
    <div class="container-fluid"
         style="background: whitesmoke;  background-image: url(https://i.pinimg.com/originals/e9/e0/6d/e9e06d9c5b85991b0a6e272843941265.png)">
        <div class="row justify-content-center">
            <div class="col-md-6 p-5">
            <div class="card">
                <div class="card-header text-md-center"
                     style="background: white; font-family: cursive; font-size: x-large">{{ __('Xác nhận địa chỉ email của bạn') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Một liên kết xác minh đã được gửi đến email của bạn.') }}
                        </div>
                    @endif

                    {{ __('Vui lòng kiểm tra email để kích hoạt tài khoản.') }}
                    {{ __('Nếu bạn không nhận được email') }}, <a href="{{ route('verification.resend') }}">{{ __('nhấn vào đây để lấy mã xác nhận khác') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
