@extends('client.layout')

@section('content')
    @if (session('success'))
        <div class="alert alert-success text-md-center" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('danger'))
        <div class="alert alert-danger text-md-center" role="alert">
            {{ session('danger') }}
        </div>
    @endif
    <div style="margin-top: 50px;">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Thông tin tài khoản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Sửa tên</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Sửa ảnh đại diện</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3">Đổi mật khẩu</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <p>Tên tài khoản: {{ Auth::user()->name }}</p>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <div class="row mb-5">
                    <div class="col-sm-12" style="font-family: serif; font-size: initial">
                        <form method="POST" action="/change-name">
                            @csrf
                            <div class="form-group">

                                <label for="name">Họ và tên: </label>
                                <input id="name" type="text"
                                       class="form-control col-md-6 @error('name') is-invalid @enderror"
                                       name="name" value="{{ Auth::user()->name }}" required autocomplete="name"
                                       autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Thay đổi</button>

                        </form>
                    </div>
                </div>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <div class="row mb-5">
                    <div class="col-sm-12" style="font-family: serif; font-size: initial">
                        <form method="POST" action="/change-avatar">
                            @csrf
                            <div class="form-group">
                                <label for="name">Avatar: </label>

                                <input type="text" class="form-control col-md-6 @error('name') is-invalid @enderror"
                                       name="avatar"
                                       value="" required autocomplete="name" autofocus>
                                <img src="" alt="">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Thay đổi</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="menu3" class="container tab-pane fade"><br>
                <div class="row mb-5">
                    <div class="col-sm-12" style="font-family: serif; font-size: initial">
                        <form action="/change-password" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Mật khẩu cũ: </label>
                                <input type="password" class="form-control col-md-4 @error('password_old') is-invalid @enderror" placeholder="*********"
                                       name="password_old" value="">
                                @if($errors->has('password_old'))
                                    <span class="invalid-feedback" role="alert">
                                        {{$errors->first('password_old')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu mới: </label>
                                <input type="password" class="form-control col-md-4 @error('password') is-invalid @enderror" placeholder="*********"
                                       name="password" value="">
                                @if($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        {{$errors->first('password')}}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Xác nhận mật khẩu mới: </label>
                                <input type="password" class="form-control col-md-4 @error('password_confirm') is-invalid @enderror" placeholder="*********"
                                       name="password_confirm" value="">
                                @if($errors->has('password_confirm'))
                                    <span class="invalid-feedback" role="alert">
                                        {{$errors->first('password_confirm')}}
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Thay đổi mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
