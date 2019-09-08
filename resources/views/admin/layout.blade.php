<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}" ></script>
    <script src="{{asset('js/custom.js')}}" ></script>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="col-2"><a class="navbar-brand ml-5" href="/home">
                <img src="https://res.cloudinary.com/dkzqu5nh2/image/upload/v1566975633/image.png" width="75px"
                     height="auto" alt="">
            </a></div>
        <div class="col-8"></div>
        <div class="col-2">
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown float-right">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row pt-5 ml-2">
        <div class="col-4 col-md-3 col-lg-2 admin-nav-side">
            <div class="nav flex-column nav-pills text-dark">
                <a class="nav-link active bg-dark" href="/admin"><i class="fas fa-cogs pr-2"></i>Quản lí</a>
                <a class="nav-link text-dark admin-nav-link" href="/admin/users"><i class="fas fa-users pr-2"></i>Khách hàng</a>
                <a class="nav-link text-dark admin-nav-link" href="/admin/categories"><i class="fas fa-th-list pr-2"></i>Danh mục</a>
                <a class="nav-link text-dark admin-nav-link" href="/admin/products"><i class="fas fa-cube pr-2"></i>Sản phẩm</a>
                <a class="nav-link text-dark admin-nav-link" href="/admin/orders"><i class="fas fa-shopping-cart pr-2"></i>Đơn hàng</a>
                <a class="nav-link text-dark admin-nav-link" href="/admin/reports"><i class="fas fa-file-alt pr-2"></i>Báo cáo</a>
            </div>
        </div>
        <div class="col-8 col-md-9 col-lg-10 pl-5">
            @section('content')
            @show()
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col bg-dark p-2 fixed-bottom">
            <div class="text-center text-white">
                Copyright &copy; by A Little Hope
            </div>
        </div>
    </div>
</div>
<script>// var a = new Array();
    // a.push(1);
    // a.push(2);
    // a.push(3);
    //
    // console.log(a);
    // $.ajax({
    //     url:'/game/delete-many',
    //     method:'POST',
    //     data: {
    //         '_token': $('meta[name=csrf-token]').attr("content"),
    //         'ids': [2,4]
    //     },
    //     success: function () {
    //         alert("ok");
    //     },
    //     error: function () {
    //         alert("112");
    //     }
    // });

    $(document).ready(function () {
        // $('.btn-delete').click(function () {
        //     if (confirm('Are you sure wanna delete this game?')) {
        //         var deleteId = $(this).attr('id').replace('btn-delete-', '');
        //         var currentItem = $(this);
        //         $.ajax({
        //             url: '/game/' + deleteId,
        //             method: 'DELETE',
        //             data: {
        //                  '_token': $('meta[name=csrf-token]').attr('content')
        //             },
        //             success: function() {
        //                 alert('Success');
        //                 currentItem.closest("tr").remove();
        //             },
        //             error: function () {
        //                 alert('Error');
        //             }
        //         });
        //     }
        // });
        $('.btn-delete').click(function () {
            if (confirm('muốn xóa chứ')){
                var deleteId = $(this).attr('id').replace('btn-delete-','');
                var item =$(this);
                $.ajax({
                    url:'/admin/products/' +deleteId,
                    method:'DELETE',
                    data: {
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function (){
                        alert('Success');
                        item.closest("tr").remove();
                    },
                    error: function () {
                        alert('ERORR');

                    }
                })
            }
        })
        $('#check-all').change(function(){
            $('.check-item').prop('checked', $(this).is(':checked'));
        });
        $('#btn-apply-all').click(function () {
            // kiểm tra người dùng đã check phần tử chưa.
            var arrayId = new Array();
            $('.check-item:checkbox:checked').each(function () {
                arrayId.push($(this).val());
            });
            if (arrayId.length == 0) {
                alert('Vui lòng chọn ít nhất một phần tử trước khi thực hiện thao tác!');
                return;
            }
            // kiểm tra người dùng đã chọn thao tác chưa.
            var action = $('#select-action').val();
            if (action == 2) {
                alert('Vui lòng chọn thao tác muốn thực hiện!');
                return;
            }
            // confirm lại người dùng.
            if (confirm('Bạn có chắc muốn thực hiện thao tác ')) {
                changeStatus(arrayId,action);
            }
        });
        $('.btn-edit').click(function () {
            var editId = $(this).attr('id').replace('btn-edit-', '');
            $.ajax({
                url: 'admin/products/get-by-id/' + editId,
                method: 'GET',
                success: function (response) {
                    $('input[name="name"]').val(response.data.name);
                },
                error: function () {
                    alert('Error');
                }
            });
        });
        function changeStatus(linhtinhlonxon,status1) {
            $.ajax({
                url: 'admin/products/change-status',
                method: 'POST',
                data: {
                    '_token': $('meta[name=csrf-token]').attr("content"),
                    'ids': linhtinhlonxon,
                    'status': status1
                },
                success: function () {
                    alert("Thao tác thành công, reload lại page!");
                    location.reload();
                },
                error: function () {
                    alert("Thao tác thất bại, vui lòng thử lại sau");
                }
            });
        }
    });
</script>
</body>
</html>
