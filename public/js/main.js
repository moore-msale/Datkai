$(document).on('click','.send-price',e=>{
    let token = $('#getPrice').find('#token');
    let name = $('#getPrice').find('#client-name');
    let phone = $('#getPrice').find('#client-phone');
    let email = $('#getPrice').find('#client-email');
    if(name.val() ==''){
        Swal.fire({
            position: 'center-center',
            icon: 'info',
            title: 'Введите имя!',
            showConfirmButton: false,
            timer:1500
        });
    }else if(phone.val() ==''){
        Swal.fire({
            position: 'center-center',
            icon: 'info',
            title: 'Введите номер телефона!',
            showConfirmButton: false,
            timer:1500
        });
    }else if(email.val() && !(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.val()))){
        Swal.fire({
            position: 'center-center',
            icon: 'info',
            title: 'Введите правильный Email!',
            showConfirmButton: false,
            timer:1500
        });
    }else{
        $.ajax({
            url:'/sendPrice',
            method:'POST',
            data:{
                '_token':token.val(),
                'name':name.val(),
                'phone':phone.val(),
                'email':email.val()
            },
            success:data=>{
                $('#getPrice').modal('hide');
                console.log(data);
                Swal.fire({
                    position: 'center-center',
                    icon: 'success',
                    title: "Успешно отправлено!",
                    showConfirmButton:false,
                    timer:1500
                });
                name.val('');
                phone.val('');
                email.val('');
            },
            error:data=>{
                $('#getPrice').modal('hide');
                Swal.fire({
                    position: 'center-center',
                    icon: 'info',
                    title: "Не удалось отправить письмо!",
                    showConfirmButton:false,
                    timer:1500
                });
            }
        })
    }

});
