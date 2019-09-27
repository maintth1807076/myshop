@extends('client.layout')

@section('content')
    <div class="container vn-pay-body ">
        <div class="vn-pay">
            <div class="header clearfix">
                <h3 class="text-danger text-center pt-sm-4 pb-sm-4">VNPAY RESPONSE</h3>
            </div>
            <div class="table-responsive">
                <div class="form-group">
                    <div class="row vn-pay-row">
                        <span class="col-sm-12"><pre><b>Mã đơn hàng</b>: <?php echo $_GET['vnp_TxnRef'] ?></pre></span>

                    </div>
                </div>
                <div class="form-group">
                    <div class="row vn-pay-row">
                        <span id="span-take-id" class="col-sm-6" data-id="{{$order->id}}">  <pre><b>Name</b>: {{$order->ship_name}}</pre></span>
                        <span class="col-sm-6">  <pre><b>Phone</b>: {{$order->ship_phone}}</pre></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row vn-pay-row">
                        <span class="col-sm-12"><pre><b>Địa chỉ</b>: {{$order->ship_address}}</pre></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row vn-pay-row">
                        <span class="col-sm-5"><pre><b>Số tiền</b>: <?php echo number_format($_GET['vnp_Amount']/100) ?> VNĐ.</pre></span>
                        <span class="col-sm-7"><pre><b>Thời gian thanh toán</b>: <?php echo $_GET['vnp_PayDate'] ?></pre></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row vn-pay-row">
                        <span class="col-sm-12"><pre><b>Nội dung thanh toán</b>: <?php echo $_GET['vnp_OrderInfo'] ?></pre></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row vn-pay-row">
                        <span class="col-sm-6"><pre><b>Mã GD Tại VNPAY</b>: <?php echo $_GET['vnp_TransactionNo'] ?></pre></span>
                        <span class="col-sm-6"><pre><b>Mã Ngân hàng</b>: <?php echo $_GET['vnp_BankCode'] ?></pre></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row vn-pay-row">
                        <pre>  <b>Kết quả:</b> </pre>
                        @if($secureHash == $_GET['vnp_SecureHash'])
                            @if($_GET['vnp_ResponseCode'] == '00')
                                <label>Giao dịch thành công!</label>
                            @else
                                <label>Giao dịch không thành công!</label>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right vn-pay-bt">
            <form action="/send-notice-order" method="post">
                @csrf
                <input name="id" type="text" value="{{$order->id}}" class="d-none">
                <button type="submit" class=" btn btn-outline-dark">Tiếp tục mua hàng</button>
            </form>
        </div>
    </div>
    <script>
        $("#btn-send-notice").click(function () {
            $.ajax({
                url: '/send-notice-order',
                method: 'GET',
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    'id': $('#span-take-id').attr("data-id")
                },
                success: function () {
                },
                error: function () {
                }
            })
        });
    </script>
@endsection
