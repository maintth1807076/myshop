@extends('client.layout')

@section('content')
    <div class="container-fluid"
         style="background: whitesmoke;  background-image: url(https://i.pinimg.com/originals/e9/e0/6d/e9e06d9c5b85991b0a6e272843941265.png)">
        <div class="row justify-content-center">
            <div class="col-md-6 p-5">
                <div class="card">
                    <div class="card-header"
                         style="font-family: cursive; font-size: x-large">{{ __('Lấy Lại Mật Khẩu') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-5 col-form-label text-md-right">{{ __('Vui lòng cung cấp email để lấy lại mật khẩu') }}</label>

                                <div class="col-md-7 mt-2">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Xác Nhận') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
