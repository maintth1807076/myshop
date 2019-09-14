@extends('client.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mb-3">
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
                    <th scope="col">Id</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Name</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="cart-body">
                </tbody>
            </table>
        </div>
        <button id="btn-check" class="btn btn-primary">Ok</button>
    </div>
@endsection
