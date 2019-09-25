@extends('admin.layout')

@section('content')
    <div class="container-fluid"
         style="background: whitesmoke;  background-image: url(https://i.pinimg.com/originals/e9/e0/6d/e9e06d9c5b85991b0a6e272843941265.png)">
        <div class="row justify-content-center">
            <div class="col-md-6 p-5">
                <div class="card">
                    <div class="card-header text-md-center"
                         style="background: white; font-family: cursive; font-size: x-large">{{ __('Đăng Nhập') }}</div>

                    <div class="card-body">
                        <form id="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <input id="email" type="email" placeholder="Email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <input id="password" type="password" placeholder="Mật khẩu"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                    <span class="invalid-feedback" role="alert">{{ $errors->first('password') }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4 offset-md-3">
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label"  style="font-family: cursive;" for="remember">
                                            {{ __('Lưu thông tin') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 ml-3">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Đăng nhập') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer">
                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-md-right">
                                <a class="btn btn-link" href="{{ route('register') }}">Tạo tài khoản</a>
                                <span>/</span>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu ?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
