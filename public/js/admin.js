$( document ).ready(function() {
    $('.close').click(function () {
        $('#form-edit-model').hide();
    });
    $('#check-all').change(function(){
        $('.check-item').prop('checked', $(this).is(':checked'));
    });
    $(".check-item").click(function () {
        if ($(this).is(":checked")) {
            var isAllChecked = 0;

            $(".check-item").each(function() {
                if (!this.checked)
                    isAllChecked = 1;
            });

            if (isAllChecked == 0) {
                $("#check-all").prop("checked", true);
            }
        }
        else {
            $("#check-all").prop("checked", false);
        }
    });
    // js for category
    $('.btn-edit').click(function () {
        var editId = $(this).attr('id').replace('btn-edit-', '');
        var currentItem = $(this);
        $.ajax({
            url:'/admin/categories/' + editId + '/edit',
            method: 'GET',
            contentType: "application/json",
            dataType: 'json',
            data:{
                '_token': $('meta[name=csrf-token]').attr('content')
            },
            success: function (response) {
                $("#form-edit-model input[name=name]").val(response.item.name);
                $("#form-edit-model img").attr('src','http://res.cloudinary.com/kuramakyubi/image/upload/c_fit,h_300,w_300/' + response.item.thumbnail);
                $("#form-edit-model input[name=description]").val(response.item.description);
                $("#form-edit-model form").attr('action', '/admin/categories/' + response.item.id);
                $('#form-edit-model').show();
            },
            error: function () {
                alert('Error');
            }
        });
    });
    $('.btn-delete').click(function () {
        if(confirm('Are you sure wanna delete this game?')){
            var deleteId = $(this).attr('id').replace('btn-delete-', '');
            var currentItem = $(this);
            $.ajax({
                url:'/admin/categories/' + deleteId,
                method: 'DELETE',
                data:{
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
    $('#btn-apply-all').click(function () {
        var arrayId = new Array();
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
        if (confirm('Bạn có chắc muốn thực hiện thao tác ')) {
            changeStatus(arrayId,'/admin/categories/change-status', action);
        }
    });
    // end js for category
    //js for product
    $('.btn-delete').click(function () {
        if(confirm('Are you sure wanna delete this game?')){
            var deleteId = $(this).attr('id').replace('btn-delete-', '');
            var currentItem = $(this);
            $.ajax({
                url:'/admin/products/' + deleteId,
                method: 'DELETE',
                data:{
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
    $('#btn-apply-all-product').click(function () {
        var arrayId = new Array();
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
        if (confirm('Bạn có chắc muốn thực hiện thao tác ')) {
            changeStatus(arrayId,'/admin/products/change-status', action);
        }
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
                alert("Thao tác thành công, reload lại page!");
                location.reload();
            },
            error: function () {
                alert("Thao tác thất bại, vui lòng thử lại sau");
            }
        });
    }
    //end js for product
});
