@extends('client.layout')

@section('content')
    <div class="row">
        <div class="col-sm-6" style="border-right: solid 1px #7E8D96">
            <div class="row" style="margin: 5% 10%">
                <div class="col-sm-12">
                    <h1>TiTan - Đồ chơi phụ kiện Manga, Anime, Game, Siêu anh hùng</h1>
                </div>
                <div class="col-sm-12">
                    <h4>Shipping Information</h4>
                </div>
                <div class="col-sm-12">
                    <p>Already have an account with us? <a href="/login">Sign in</a></p>

                </div>
                <div class="form-group col-md-12">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Tên đầy đủ">
                </div>
                <div class="form-group col-sm-8">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-sm-4">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Số điện thoại">
                </div>
                <div class="form-group col-md-12">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Địa chỉ">
                </div>
                <div class="col-sm-6">
                    <a href="/cart">< cart</a>
                </div>
                <div class="col-sm-6">
                    <button id="btn-buy" class="btn btn-primary" style="margin-left: 63.05%">Thanh toán</button>
                </div>
            </div>


        </div>
        <div class="col-sm-6">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Avatar</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Name</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Unit Price</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody id="cart-body1">
                </tbody>
            </table>
        </div>
    </div>
@endsection