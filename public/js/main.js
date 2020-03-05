$(document).on('click','.send-price',e=>{
    let token = $('#getPrice').find('#token');
    let id = $('#getPrice').find('#product-id');
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
                'id':id.val(),
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
$('.partners-carousel').slick({
    centerPadding: '10px',
    slidesToShow: 4,
    dots: false,
    arrows:true,
    autoplay:true,
    autoplaySpeed:3000,
    infinite:true,
});
$('.main-carousel').slick({
    centerPadding: '10px',
    slidesToShow: 1,
    dots: true,
    arrows:true,
    autoplay:true,
    autoplaySpeed:3000,
    infinite:true,
});

$('.single-item').slick({
    centerPadding: '10px',
    slidesToShow: 4,
    dots: false,
    arrows:false,
    autoplay:true,
    infinite:true,
    responsive: [
        {
            breakpoint: 1400,
            settings: {
                arrows: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 1200,
            settings: {
                arrows: true,
                centerPadding: '40px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});


$('.news-carousel').slick({
    centerPadding: '10px',
    slidesToShow: 3,
    centerMode: false,
    dots: true,
    arrows:true,
    autoplay:true,
    infinite:true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                arrows: true,
                centerPadding: '40px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

$('.prevBtn-news').on('click',function (e) {
    $('.news-carousel').slick('slickPrev');
});
$('.nextBtn-news').on('click',function (e) {
    $('.news-carousel').slick('slickNext');
});
$('.prevBtn-main').on('click',function (e) {
    $('.main-carousel').slick('slickPrev');
});
$('.nextBtn-main').on('click',function (e) {
    $('.main-carousel').slick('slickNext');
});
$('.prevBtn-single').on('click',function (e) {
    $('.single-item').slick('slickPrev');
});
$('.nextBtn-single').on('click',function (e) {
    $('.single-item').slick('slickNext');
});
$(document).ready(function () {
   let buttons = $('.prevNextButton-main');
   $('.main-carousel').find('.slick-dots').before(buttons);
});
$(document).ready(function () {
    let width = $('body').width();
    let btn = $('.allAssortment');
    let btn2 = $('.allAssortment2');
    let maxHeight = 0;
    let h2_max = 0;
    $(".main-carousel-h2").each(function(){
        if ($(this).height() > maxHeight) { maxHeight = $(this).height(); h2_max = $(this);}
    });
    let h2 = $('.slick-active').find('.main-carousel-h2');
    h2_max = h2_max.offset();
    h2 = h2.offset();
    if(width>1000){
        btn2.addClass('d-none');
        btn.removeClass('d-none');
        btn.css('left',parseInt(h2.left)-50);
        btn.css('top',parseInt(h2_max.top)+70);
    }else{
        btn.addClass('d-none');
        btn2.removeClass('d-none');
    }
});
$(window).resize(function() {
    let width = $('body').width();
    let btn = $('.allAssortment');
    let btn2 = $('.allAssortment2');
    let maxHeight = 0;
    let h2_max = 0;
    $(".main-carousel-h2").each(function(){
        if ($(this).height() > maxHeight) { maxHeight = $(this).height(); h2_max = $(this);}
    });
    let h2 = $('.slick-active').find('.main-carousel-h2');
    h2_max = h2_max.offset();
    h2 = h2.offset();
    if(width>1000){
        btn2.addClass('d-none');
        btn.removeClass('d-none');
        btn.css('left',parseInt(h2.left)-50);
        btn.css('top',parseInt(h2_max.top)+70);
    }else{
        btn.addClass('d-none');
        btn2.removeClass('d-none');
    }
});
$(document).ready(function() {
    $('.menu-navigation li.active').removeClass('active');
    $('.menu-navigation li a[href="' + location.pathname + '"]').closest('li').addClass('active');
});


function openNav() {
    document.getElementById("mySidenav").style.right = "0px";
};

function closeNav() {
    document.getElementById("mySidenav").style.right = "-300px";
};
$('.partners-carousel').slick("refresh");
