@extends('client.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mb-3" style="margin: 1% 0">
                    <i class="fas fa-stream"></i> Shopiing
                </h3>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">
                        <input type="checkbox" id="check-all">
                    </th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Id</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Avatar</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Name</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Unit Price</th>
                    <th scope="col" style="border-right: 2px solid #EEF0F2">Quantity</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody id="cart-body">
                </tbody>
            </table>
            <div class="col-md-12" style="padding-left: 81%">
                <div style="margin: 0 1% 1%">
                    <a href="/pay"><button class="btn btn-warning">Tiến hành đặt hàng</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
