@extends('layouts.layout')

@push('styles')
    <style>
        @media only screen and (min-width: 1000px) {
        }
        .work-year{
            background: #F9BB68;
            box-shadow: -10px 14px 25px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
        }
        .work-year-inner{
            border: 1px solid #FFFFFF;
            box-shadow: -10px 14px 25px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
        }
        .main-about-us{
            background-image: url("{{asset('images/Group 69.png')}}");
            background-position: right center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .clients-is{
            background: #F9F6F2;
            box-shadow: -10px 14px 25px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
        }
        .clients-is p{
            font-size: 20px;
            line-height: 140%;
            color: #000000;
        }
        .section-3-about-us p{
            font-size: 18px;
            line-height: 140%;
            color: #222222;
        }
        .section-4-about-us{
            background: #F9F6F2;
            box-shadow: 10px 15px 25px rgba(0, 0, 0, 0.05);
        }
    </style>
@endpush
@section('content')
    <div>
    <div class='main-about-us p-md-5 p-0' style="max-height:713px;">
        <div class="d-flex align-items-between p-md-5 p-0">
            <div class="col-lg-8 col-12">
                <h2 class="mf-bold" style="font-size: 55px;line-height: 67px;color: #222222;">Удобно. Надежно. Безопасно.</h2>
                <p class="mf-light mt-5 mb-0" style="font-size: 20px;line-height: 140%;color: #222222;">
                    Компания «Даткай KG» была основана в 2010 году, и является одной из передовых компаний в Кыргызстане
                </p>
                <div class="row mt-md-5 mt-0">
                    <div class="col-md-5 col-sm-12 d-flex align-items-center py-2">
                        <div class="work-year p-2">
                            <div class="work-year-inner px-4 py-2">
                                <p class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #fff;">работаем с</p>
                                <h3 class="mf-light"  style="font-size: 55px;color: #fff;">2010</h3>
                                <p class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #fff;">года </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 d-flex align-items-center">
                        <p class="mf-light" style="font-size: 20px;line-height: 140%;color: #222222;">
                            Динамично развивающаяся компания, ежегодно расширяющая производство и ассортимент выпускаемой продукции
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="d-none d-lg-block" style="transform: translate(83%,100%);z-index:10;"><img src="{{asset('images/rightArt.png')}}" alt=""></div>
            </div>
        </div>
    </div>
        <div class="section-2-about-us p-5">
            <div class="col-15 text-left">
                <h2 class="mf-bold">Нашими клиентами являются:</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 text-center p-4">
                    <div class="clients-is p-2">
                        <img class="my-5" src="{{asset('images/bakery 1.png')}}" alt="">
                        <p class="mf-light text-center mb-5">Гипермаркеты, кондитерские дома, сети фаст-фудов, HORECA</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center p-4">
                    <div class="clients-is p-2">
                        <img class="my-5" src="{{asset('images/embroidery 1.png')}}" alt="">
                        <p class="mf-light text-center mb-5">Швейные фабрики, фабрики по производству мягкой мебели и игрушек</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center p-4">
                    <div class="clients-is p-2">
                        <img class="my-5" src="{{asset('images/sewing-machine 1.png')}}" alt="">
                        <p class="mf-light text-center mb-5">Ателье, дома моды, швейные цеха, шоурумы, производители одеял</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3-about-us p-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-12 d-flex align-items-between">
                    <div>
                        <p class="mf-medium">
                            Производственная площадка ОсОО «Даткай KG» находится в городе Бишкек, производственно-складские площади занимают
                        </p>
                        <span class="mf-light mb-0 mt-2" style="font-size: 20px;line-height: 140%;color: #222;">более</span>
                        <h3 class="mf-medium"  style="font-size: 60px;color: #F9BB68;">5 000</h3>
                        <span class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #222;">квадратных метров.</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 d-flex align-items-between py-5" style="background: #FFEAA7;">
                    <div class="">
                        <p class="mf-medium">
                            Численность сотрудников компании составляет
                        </p>
                        <span class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #222;">около</span>
                        <h3 class="mf-medium"  style="font-size: 60px;color: #222;">100</h3>
                        <span class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #222;">человек</span>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 d-flex align-items-between pl-2">
                    <div>
                        <p class="mf-medium pl-5">
                            Компания насчитывает
                        </p>
                        <div class="company-count">
                            <div class="d-flex align-items-center">
                                <div class="col-2 text-right"><img src="{{asset('images/Vector.png')}}" alt=""></div>
                                <div class="col-10">
                                    <span class="mf-light">собственную линию по производству нетканых материалов</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <div class="col-2 text-right"><img src="{{asset('images/Vector.png')}}" alt=""></div>
                                <div class="col-10">
                                    <span class="mf-light">термоформовочные машины</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <div class="col-2 text-right"><img src="{{asset('images/Vector.png')}}" alt=""></div>
                                <div class="col-10">
                                    <span class="mf-light">а также насчитывает более 5 стегальных машин</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <div class="col-2 text-right"><img src="{{asset('images/Vector.png')}}" alt=""></div>
                                <div class="col-10">
                                    <span class="mf-light">собственную экструзионную линию</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-4-about-us row p-3">
            <div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
                <div class="datkai-valuable">
                    <h2 class="mf-medium pl-4">
                        Ценности Даткай KG
                    </h2>
                    <div class="d-flex align-items-center mt-5">
                        <div class="col-1 text-right"><img src="{{asset('images/Vector.png')}}" alt=""></div>
                        <div class="col-11">
                            <span class="mf-light">собственную линию по производству нетканых материалов</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <div class="col-1 text-right"><img src="{{asset('images/Vector.png')}}" alt=""></div>
                        <div class="col-11">
                            <span class="mf-light">термоформовочные машины</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <div class="col-1 text-right"><img src="{{asset('images/Vector.png')}}" alt=""></div>
                        <div class="col-11">
                            <span class="mf-light">а также насчитывает более 5 стегальных машин</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <div class="col-1 text-right"><img src="{{asset('images/Vector.png')}}" alt=""></div>
                        <div class="col-11">
                            <span class="mf-light">собственную экструзионную линию</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12  d-flex align-items-center justify-content-end">
                <img src="{{asset('images/Frame 1.png')}}" alt="">
            </div>
        </div>
    </div>
@include('modals.get_price')
@endsection
@push('scripts')

@endpush
