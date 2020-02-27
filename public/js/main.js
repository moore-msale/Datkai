$(document).on('click','.send-price',e=>{
    let token = $('#getPrice').find('#token').val();
    let name = $('#getPrice').find('.name').val();
    let phone = $('#getPrice').find('.phone').val();
    let email = $('#getPrice').find('.email').val();
    $.ajax({
        url:'/sendPrice',
        method:'POST',
        data:{
            '_token':token,
            'name':name,
            'phone':phone,
            'email':email
        },
        success:data=>{
            $('#getPrice').modal('hide');
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "Успешно отправлено!",
                showConfirmButton:false,
                timer:1500
            });
        },
        error:data=>{
            $('#getPrice').modal('hide');
            Swal.fire({
                position: 'top-end',
                icon: 'info',
                title: "Не удалось отправить писбмо!",
                showConfirmButton:false,
                timer:1500
            });
        }
    })
});
