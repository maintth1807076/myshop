var BASE_URL = 'http://' + $(location).attr('host');
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
    $(document).on('click', '#btn-more', function () {
        var id = $(this).data('id');
        $("#btn-more").html("Loading....");
        $.ajax({
            url: '/home',
            method: "POST",
            data: {'id': id, '_token': $('meta[name=csrf-token]').attr('content')},
            dataType: "text",
            success: function (data) {
                if (data != '') {
                    $('#remove-row').remove();
                    $('#load-more-new-product').append(data);
                } else {
                    $('#btn-more').html("No Data");
                }
            }
        });
    });
    $(document).on('click', '.add-cart', function () {
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
        swal('Add cart item success!');
    });

    var shoppingCartJson = localStorage.getItem('shopping-cart');
    if (shoppingCartJson == null) {
        return;
    }
    var shoppingCart = JSON.parse(shoppingCartJson);
    var htmlContent = '';
    var htmlContent1 = '';
    var totalPrice = 0;
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
                <td data-price="${cartItem.price}" style="width: 15%;border-right: solid 2px #EEF0F2">${price} VNĐ</td>
                <td id="${cartItem.id}" class="quantity" style="width: 13%;border-right: solid 2px #EEF0F2">
                      <button class="minus-btn" type="button" name="button">
                       -
                      </button>
                      <input style="width: 50%" type="text" class="center-block" name="quantity" value="${cartItem.quantity}">
                      <button class="plus-btn" type="button" name="button">
                        +
                      </button>
                </td>
                <td data-total="${cartItem.price * cartItem.quantity}" style="width: 30%">${total} VNĐ</td>
                <td>
                <button class="btn-cart-item-delete" onclick="remove(${cartItem.id})">x</button>
                </td>
            </tr>`;

        totalPrice += cartItem.price * cartItem.quantity;


        htmlContent1 += `
<div class="mini-cart" style="height: 110px; margin-bottom:2%;">
     <div class="row">
        <div class="col-sm-3">
                <img width="80%;" class="img-thumbnail rounded game-avatar" src="${cartItem.thumbnail}" alt=${cartItem.name}>
        </div>
        <div class="col-sm-9" >
           <div class="row">
            <div class="col-sm-12 "><b>${cartItem.name}</b></div>
            <div class="col-sm-12">
            <div class="row">
            <span class="col-sm-6"><pre>Số lượng:<b> ${cartItem.quantity}</b></pre></span>
             <span class="col-sm-6"><pre>Giá: <b>${price}</b> VNĐ.</pre></span>
             </div>
             </div>
             </div>
           </div>
        </div>
     </div>
       
</div>
       `;
    }
    htmlContent1 = htmlContent1 + `<div><div><div></div><div></div> 
<div class="col-sm-12 text-right " style="margin-top: 3%;">
          <h4><pre>Tổng:  <b>${totalPrice} VND</b></pre> </h4>
            </div>
            <div class="col-sm-12" style="margin-bottom: 5%;">
            <div class="row">
            <span  class="col-sm-6 "> <a href="/cart"  class=" btn btn-outline-dark">Xem giỏ hàng</a></span>
        <span class="col-sm-6 "> <a class="btn btn-danger" href="#">Thanh toán</a></span>
        </div></div>
        </div></div>

  `;
    $('#cart-body1').html(htmlContent1);
    var totalPriceFormat = format_money(totalPrice);
    htmlContent = htmlContent + `<tr><td></td><td></td><td></td><td></td><td></td><td></td ><td id ="total-price">${totalPriceFormat} VNĐ</td></tr>`;
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
        $unit = $(this).closest('tr').find('td[data-price]').attr('data-price');
        $(this).closest('tr').find('td[data-total]').text(format_money($unit * value) + ' VNĐ');
        changeQuantity();
        calculateTotalPrice();
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
        $unit = $(this).closest('tr').find('td[data-price]').attr('data-price');
        $(this).closest('tr').find('td[data-total]').text(format_money($unit * value) + ' VNĐ');
        changeQuantity();
        calculateTotalPrice();
    });
    $('#btn-pay').click(function () {
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
        localStorage.clear();
        location.href = `${BASE_URL}/history`;
    });
    $('#btn-search-home').click(function () {
        var page = $('input[name="currentPage"]').val();
        var categoryId = $('input[name="categoryId"]').val();
        var keyword = $('input[name="keyword"]').val();
        location.href = `${BASE_URL}/products?page=${page}&category_id=${categoryId}&keyword=${keyword}`;
    });
    $('#search_icon').click(function () {
        var keyword = $('input[name="keyword"]').val();
        location.href = `${BASE_URL}/products?keyword=${keyword}`;
    });

    var shoppingCartJson = localStorage.getItem('shopping-cart');
    if (shoppingCartJson == null) {
        return;
    }
    var shoppingCart = JSON.parse(shoppingCartJson);
    var htmlContent = '';
    var totalPrice = 0;
    for (var gameId in shoppingCart) {
        var cartItem = shoppingCart[gameId];
        var price = format_money(cartItem.price);
        var total = format_money(cartItem.price * cartItem.quantity);
        htmlContent += `<tr>
                <td style="width: 25%;border-right: solid 2px #EEF0F2"><img width="50px" class="img-thumbnail rounded game-avatar" src="${cartItem.thumbnail}" alt=${cartItem.name}>
                </td>
                <td style="width: 30%;border-right: solid 2px #EEF0F2">${cartItem.name}</td>
                <td data-price="${cartItem.price}" style="width: 15%;border-right: solid 2px #EEF0F2">${price} VNÐ</td>             
                <td data-total="${cartItem.price * cartItem.quantity}" style="width: 30%">${total}</td>              
            </tr>`;
        totalPrice += cartItem.price * cartItem.quantity;
    }
    htmlContent = htmlContent + `<tr><td></td><td></td><td></td><td></td><td></td><td></td>T?ng<td>${totalPrice} VND</td></tr>`;
    $('#cart-body1').html(htmlContent);
    $('.minus-btn').click(function () {
        var $input = $(this).closest('td').find('input');
        var value = parseInt($input.val());

        if (value >= 1) {
            value = value - 1;
        } else {
            value = 0;
        }
        $input.val(value);
        $unit = $(this).closest('tr').find('td[data-price]').attr('data-price');
        $(this).closest('tr').find('td[data-total]').text($unit * value);
        $(this).closest('tr').find('td[data-total]').attr('data-total', $unit * value);
        var list = $('#cart-body1').find('td[data-total]');
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
        $unit = $(this).closest('tr').find('td[data-price]').attr('data-price');
        $(this).closest('tr').find('td[data-total]').text($unit * value);
    });
    $('.btn-cart-item-delete').click(function () {
        $(this).closest('tr').remove();
    });
    $('#btn-check').click(function () {
        shoppingCart = JSON.parse(localStorage.getItem('shopping-cart'));
        for (var key in shoppingCart) {
            var $input = $('td[id="' + key + '"]').find('input');
            shoppingCart[key].quantity = $input.val();
            if (shoppingCart[key].quantity == 0) {
                delete (shoppingCart[key]);
                $input.closest("tr").remove();
            }
        }
        localStorage.setItem('shopping-cart', JSON.stringify(shoppingCart));
        location.reload();
    });
    $('#btn-buy').click(function () {
        console.log(JSON.parse(localStorage.getItem('shopping-cart')))
            $(this).closest('tr').find('td[data-total]').text(format_money($unit * value) + ' VNÐ');
        changeQuantity();
        calculateTotalPrice();
    });
    $('#btn-pay').click(function () {
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
        localStorage.clear();
        location.href = `${BASE_URL}/history`;
    });
    $('#btn-search-home').click(function () {
        var page = $('input[name="currentPage"]').val();
        var categoryId = $('input[name="categoryId"]').val();
        var keyword = $('input[name="keyword"]').val();
        location.href = `${BASE_URL}/products?page=${page}&category_id=${categoryId}&keyword=${keyword}`;
    });
    $('#search_icon').click(function () {
        var keyword = $('input[name="keyword"]').val();
        location.href = `${BASE_URL}/products?keyword=${keyword}`;
    });
});

function format_money(money) {
    money = money.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
    return money;
}

function remove(id) {
    $(this).closest('tr').remove();
    shoppingCart = JSON.parse(localStorage.getItem('shopping-cart'));
    for (var key in shoppingCart) {
        if (key == id) {
            delete (shoppingCart[id]);
        }
    }
    localStorage.setItem('shopping-cart', JSON.stringify(shoppingCart));
}

function changeQuantity() {
    shoppingCart = JSON.parse(localStorage.getItem('shopping-cart'));
    for (var key in shoppingCart) {
        var $input = $('td[id="' + key + '"]').find('input');
        shoppingCart[key].quantity = $input.val();
        if (shoppingCart[key].quantity == 0) {
            delete (shoppingCart[key]);
            $input.closest("tr").remove();
        }
    }
    localStorage.setItem('shopping-cart', JSON.stringify(shoppingCart));
}

function calculateTotalPrice() {
    shoppingCart = JSON.parse(localStorage.getItem('shopping-cart'));
    var totalPrice = 0;
    for (var key in shoppingCart) {
        totalPrice += shoppingCart[key].price * shoppingCart[key].quantity;
    }
    $('#total-price').text(format_money(totalPrice) + ' VNĐ');
}