@extends('admin.layout')
@section('page-title', 'DASH BOARD - Admin Page')
@section('content')
{{--    <link href="{{asset('css/list.css')}}" rel='stylesheet' type='text/css'/>--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <style>
        #piechart g:hover {
            cursor: pointer;
        }

        g circle:hover {
            cursor: pointer;
        }
    </style>
    <section id="main-content">
        <section class="wrapper">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thống kê
                </div>
                <div class="float-right mt-3">
                    <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; width: 100%">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                </div>
                <div class="font-weight-bold ml-4 mt-3 text-uppercase">
                    Tổng thu nhập : <span class="total-revenue"></span> (VND)
                </div>
                <div class="advice ml-5">
                    <div class="text-danger"><strong>Tình hình kinh doanh:</strong></div>
                    <div class="advice-content" style="font-style: italic;"></div>
                </div>
                <div id="linechart_material" style="margin: 30px;"></div>
                <div class="advice ml-5 m-b-50">
                    <div class="text-danger"><strong>Sản phẩm bán chạy :</strong></div>
                    <div class="advice-content-best-seller" style="font-style: italic;"></div>
                </div>
                <div id="piechart" style="width: 600px; height: 500px;"></div>
                <!-- <div id="curve_chart" style="width: 900px; height: 500px"></div> -->
            @if (Session::has('message'))
                    <div class="alert {{ Session::get('message-class') }}">{{ Session::get('message') }}</div>
                @endif
            </div>
        </section>
    </section>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script type='text/javascript' src='//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js'></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['line']});
        google.charts.setOnLoadCallback(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();
            $.ajax({
                url: '/admin/get-chart-data?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
                method: 'GET',
                success: function (resp) {
                    if (resp.length == 0) {
                        swal('No data exists for line chart', 'Please choose another time range.', 'warning');
                        return;
                    }
                    ;
                    drawChart(resp);
                    var totalRevenue = 0;
                    var lastRevenue = parseInt(resp[0].revenue);
                    var last = resp.length;
                    var firstRevenue = parseInt(resp[resp.length - 1].revenue);
                    var difference = lastRevenue - firstRevenue;
                    if (difference < 0) {
                        if (-difference > 1500000) {
                            $('.advice-content').text('Going down considerably => You should check out 5 best-sellers below to have an effective marketing strategy');
                        } else {
                            $('.advice-content').text('Going down but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
                        }
                    }
                    if (difference > 0) {
                        if (difference > 2000000) {
                            $('.advice-content').text('Raising up considerably => You are having an effective marketing strategy! Keep going');
                        } else {
                            $('.advice-content').text('Raising up but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
                        }
                    }
                    for (var i = 0; i < resp.length; i++) {
                        totalRevenue += parseInt(resp[i].revenue);
                    }
                    ;
                    $('.total-revenue').text(totalRevenue);
                    $('.total-revenue').formatNumber();

                },
                error: function () {
                    swal('Something is wrong', 'Cannot retrieve data from API', 'error');
                }
            });
        });
        function drawChart(chart_data) {
            var data = new google.visualization.DataTable();
            data.addColumn('date', 'Ngày');
            data.addColumn('number', 'Thu nhập');
            for (var i = 0; i < chart_data.length; i++) {
                data.addRow([new Date(chart_data[i].day), Number(chart_data[i].revenue)]);
            }
            var options = {
                chart: {
                    title: 'Biểu đồ thu nhập theo thời gian',
                    subtitle: 'Tiền tệ(VND)'
                },
                height: 500,
                hAxis: {
                    format: 'yyyy/MM/dd'
                }
            };
            var chart = new google.charts.Line(document.getElementById('linechart_material'));
            chart.draw(data, google.charts.Line.convertOptions(options));

            google.visualization.events.addListener(chart, 'select', selectHandler);

            function selectHandler(e) {
                for (var i = 0; i < chart.getSelection().length; i++) {
                    var item = chart.getSelection()[i];
                    window.location.href = '/admin/orders?created_at=' + getDateFormat(chart_data[item.row].day);
                }
            }
        }
        function getDateFormat(date) {
            var d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();

            if (month.length < 2)
                month = '0' + month;
            if (day.length < 2)
                day = '0' + day;
            var date = new Date();
            date.toLocaleDateString();

            return [year, month, day].join('-');
        }
        ;
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();
            $.ajax({
                url: '/admin/get-pie-chart-data?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
                method: 'GET',
                success: function (resp) {
                    if (resp.length == 0) {
                        swal('No data exists for pie chart', 'Please choose another time range.', 'warning');
                        return;
                    }
                    ;
                    drawPieChart(resp);
                },
                error: function (r) {
                    swal('Something is wrong', 'Cannot retrieve data from API', 'error');
                }
            });
        });

        function drawPieChart(chart_data) {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Sản phẩm');
            data.addColumn('number', 'Số lượng');
            for (var i = 0; i < 5; i++) {
                data.addRow([chart_data[i].product.name, Number(chart_data[i].total_quantity)]);
            }
            ;
            var rest = 0;
            for (var i = 5; i < chart_data.length; i++) {
                rest += Number(chart_data[i].total);
            };
            var all = 0;
            for (var i = 0; i < chart_data.length; i++) {
                all += Number(chart_data[i].total_quantity);
            };
            var percentage1 = (chart_data[0].total_quantity/all)*100;
            if(percentage1<=20){
                $('.advice-content-best-seller').html('<span>The <a href="'+'/admin/orders?product_id='+ chart_data[0].product_id+'">'+chart_data[0].product.name+'</a> is doing great but compared with all its percentage overall is not too big</span>');
            } else if (percentage1<50 && percentage1>20) {
                $('.advice-content-best-seller').html('<span>The <a href="'+'/admin/orders?product_id='+ chart_data[0].product_id+'">'+chart_data[0].product.name+'</a> is doing so great this time that you should think of importing more of it</span>');
            } else if (percentage1<=50) {
                $('.advice-content-best-seller').html('<span>The <a href="'+'/admin/orders?product_id='+ chart_data[0].product_id+'">'+chart_data[0].product.name+'</a> takes more than half of your sales, you should not only import more of it but also promoting other products too. Such as <a href="'+'/admin/order?product_id='+ chart_data[1].product_id+'">'+chart_data[1].product.name+'</span>');
            }
            data.addRow(['Sản phẩm khác', rest]);
            var options = {
                title: '5 sản phẩm bán chạy'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);

            google.visualization.events.addListener(chart, 'select', selectHandler);

            function selectHandler(e) {
                for (var i = 0; i < chart.getSelection().length; i++) {
                    var item = chart.getSelection()[i];
                    window.location.href = '/admin/orders?product_id=' + chart_data[item.row].product_id;
                }
            }
        }
        // google.charts.load('current', {'packages':['corechart']});
        // google.charts.setOnLoadCallback(function () {
        //     var start = moment().subtract(29, 'days');
        //     var end = moment();
        //     $.ajax({
        //         url: '/api-get-line-curve?startDate=' + start.format('YYYY-MM-DD') + '&endDate=' + end.format('YYYY-MM-DD'),
        //         method: 'GET',
        //         success: function (resp) {
        //             console.log(resp);
        //
        //         },
        //         error: function (r) {
        //             console.log(r);
        //             swal('Something is wrong', 'Cannot retrieve data from API', 'error');
        //         }
        //     });
        // });

        // function drawLineCurveChart() {
        //     var data = new google.visualization.DataTable();
        //     data.addColumn('date', 'Date');

        //     data.addColumn('number', 'Date');

        //     var options = {
        //         title: 'Company Performance',
        //         curveType: 'function',
        //         legend: { position: 'bottom' }
        //     };

        //     var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        //     chart.draw(data, options);
        // }
        $(function () {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Last week': [moment().subtract(6, 'days'), moment()],
                    'Last 30 days': [moment().subtract(29, 'days'), moment()],
                    'This month': [moment().startOf('month'), moment().endOf('month')],
                    'Last month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                "firstDay": 1

            }, cb);
            cb(start, end);
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                //do something, like clearing an input
                $('#reportrange').val('');
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                var startDate = picker.startDate.format('YYYY-MM-DD');
                var endDate = picker.endDate.format('YYYY-MM-DD');
                $.ajax({
                    url: '/admin/get-pie-chart-data?startDate=' + startDate + '&endDate=' + endDate,
                    method: 'GET',
                    success: function (resp) {
                        if (resp.length == 0) {
                            swal('No data exists for pie chart', 'Please choose another time range.', 'warning');
                            return;
                        }
                        ;
                        drawPieChart(resp);
                    },
                    error: function (r) {
                        swal('Something is wrong', 'Cannot retrieve data from API', 'error');
                    }
                });
                $.ajax({
                    url: '/admin/get-chart-data?startDate=' + startDate + '&endDate=' + endDate,
                    method: 'GET',
                    success: function (resp) {
                        if (resp.length == 0) {
                            swal('No data exists for line chart', 'Please choose another time range.', 'warning');
                            return;
                        }
                        ;
                        drawChart(resp);
                        var totalRevenue = 0;
                        var totalRevenue = 0;
                        var lastRevenue = parseInt(resp[0].revenue);
                        var last = resp.length;
                        var firstRevenue = parseInt(resp[resp.length - 1].revenue);
                        var difference = lastRevenue - firstRevenue;
                        if (difference < 0) {
                            if (-difference > 1500000) {
                                $('.advice-content').text('Going down considerably => You should check out 5 best-sellers below to have an effective marketing strategy');
                            } else {
                                $('.advice-content').text('Going down but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
                            }
                        }
                        if (difference > 0) {
                            if (difference > 2000000) {
                                $('.advice-content').text('Raising up considerably => You are having an effective marketing strategy! Keep going');
                            } else {
                                $('.advice-content').text('Raising up but unconsiderably => You shouldn\'t be worried too much , keep working on the social media');
                            }
                        }
                        for (var i = 0; i < resp.length; i++) {
                            totalRevenue += parseInt(resp[i].revenue);
                        }
                        ;
                        $('.total-revenue').text(totalRevenue);
                        $('.total-revenue').formatNumber();
                    },
                    error: function () {
                        swal('Action failed', 'Cannot retrieve data from API', 'error');
                    }
                });
            });
        });
    </script>
@endsection