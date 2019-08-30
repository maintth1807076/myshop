@extends('client.layout')

@section('content')
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
               <form method="POST" action="/change-name">
                   @csrf
                   <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                       <div class="col-md-6">
                           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                           @error('name')
                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                       </div>
                   </div>

                   <div class="form-group row mb-0">
                       <div class="col-md-6 offset-md-4">
                           <button type="submit" class="btn btn-primary">
                               Save
                           </button>
                       </div>
                   </div>
               </form>
           </div>
           <div id="menu2" class="container tab-pane fade"><br>
               <form method="POST" action="/change-avatar">
                   @csrf
                   <div class="form-group row">
                       <label for="name" class="col-md-4 col-form-label text-md-right">Avatar</label>

                       <div class="col-md-6">
                           <input type="text" class="form-control @error('name') is-invalid @enderror" name="avatar" value="" required autocomplete="name" autofocus>
                           <img src="" alt="">
                           @error('name')
                           <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                       </div>
                   </div>

                   <div class="form-group row mb-0">
                       <div class="col-md-6 offset-md-4">
                           <button type="submit" class="btn btn-primary">
                               Save
                           </button>
                       </div>
                   </div>
               </form>
           </div>
           <div id="menu3" class="container tab-pane fade"><br>
               <h3>Menu 3</h3>
               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
           </div>
       </div>


   </div>
@endsection


