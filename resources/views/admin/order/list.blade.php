@extends('admin.layout')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> List Orders
                <small class="text-muted">All order availble</small>
            </h3>
        </div>
    </div>
    <div class="row mb-2 mt-2">
        <div class="col-7">
            <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; width: 100%">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span><i class="fa fa-caret-down"></i>
            </div>
        </div>
        <div class="col-5">
            <div class="filter-btn form-inline" action="/admin/orders" method="GET">
                <div class="form-group mx-sm-4 mb-3">
                    <label for="chooseStatus">Status</label>
                    <select id="select-action" name="status" class="form-control">
                        <option selected value="3" {{3==$choosedStatus?'selected':''}}>All</option>
                        <option value="0" {{0==$choosedStatus?'selected':''}}>Confirming</option>
                        <option value="1" {{1==$choosedStatus?'selected':''}}>Confirmed</option>
                        <option value="2" {{2==$choosedStatus?'selected':''}}>Finished</option>
                        <option value="-1" {{-1==$choosedStatus?'selected':''}}>Cancelled</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col"><input style="width: auto" id="check-all" type="checkbox" class="form-control" name="">
                </th>
                <th class="column-1 text-center">ID</th>
                <th class="column-2">Receiver</th>
                <th class="column-3">Address</th>
                <th class="column-4">Phone Number</th>
                <th class="column-5">Order Detail</th>
                <th class="column-6" style="width: 6%;">Total</th>
                <th class="column-9">Created Time</th>
                <th class="column-7">Status</th>
                <th class="column-8 text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $item)
                <tr class="row-item" id="row-item-{{$item->id}}">
                    <td class="column-0">
                        @if($item->status==1 || $item->status==0)
                            <input type="checkbox" class="check-item" value="{{$item->id}}">
                        @endif
                    </td>
                    <td class="column-1 text-center">
                        <div>{{$item->id}}</div>
                        <a class="btn btn-simple btn-link btn-icon text-center" data-placement="top"
                           title="Click to view the details of this order" href="/admin/orders/{{$item->id}}">
                            <button class="btn btn-outline-success">Detail</button>
                        </a>
                    </td>
                    <td class="column-2">{{$item->ship_name}}</td>
                    <td class="column-3">{{$item->ship_address}}</td>
                    <td class="column-4">{{$item->ship_phone}}</td>
                    <td class="column-5">
                        @foreach($item->details as $order_detail)
                            <li>{{$order_detail->quantity}} - {{$order_detail->product->name}}</li>
                        @endforeach
                    </td>
                    <td class="column-6" style="width: 6%;">{{number_format($item->total_price)}} (vnd)</td>
                    <th class="column-9" style="font-weight: normal;">{{$item->created_at}}</th>
                    <td class="column-7 font-weight-bold status-label">{{$item->statusLabel}}</td>
                    <td class="column-8 text-center">
                        @if($item->status == 0)
                            <a href="/admin/orders/change-status/{{$item->id}}?status=1" onclick="return confirm('Bạn có chắc xác nhận đơn hàng này?')"
                               class="btn btn-simple btn-info btn-icon edit" title="Click to have this order confirmed"><i class="fas fa-hourglass"></i></a>
                            <a href="/admin/orders/change-status/{{$item->id}}?status=-1" onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này?')"
                               class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i class="fas fa-times"></i></a>
                        @elseif($item->status==1)
                            <a href="/admin/orders/change-status/{{$item->id}}?status=2" onclick="return confirm('Bạn có chắc hoàn thành đơn hàng này?')"
                               class="btn btn-simple btn-success btn-icon edit" title="Click to have this order finished"><i class="fas fa-check"></i></a>
                            <a href="/admin/orders/change-status/{{$item->id}}?status=-1" onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này?')"
                               class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i class="fas fa-times"></i></a>
                        @elseif($item->status==2)
                            <i class="fas fa-check 4x text-danger"></i>
                        @elseif($item->status==-1)
                            <i class="fas fa-times 4x text-danger"></i>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-8 form-inline">
                <div class="form-check mb-2">
                    <select id="select-action" name="action-id" class="form-control">
                        <option selected value="0">Thao tác</option>
                        <option value="1">Xác nhận</option>
                        <option value="2">Hoàn thành</option>
                        <option value="-1">Xóa</option>
                    </select>
                    <button type="submit" class="btn btn-primary ml-2" id="btn-order-apply-all">Apply to all</button>
                </div>
            </div>
        </div>
        <div class="pagination pull-right" style="margin-left: 30%">
            {{$orders->links()}}
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type='text/javascript' src='//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js'></script>
    <script>
        $('.filter-btn select[name=status]').change(function () {
            window.location.href = $('.filter-btn').attr('action') + '?status=' + $(this).val();
        });
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);
            cb(start, end);

            $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
                $('#reportrange').val('');
            });

            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                $.ajax({
                    url: '/admin/get-data-to-time?startDate=' + startDate + '&endDate=' + endDate,
                    method: 'GET',
                    success: function (resp) {
                        var list_obj = resp.list_obj;
                        if(list_obj == 0){
                            swal('No data exists', 'Please choose another time range.', 'warning');
                            return;
                        };
                        var content = '';
                        for (var i in list_obj) {
                            content += '<tr class="row-item" id="row-item-' + list_obj[i].id + '">';
                            content += '<td class="column-0">';
                            if (list_obj[i].status == 1 || list_obj[i].status == 0){
                                content += '<input type="checkbox" class="check-item" value="' + list_obj[i].id + '">';
                            }
                            content += '</td>';
                            content += '<td style="text-align:center;" class="column-1"><div>' + list_obj[i].id + '</div>';
                            content += '<a class="btn btn-simple btn-link btn-icon text-center" data-placement="top" title="Click to view the details of this order" href="/admin/order/'+ list_obj[i].id +'">';
                            content += '<button class="btn btn-outline-success">Detail</button>';
                            content += '</a>';
                            content += '</td>';
                            content += '<td class="column-2">' + list_obj[i].ship_name + '</td>';
                            content += '<td class="column-3">' + list_obj[i].ship_address + '</td>';
                            content += '<td class="column-4">' + list_obj[i].ship_phone + '</td>';
                            content += '<td class="column-5">';
                            jQuery.each(list_obj[i].order_details, function(j, item) {
                                content += '<li>' + item.quantity + ' - ' + item.product.name + '</li>';
                            });
                            content += '</td>';
                            content += '<th class="column-9" style="font-weight: normal;">'+list_obj[i].created_at+'</th>';
                            content += '<td class="column-6">' + list_obj[i].unit_price + '</td>';
                            content += '<td class="column-7 font-weight-bold">' + list_obj[i].statusLabel + '</td>';
                            content += '<td class="column-8 text-center">';

                            if (list_obj[i].status == 0) {
                                content += '<a href="/admin/orders/change-status/'+list_obj[i].id+'?status=1" onclick="return confirm("Are sure to confirm this order?")" class="btn btn-simple btn-info btn-icon edit" title="Click to have this order confirmed"><i class="fas fa-hourglass"></i></a>';
                                content += '<a href="/admin/orders/change-status/'+list_obj[i].id+'?status=-1" onclick="return confirm("Are sure to confirm this order?")" class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i class="fas fa-times"></i></a>';
                            } else if (list_obj[i].status == 1) {
                                content += '<a href="/admin/orders/change-status/'+list_obj[i].id+'?status=2" onclick="return confirm("Are you sure to finish this order?")" class="btn btn-simple btn-success btn-icon edit" title="Click to have this order finished"><i class="fas fa-check"></i></a>';
                                content += '<a href="/admin/orders/change-status/'+list_obj[i].id+'?status=-1" onclick="return confirm("Are sure to cancel this order?)" class="btn btn-simple btn-danger btn-icon edit" title="Click to cancel this order"><i class="fas fa-times"></i></a>';
                            } else if (list_obj[i].status == 2) {
                                content += '<i class="fas fa-check 4x text-danger"></i>';
                            } else if (list_obj[i].status == -1) {
                                content += '<i class="fas fa-times 4x text-danger"></i>';
                            }
                            content += '</td>';
                            content += '</tr>';
                        }
                        $('tbody').html(content);
                    },
                    error: function () {
                        swal('Action failed', 'Cannot retrieve data from API', 'error');
                    }
                });
            });
        });
        $('#btn-order-apply-all').click(function () {
            var arrayId = new Array();
            var url = '/admin/orders/change-status';
            $('.check-item:checkbox:checked').each(function () {
                arrayId.push($(this).val());
            });
            if (arrayId.length == 0) {
                swal('Vui lòng chọn ít nhất một đơn hàng trước khi thực hiện thao tác!');
                return;
            }
            var action = $("select[name='action-id']").val();
            if (action == 0) {
                swal('Vui lòng chọn thao tác muốn thực hiện!');
                return;
            }
            swal({
                    title: "Bạn có chắc muốn thực hiện thao tác?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Có',
                    cancelButtonText: 'Không',
                    closeOnConfirm: false,
                },
                function () {
                    changeStatus(arrayId, url, action);
                });
        });
    </script>
@endsection