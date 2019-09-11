@extends('client.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form id="register-form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <span class="invalid-feedback" role="alert">{{ $errors->first('name') }}</span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">
                                    <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">
                                    <span class="invalid-feedback" role="alert">{{ $errors->first('password') }}</span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirm" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        if ($("#register-form").length > 0) {
            $("#register-form").validate({

                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 6,
                    },
                    password_confirm: {
                        required: true,
                        minlength: 6,
                        equalTo: "password",
                    }
                },
                messages: {
                    name: {
                        required: "Vui lòng nhập họ tên",
                    },
                    email: {
                        required: "Vui lòng nhập email",
                        email: "Vui lòng nhập email hợp lệ",
                    },
                    password: {
                        required: "Vui lòng nhập mật khẩu",
                        minlength: "Độ dài mật khẩu phải lớn hơn 6",
                    },
                    password_confirm: {
                        required: "Vui lòng nhập mật khẩu",
                        minlength: "Độ dài mật khẩu phải lớn hơn 6",
                        equalTo: "Mật khẩu phải trùng nhau",
                    }
                },
            })
        }
    </script>
    <style>
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
@endsection
