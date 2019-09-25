@extends('client.layout')

@section('content')
    <link href="{{asset('css/jumbotron-narrow.css')}}" rel="stylesheet">
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">VNPAY DEMO</h3>
        </div>
        <h3>Tạo mới đơn hàng</h3>
        <div class="table-responsive">
            <form action="/vnpay" id="create_form" method="post">
                <div class="form-group">
                    <label for="language">Loại hàng hóa </label>
                    <select name="order_type" id="order_type" class="form-control">
                        <option value="billpayment">Thanh toán hóa đơn</option>
                        <option value="topup">Nạp tiền điện thoại</option>
                        <option value="fashion">Thời trang</option>
                        <option value="other">Khác - Xem thêm tại VNPAY</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="order_id">Mã hóa đơn</label>
                    <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/>
                </div>
                <div class="form-group">
                    <label for="amount">Số tiền</label>
                    <input class="form-control" id="amount"
                           name="amount" type="number" value="">
                </div>
                <div class="form-group">
                    <label for="order_desc">Nội dung thanh toán</label>
                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="bank_code">Ngân hàng</label>
                    <select name="bank_code" id="bank_code" class="form-control">
                        <option value="NCB"> Ngan hang NCB</option>
                        <option value="AGRIBANK"> Ngan hang Agribank</option>
                        <option value="SCB"> Ngan hang SCB</option>
                        <option value="SACOMBANK">Ngan hang SacomBank</option>
                        <option value="EXIMBANK"> Ngan hang EximBank</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="language">Ngôn ngữ</label>
                    <select name="language" id="language" class="form-control">
                        <option value="vn">Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán</button>
            </form>
        </div>
    </div>
    <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
    <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
    <script type="text/javascript">
        // $("#btnPopup").click(function () {
        //     var amount = $("#create_form input[name=amount]").val();
        //     console.log(amount)
        //     console.log(amount * 100);
        //     var submitUrl = $("#create_form").attr("action");
        //     $.ajax({
        //         type: "POST",
        //         url: submitUrl,
        //         data: {
        //             '_token': $('meta[name=csrf-token]').attr('content'),
        //             'amount': amount
        //         },
        //         success: function (x) {
        //             if (x.code === '00') {
        //                 if (window.vnpay) {
        //                     vnpay.open({width: 768, height: 600, url: x.data});
        //                 }
        //                 return false;
        //             } else {
        //                 alert(x.Message);
        //             }
        //         }
        //     });
        //     return false;
        // });
    </script>
@endsection
