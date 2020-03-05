<div class="pr-0 d-lg-block d-none" style="margin-top:10%;" id="contacts">
    <div class="col-15 text-center px-5 d-flex">
        <h2 class="mf-bold">Контакты</h2>
    </div>
    <div class="d-flex mt-5 pt-5 pb-3" style="background: #F7F7F7;">
        <div class="col-5 d-flex">
            <div class="col-4">
                <img src="{!! asset('storage/images/contacts.png') !!}" alt="">
            </div>
            <div class="col-8">
                <p>
                    {!! $settings->contacts !!}
                </p>
                <a href="{!! $settings->two_gis !!}" style="color:#F3AC4D;text-decoration: underline;" target="_blank">Посмотреть на карте</a>
            </div>
        </div>
        <div class="col-3">

            <p class="mf-medium footer-headline">Отдел стегания:</p>
            <p>{!! $settings->first_department_phone !!}</p>

            <p class="mf-medium footer-headline">Отдел производства посуды и масла:</p>
            <p>{!! $settings->second_department_phone !!}</p>

        </div>

        <div class="col-4">
            <p class="mf-medium footer-headline">Отдел производства посуды и масла:</p>
            <div class="d-flex">
                <div class="col-4">
                    <a href="{!! $settings->whatsapp !!}">
                        <img src="{!! asset('storage/images/'.$settings->whatsapp_img) !!}" alt="">
                        <p class="mf-medium" style="color: #222;">Whatsapp</p>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{!! $settings->facebook !!}">
                        <img src="{!! asset('storage/images/'.$settings->facebook_img) !!}" alt="">
                        <p class="mf-medium" style="color: #222;">Facebook</p>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{!! $settings->instagram !!}">
                        <img src="{!! asset('storage/images/'.$settings->instagram_img) !!}" alt="">
                        <p class="mf-medium" style="color: #222;">Instagram</p>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light px-5"
     style="background: #565656;box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.07);">
    <div class="pl-0 w-100" id="navbarSupportedContent2">
        <div class="d-lg-flex d-md-block justify-content-center w-100">
            <div class="col-lg-3 col-md-12 text-center">
                <a href="/" >
                <img src="{!! asset('storage/images/'.$settings->logo) !!}" alt="">
                <p  class="navbar-brand pl-2 mf-medium" style="color:#BCBCBC;">{!! $settings->name !!}</p>
                </a>
            </div>
            <ul class="col-lg-6 d-flex align-items-center menu-navigation" style="flex-wrap: wrap;list-style:none;">
                <li class="col-lg-2 col-md-6 text-center nav-item active px-2">
                    <a class="mf-light header-link" href="/">Главная</a>
                </li>
                <li class="col-lg-2 col-md-6 text-center nav-item px-2">
                    <a class="mf-light header-link" href="/catalog">Каталог</a>
                </li>
                <li class="col-lg-2 col-md-6 text-center nav-item px-2 menu">
                    <a class="mf-light header-link" href="#partners">Партнеры</a>
                </li>
                <li class="col-lg-2 col-md-6 text-center nav-item px-2 menu">
                    <a class="mf-light header-link" href="#news">Новости</a>
                </li>
                <li class="col-lg-2 col-md-6 text-center nav-item px-2 menu">
                    <a class="mf-light header-link" href="#contacts">Контакты</a>
                </li>
                <li class="col-lg-2 col-md-6 text-center nav-item px-2">
                    <a class="mf-light header-link" href="/about-us">О нас</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
