<nav id="header-fixed" style="z-index: 9999999" class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-none d-lg-block ">
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <div class="col-3">
                <a  href="/" style="text-decoration: none;">
                    <img src="{!! asset('storage/images/'.$settings->logo) !!}" alt="">
                    <p class="navbar-brand pl-2 mf-medium" style="color: #565656;">{!! $settings->name !!}</p>
                </a>
            </div>
            <div class="col-2">
                <p class="mf-light mb-1">Адрес компании:</p>
                <p class="mf-light mb-1">{!!  $settings->address !!}</p>
            </div>
            <div class="col-2">
                <p class="mf-light mb-1">Отдел стегания:</p>
                <p class="mf-light mb-1">
                    {!! $settings->first_department_phone !!}
                </p>
            </div>
            <div class="col-2">
                <p class="mf-light mb-1">Отдел производства посуды и масла:</p>
                <p class="mf-light mb-1">
                    {!! $settings->second_department_phone !!}
                </p>
            </div>
            <div class="col-2">
                <button class="main-p-btn getPrice" data-toggle="modal" data-target="#getPrice" data-id="" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Заказать обратный звонок</button>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light px-5 " style="background: #565656;box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.07);">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pl-5" id="navbarSupportedContent2">
            <div class="d-flex justify-content-center w-100">
                <ul class="navbar-nav m-auto menu-navigation">
                    <li class="nav-item active px-2 ml-lg-5 ml-0">
                        <a class="nav-link mf-light header-link" href="/">Главная </a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link mf-light header-link" href="/catalog">Каталог</a>
                    </li>
                    <li class="nav-item px-2 menu">
                        <a class="nav-link mf-light header-link" href="#partners">Партнеры</a>
                    </li>
                    <li class="nav-item px-2 menu">
                        <a class="nav-link mf-light header-link" href="#news">Новости</a>
                    </li>
                    <li class="nav-item px-2 menu">
                        <a class="nav-link mf-light header-link" href="#contacts">Контакты</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link mf-light header-link" href="/about-us">О нас</a>
                    </li>

                </ul>
                <ul class=" navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link mf-light header-link" href="{!! $settings->facebook !!}">
                            <img src="{!! asset('storage/images/facebook-gold.svg') !!}" alt="" style="height: 17px;">
                            Facebook
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mf-light header-link" href="{!! $settings->instagram !!}">
                            <img src="{!! asset('storage/images/Instagram-gold.svg') !!}" alt="" style="height: 17px;">
                            Instagram
                        </a>
                    </li>
                    <li class="nav-item px-2 d-block d-lg-none mt-2">
                        <button class="main-p-btn getPrice" data-toggle="modal" data-target="#getPrice" data-id="" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;color: #fff;">Обратный звонок</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</nav>
