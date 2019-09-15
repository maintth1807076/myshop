var BASE_URL = 'http://' + $(location).attr('host');
$(document).ready(function () {
    $('.close').click(function () {
        $('.modal').hide();
    });
    $('.btn-close').click(function () {
        $('.modal').hide();
    });
    $('#check-all').change(function () {
        $('.check-item').prop('checked', $(this).is(':checked'));
    });
    $(".check-item").click(function () {
        if ($(this).is(":checked")) {
            var isAllChecked = 0;

            $(".check-item").each(function () {
                if (!this.checked)
                    isAllChecked = 1;
            });

            if (isAllChecked == 0) {
                $("#check-all").prop("checked", true);
            }
        } else {
            $("#check-all").prop("checked", false);
        }
    });
    // js for slide
    $('.btn-slide-edit').click(function () {
        var editId = $(this).attr('id').replace('btn-edit-', '');
        var currentItem = $(this);
        $.ajax({
            url: '/admin/slides/' + editId + '/edit',
            method: 'GET',
            contentType: "application/json",
            dataType: 'json',
            data: {
                '_token': $('meta[name=csrf-token]').attr('content')
            },
            success: function (response) {
                $("#form-slide-edit-model img").attr('src', response.item.url);
                $("#form-slide-edit-model input[name=content]").val(response.item.content);
                $("#form-slide-edit-model form").attr('action', '/admin/slides/' + response.item.id);
                $('#form-slide-edit-model').show();
            },
            error: function () {
                swal('Thao tác thất bại!');
            }
        });
    });
    $('.btn-slide-delete').click(function () {
        var deleteId = $(this).attr('id').replace('btn-delete-', '');
        var currentItem = $(this);
        swal({
                title: "Bạn có chắc muốn xóa ảnh này?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Có',
                cancelButtonText: 'Không',
                closeOnConfirm: false,
            },
            function () {
                $.ajax({
                    url: '/admin/slides/' + deleteId,
                    method: 'DELETE',
                    data: {
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function () {
                        swal("Thao tác thành công!");
                        currentItem.closest("tr").remove();
                    },
                    error: function () {
                        swal('Thao tác thất bại!');
                    }
                });
            });
    });
    $('#btn-slide-apply-all').click(function () {
        var arrayId = new Array();
        var url = '/admin/slides/change-status';
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            swal('Vui lòng chọn ít nhất một ảnh trước khi thực hiện thao tác!');
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
    // end js for slide
    // js for category
    $('.btn-category-edit').click(function () {
        var editId = $(this).attr('id').replace('btn-edit-', '');
        var currentItem = $(this);
        $.ajax({
            url: '/admin/categories/' + editId + '/edit',
            method: 'GET',
            contentType: "application/json",
            dataType: 'json',
            data: {
                '_token': $('meta[name=csrf-token]').attr('content')
            },
            success: function (response) {
                $("#form-category-edit-model input[name=name]").val(response.item.name);
                $("#form-category-edit-model img").attr('src', response.item.thumbnail);
                $("#form-category-edit-model input[name=description]").val(response.item.description);
                $("#form-category-edit-model form").attr('action', '/admin/categories/' + response.item.id);
                $('#form-category-edit-model').show();
            },
            error: function () {
                swal('Thao tác thất bại!');
            }
        });
    });
    $('.btn-category-delete').click(function () {
        var deleteId = $(this).attr('id').replace('btn-delete-', '');
        var currentItem = $(this);
        swal({
                title: "Bạn có chắc muốn xóa danh mục này?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Có',
                cancelButtonText: 'Không',
                closeOnConfirm: false,
            },
            function () {
                $.ajax({
                    url: '/admin/categories/' + deleteId,
                    method: 'DELETE',
                    data: {
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function () {
                        swal('Thao tác thành công!');
                        currentItem.closest("tr").remove();
                    },
                    error: function () {
                        swal('Thao tác thất bại!');
                    }
                });
            });
    });
    $('#btn-category-apply-all').click(function () {
        var arrayId = new Array();
        var url = '/admin/categories/change-status';
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            swal('Vui lòng chọn ít nhất một danh mục trước khi thực hiện thao tác!');
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
    // end js for category
    //js for product
    $('.btn-product-edit').click(function () {
        var editId = $(this).attr('id').replace('btn-edit-', '');
        var currentItem = $(this);
        $.ajax({
            url: '/admin/products/' + editId + '/edit',
            method: 'GET',
            contentType: "application/json",
            dataType: 'json',
            data: {
                '_token': $('meta[name=csrf-token]').attr('content')
            },
            success: function (response) {
                $("#form-product-edit-model input[name=name]").val(response.item.name);
                // var images = [];
                // for (i = 0; i < response.list.length; i++) {
                //     // images.push(response.list[i].thumbnail);
                // }
                // $("#form-product-edit-model input[name=images[]]").val(response.list[i].thumbnail);
                $("#form-product-edit-model input[name=price]").val(response.item.price);
                // $("#form-product-edit-model img").attr('src', response);
                $("#form-product-edit-model input[name=description]").val(response.item.detail);
                $("#form-product-edit-model input[name=detail]").val(response.item.description);
                $("#form-product-edit-model input[name=category_id]").val(response.item.category_id);
                $("#form-product-edit-model form").attr('action', '/admin/products/' + response.item.id);
                $('#form-product-edit-model').show();
            },
            error: function () {
                swal('Error');
            }
        });
    });
    $('.btn-product-delete').click(function () {
        var deleteId = $(this).attr('id').replace('btn-delete-', '');
        var currentItem = $(this);
        swal({
                title: "Bạn có chắc muốn xóa sản phẩm này?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Có',
                cancelButtonText: 'Không',
                closeOnConfirm: false,
            },
            function () {
                $.ajax({
                    url: '/admin/products/' + deleteId,
                    method: 'DELETE',
                    data: {
                        '_token': $('meta[name=csrf-token]').attr('content')
                    },
                    success: function () {
                        swal('Thao tác thành công!');
                        currentItem.closest("tr").remove();
                    },
                    error: function () {
                        swal('Thao tác thất bại!');
                    }
                });
            });
    });
    $('#btn-product-apply-all').click(function () {
        var arrayId = new Array();
        var url = '/admin/products/change-status';
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            swal('Vui lòng chọn ít nhất một danh mục trước khi thực hiện thao tác!');
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
    $('#btn-search').click(function () {
        var page = $('input[name="currentPage"]').val();
        var categoryId = $('select[name="categoryId"]').val();
        var keyword = $('input[name="keyword"]').val();
        location.href = `${BASE_URL}/admin/products?page=${page}&category_id=${categoryId}&keyword=${keyword}`;
    });
    //end js for product
    //js for user manager
    $('.btn-user-delete').click(function () {
        if (confirm('Bạn có chắc muốn xóa sản phẩm này?')) {
            var deleteId = $(this).attr('id').replace('btn-delete-', '');
            var currentItem = $(this);
            $.ajax({
                url: '/admin/user/' + deleteId,
                method: 'DELETE',
                data: {
                    '_token': $('meta[name=csrf-token]').attr('content')
                },
                success: function () {
                    alert('Success');
                    currentItem.closest("tr").remove();
                },
                error: function () {
                    alert('Error');
                }
            });
        }

    });
    $('#btn-user-apply-all').click(function () {
        var arrayId = new Array();
        var url = '/admin/user/change-status';
        $('.check-item:checkbox:checked').each(function () {
            arrayId.push($(this).val());
        });
        if (arrayId.length == 0) {
            alert('Vui lòng chọn ít nhất một danh mục trước khi thực hiện thao tác!');
            return;
        }
        var action = $("select[name='action-id']").val();
        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }
        if (confirm('Bạn có chắc muốn thực hiện thao tác?')) {
            changeStatus(arrayId, url, action);
        }
    });
    //end js for user manager
    // js for validate-form-admin
    $("#admin-form").validate({

        rules: {
            name: {
              required: true,
            },
            content:{
                required: true,
            },
            images: {
              required: true,
            },
            password: {
                required: true,
            },
            email: {
                required: true,
                minlength: 5,
                email: true,
            },
            description: {
                required: true,
            },
            detail: {
              required: true,
            },
            price: {
                required: true,
                number: true,
            },
            category_id: {
                required: true,
                digits: true,
            },
        },
        messages: {
            name: {
                required: "Trường này không được bỏ trống",
            },
            content:{
                required: "Trường này không được bỏ trống",
            },
            images: {
                required: "Vui lòng chọn ảnh",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
            },
            email: {
                required: "Trường này không được bỏ trống",
                email: "Vui lòng nhập email hợp lệ",
            },
            description: {
                required: "Trường này không được bỏ trống",
            },
            detail: {
                required: "Trường này không được bỏ trống",
            },
            price: {
                required: "Trường này không được bỏ trống",
                number: "Vui lòng nhập số",
            },
            category_id: {
                required: "Trường này không được bỏ trống",
                digits: "Vui lòng nhập số nguyên dương",
            },
        },
    });
    //end js for validate-form-admin
});

function changeStatus(arrayId, url, status) {
    $.ajax({
        url: url,
        method: 'POST',
        data: {
            '_token': $('meta[name=csrf-token]').attr("content"),
            'ids': arrayId,
            'status': status
        },
        success: function () {
            swal("Thao tác thành công, reload lại page!");
            location.reload();
        },
        error: function () {
            swal("Thao tác thất bại, vui lòng thử lại sau");
        }
    });
}

// js for validate-client
// $(document).ready(function () {
//     $("#login-form").validate({
//
//         rules: {
//             email: {
//                 required: true,
//                 minlength: 5,
//                 email: true,
//             },
//             password: {
//                 required: true,
//             }
//         },
//         messages: {
//             email: {
//                 required: "Vui lòng nhập email",
//                 email: "Vui lòng nhập email hợp lệ",
//             },
//             password: {
//                 required: "Vui lòng nhập mật khẩu",
//             }
//         },
//     })
// });
