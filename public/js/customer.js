$(document).ready(function () {
    // js for Validate-form-client
    $("#login-form").validate({

        rules: {
            email: {
                required: true,
                minlength: 5,
                email: true,
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                required: "Vui lòng nhập email",
                email: "Vui lòng nhập email hợp lệ",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
            }
        },
    });
    $("#register-form").validate({

        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
                minlength: 8,
            },
            password_confirmation: {
                required: true,
                equalTo: "#password",
            }
        },
        messages: {
            name: {
                required: "Vui lòng nhập họ tên",
            },
            email: {
                required: "Vui lòng nhập email",
                email: "Vui lòng nhập email hợp lệ",
            },
            password: {
                required: "Vui lòng nhập mật khẩu",
                minlength: "Độ dài mật khẩu phải lớn hơn 8",
            },
            password_confirmation: {
                required: "Vui lòng nhập mật khẩu",
                equalTo: "Mật khẩu phải trùng nhau",
            }
        },
    });
    //end js for Validate-form-client
    $(document).on('click','#btn-more',function(){
        var id = $(this).data('id');
        $("#btn-more").html("Loading....");
        $.ajax({
            url : '/home',
            method : "POST",
            data : {'id':id, '_token': $('meta[name=csrf-token]').attr('content')},
            dataType : "text",
            success : function (data)
            {
                if(data != '')
                {
                    $('#remove-row').remove();
                    $('#load-more-new-product').append(data);
                }
                else
                {
                    $('#btn-more').html("No Data");
                }
            }
        });
    });
    $(document).on('click','.add-cart',function(){
        var shoppingCart = {};
        if (localStorage.getItem('shopping-cart') !== null) {
            shoppingCart = JSON.parse(localStorage.getItem('shopping-cart'));
        }
        var id = $(this).attr('data-id');
        var price = $(this).attr('data-price');
        var name = $(this).attr('data-name');
        var thumbnail = $(this).attr('data-thumbnail');
        var cartItem = {
            'id': id,
            'name': name,
            'price': price,
            'thumbnail': thumbnail,
            'quantity': 1
        };
        if (shoppingCart[id] != null) {
            var existCartItem = shoppingCart[id];
            cartItem = existCartItem;
            cartItem.quantity++;
        }
        shoppingCart[id] = cartItem;
        localStorage.setItem('shopping-cart', JSON.stringify(shoppingCart));
        alert('Add cart item success!');
    });

    var shoppingCartJson = localStorage.getItem('shopping-cart');
    if (shoppingCartJson == null) {
        return;
    }
    var shoppingCart = JSON.parse(shoppingCartJson);
    var htmlContent = '';
    var totalPrice=0;
    for (var gameId in shoppingCart) {
        var cartItem = shoppingCart[gameId];
        var price = format_money(cartItem.price);
        var total = format_money(cartItem.price * cartItem.quantity);
        htmlContent += `<tr>
                <th scope="row">
                    <input type="checkbox" class="check-item" value="">
                </th>
                <td style="width: 2%;border-right: solid 2px #EEF0F2">${cartItem.id}</td>
                <td style="width: 25%;border-right: solid 2px #EEF0F2"><img width="50px" class="img-thumbnail rounded game-avatar" src="${cartItem.thumbnail}" alt=${cartItem.name}>
                </td>
                <td style="width: 30%;border-right: solid 2px #EEF0F2">${cartItem.name}</td>
                <td style="width: 15%;border-right: solid 2px #EEF0F2">${price} VNĐ</td>
                <td id="${cartItem.id}" class="quantity" style="width: 13%;border-right: solid 2px #EEF0F2">
                    <button class="plus-btn" type="button" name="button">
                        +
                      </button>
                      <input style="width: 50%" type="text" class="center-block" name="quantity" value="${cartItem.quantity}">
                      <button class="minus-btn" type="button" name="button">
                       -
                      </button>
                </td>
                <td style="width: 30%">${total}</td>
            </tr>`;
        totalPrice += cartItem.price * cartItem.quantity;
    }
    htmlContent = htmlContent + `<tr><td></td><td></td><td></td><td></td><td></td><td></td>Tổng<td>${totalPrice} VND</td></tr>`;
    $('#cart-body').html(htmlContent);
    $('.minus-btn').click(function () {
        var $input = $(this).closest('td').find('input');
        var value = parseInt($input.val());

        if (value >= 1) {
            value = value - 1;
        } else {
            value = 0;
        }

        $input.val(value);
    });
    $('.plus-btn').click(function () {
        var $input = $(this).closest('td').find('input');
        var value = parseInt($input.val());

        if (value < 20) {
            value = value + 1;
        } else {
            value = 20;
        }

        $input.val(value);
    });
    $('#btn-check').click(function () {
        shoppingCart = JSON.parse(localStorage.getItem('shopping-cart'));
        for (var key in shoppingCart) {
            var $input = $('td[id="' + key + '"]').find('input');
            shoppingCart[key].quantity = $input.val();
            if(shoppingCart[key].quantity == 0){
                delete (shoppingCart[key]);
                $input.closest("tr").remove();
            }
        }
        localStorage.setItem('shopping-cart', JSON.stringify(shoppingCart));
        console.log(JSON.parse(localStorage.getItem('shopping-cart')))
    });
    $('#btn-buy').click(function () {
        console.log(JSON.parse(localStorage.getItem('shopping-cart')))
        $.ajax({
            url: '/order-success',
            method: 'POST',
            data: {
                '_token': $('meta[name=csrf-token]').attr('content'),
                'cart': JSON.parse(localStorage.getItem('shopping-cart'))
            },
            success: function (response) {
                alert('Success');
                console.log(response)
            },
            error: function () {
                alert('Error');
            }
        });
    });
});

function format_money(money) {
    money = money.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
    return money;
}
