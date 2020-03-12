$('#loginForm').on('submit', function (e) {
    e.preventDefault();
    var login = $("#login").val();
    var password = $("#password").val();
    $.ajax({
        url: '/account/checkLogin',
        type: 'post',
        data: {
            login: login,
            password: password
        },
        success: function (res) {
            if (res) {
                location.href = document.referrer;
            } else {
                $('#loginForm').after(`<div class="card-panel red lighten-2">Ошибка! Пользователь с такими данными не найден</div>`);
            }
        }
    });

})

$('.addToCart').on('click', function(e){
    e.preventDefault();
    var product_id = $(this).data('id');
    $.ajax({
        url: '/cart/add',
        type: 'get',
        data: {
            product_id: product_id,
        },
        success: function (res){
            if (res) {
                $('.productsCount').text(res);
            }
        }
    })
})