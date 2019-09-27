@extends('client.layout')

@section('content')
    <link href="{{asset('css/jumbotron-narrow.css')}}" rel="stylesheet">
    <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
    <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
    <div class="row">
        <div class="col-sm-6" style="border-right: solid 1px #7E8D96">
{{--            <form id="form-receiver-infor" action="">--}}
                <div id="form-receiver-infor" class="row" style="margin: 5% 10%">
                    <div class="col-sm-12">
                        <h1>Toy Shop - Ðồ choi phụ kiện Manga, Anime, Game, Siêu anh hùng</h1>
                    </div>
                    <div class="col-sm-12">
                        <h4>Thông tin khách hàng</h4>
                    </div>
                    @if( Auth::check())
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="name" placeholder="Tên đầy đủ">
                            <span id="errorName" class="text-danger" >{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group col-sm-8">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <span id="errorEmail" class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                            <span id="errorPhone" class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
                            <span id="errorAddress" class="text-danger">{{ $errors->first('address') }}</span>
                        </div>
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" id="btn-pay" class="btn btn-primary" style="margin-left: 63.05%">Thanh toán</button>
                        </div>
                    @else
                        <div class="col-sm-12">
                            <p>Vui lòng đăng nhập để đặt hàng<a href="/login">Đăng nhập</a></p>
                        </div>
                    @endif
                    <div class="col-sm-6">
                        <a href="/cart">Quay lại giỏ hàng</a>
                    </div>
                </div>
{{--            </form>--}}
        </div>
        <div class="col-sm-6">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Avatar</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Name</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Unit Price</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Quantity</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody id="cart-pay">
                </tbody>
            </table>
        </div>
    </div>
@endsection