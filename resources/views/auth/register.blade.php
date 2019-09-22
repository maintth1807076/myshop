@extends('client.layout')

@section('content')
    <div class="container-fluid"
         style="background: whitesmoke;  background-image: url(https://i.pinimg.com/originals/e9/e0/6d/e9e06d9c5b85991b0a6e272843941265.png)">
        <div class="row justify-content-center">
            <div class="col-md-6 p-5">
                <div class="card">
                    <div class="card-header text-md-center"
                         style="background: white; font-family: cursive; font-size: x-large">{{ __('Đăng Ký') }}</div>

                    <div class="card-body">
                        <form id="register-form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <input id="name" type="text" placeholder="Họ và tên"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <span class="invalid-feedback" role="alert">{{ $errors->first('name') }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <input id="email" type="email" placeholder="Email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">
                                    <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <input id="password" type="password" placeholder="Mật khẩu"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">
                                    <span class="invalid-feedback" role="alert">{{ $errors->first('password') }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <input id="password-confirm" type="password" placeholder="Xác nhận mật khẩu"
                                           class="form-control" name="password_confirmation" required
                                           autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4 offset-md-3">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Đăng ký') }}
                                    </button>
                                </div>
                                <div class="col-md-4 ml-3">
                                    <a class="btn btn-danger" href="{{ route('login') }}">Đăng nhập</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
