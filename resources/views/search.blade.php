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
                    <button id="btn-check" class="btn btn-warning">Cập nhập</button>
                    <button id="btn-buy" class="btn btn-warning">Thanh toán</button>
                </div>
            </div>
        </div>
    </div>
    <form>
        <div class="form-group col-md-3">
            <label for="inputEmail4">Ship name</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
        </div>
        <div class="form-group col-sm-3">
            <label for="inputEmail4">Ship adress</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-3">
            <label for="inputEmail4">Ship phone</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Phone">
        </div>
    </form>
@endsection
