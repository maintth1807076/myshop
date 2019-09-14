
$(document).ready(function () {
    $('.btn-delete1').click(function () {
        if (confirm('muốn xóa chứ')){
            var deleteId = $(this).attr('id').replace('btn-delete-', '');
            var item =$(this);
            $.ajax({
                url:'/products/' +deleteId,
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
        if (action == 0) {
            alert('Vui lòng chọn thao tác muốn thực hiện!');
            return;
        }

        // confirm lại người dùng.
        if (confirm('Bạn có chắc muốn thực hiện thao tác ')) {
            changeStatus(arrayId, action);
        }
    });

    $('.btn-edit').click(function () {
        var editId = $(this).attr('id').replace('btn-edit-', '');
        $.ajax({
            url: '/products/get-by-id/' + editId,
            method: 'GET',
            success: function (response) {
                $('input[name="name"]').val(response.data.name);
                $('#exampleModal').modal('show');
            },
            error: function () {
                alert('Error');
            }
        });
    });
});

function changeStatus(linhtinhlonxon,status1) {
    $.ajax({
        url: '/game/change-status',
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
// $('#check-all').click(function () {
//     alert(1);
//     return;
// })
