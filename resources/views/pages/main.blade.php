@extends('layouts.layout')
@push("styles")
    <style>
        @media only screen and (min-width: 1000px) {
            .background-carousel-image {
                background-image: url("{{asset('storage/images/'.$main->section_1_slide_1_img)}}");
                background-repeat: no-repeat;
                background-size: 70%;
                background-position: right top;
            }

            .background-carousel-image-1 {
                background-image: url("{{asset('storage/images/'.$main->section_1_slide_2_img)}}");
                background-repeat: no-repeat;
                background-size: 70%;
                background-position: right top;
            }

            .background-carousel-image-2 {
                background-image: url("{{asset('storage/images/'.$main->section_1_slide_3_img)}}");
                background-repeat: no-repeat;
                background-size: 70%;
                background-position: right top;
            }
        }
    </style>
@endpush
@section('content')
    <div class='main-content'>
        <div class="buttons position-relative">
            <a href="/catalog">
                <button class="px-2 allAssortment" style="max-width: 244px;height: 47px;border:1px solid #F3AC4D;border-radius: 10px;color:#F3AC4D;background-color: transparent;">Посмотреть весь ассортимент</button>
                <button class="px-2 allAssortment2 d-none" style="max-width: 244px;height: 47px;border:1px solid #F3AC4D;border-radius: 10px;color:#F3AC4D;background-color: transparent;">Посмотреть весь ассортимент</button>
            </a>
        </div>
        <div class="main-carousel pr-0 mb-5">
            <div class="d-flex justify-content-between background-carousel-image height-auto" style="height:713px;">
                <div class="col-lg-5 col-12  mt-5">
                    <h2 class="mf-bold main-carousel-h2 mb-2 mt-5"  data-count="{{strlen($main->section_1_slide_1_description)+strlen($main->section_1_slide_1_additional_description)}}">{!! $main->section_1_slide_1_description !!}</h2>
                    <p class="mf-bold">{!! $main->section_1_slide_1_additional_description !!}</p>
                    <img class="responsive-img-100 d-block d-lg-none" src="{{asset('storage/images/'.$main->section_1_slide_1_img)}}" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-between  background-carousel-image-1 height-auto" style="height:713px;">
                <div class="col-lg-5 col-12  mt-5">
                    <h2 class="mf-bold main-carousel-h2 mb-2 mt-5" data-count="{{strlen($main->section_1_slide_2_description)+strlen($main->section_1_slide_2_additional_description)}}">{!! $main->section_1_slide_2_description !!}</h2>
                    <p class="mf-bold">{!! $main->section_1_slide_2_additional_description !!}</p>
                    <img class="responsive-img-100 d-block d-lg-none" src="{{asset('storage/images/'.$main->section_1_slide_2_img)}}" alt="">
                </div>
            </div>
            <div class="d-flex justify-content-between  background-carousel-image-2 height-auto" style="height:713px;">
                <div class="col-lg-5 col-12  mt-5">
                    <h2 class="mf-bold main-carousel-h2 mb-2 mt-5" data-count="{{strlen($main->section_1_slide_3_description)+strlen($main->section_1_slide_2_additional_description)}}">{!! $main->section_1_slide_3_description !!}</h2>
                    <p class="mf-bold">{!! $main->section_1_slide_3_additional_description !!}</p>
                    <img  class="responsive-img-100 d-block d-lg-none" src="{{asset('storage/images/'.$main->section_1_slide_3_img)}}" alt="">
                </div>
            </div>
        </div>
        <ul class="prevNextButton-main position-relative mb-0" style="height: 30px;">
            <a class="nextBtn-main c-pointer">
                <img src="{!! asset("images/Arrow 1.png") !!} " alt="">
            </a>
            <a class="prevBtn-main c-pointer ml-auto">
                <img src="{!! asset("images/Arrow 2.png") !!} " alt="">
            </a>
        </ul>
    </div>
    <div class="section-2 my-5">
        <div class="d-flex justify-content-center" style="height: 250px;">
            <div class="col-2 px-0 d-none d-lg-block" style="transform: translateY(-110%);z-index:10;"><img src="{!! asset('storage/images/leftArt.png') !!} " alt=""></div>
            <div class="col-lg-8 col-md-12 text-center">
                <h2 class="header-30 mf-bold mt-lg-0">{!! $main->section_2_header !!} </h2>
                <p class="header-30-desc mf-light mt-5">
                    {!! $main->section_2_description !!}
                </p>
            </div>
            <div class="col-2 px-0 text-right mt-4 d-none d-lg-block" style="transform: translateY(-70%);z-index:10;"><img src="{!! asset('storage/images/rightArt.png') !!} " alt=""></div>
        </div>
        <div class="row justify-content-center" style="flex-wrap: wrap;">
            <div class="col-lg-3 col-md-4 col-sm-6 text-center px-0 catalog c-pointer row justify-content-center">
                <img class="responsive-img" src="{!! asset('storage/images/'.$main->section_2_first_catalog_img) !!} " alt="">
                <a href="/catalog">
                <button class="main-p-btn px-4 d-none" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Посмотреть каталог</button>
                <p class="product-desc mf-medium mt-3">{!! $main->section_2_first_catalog !!} </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center px-0 catalog c-pointer row justify-content-center">
                <img class="responsive-img" src="{!! asset('storage/images/'.$main->section_2_second_catalog_img) !!} " alt="">
                <a href="/catalog#halofiber">
                    <button class="main-p-btn px-4 d-none" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Посмотреть каталог</button>
                    <p class="product-desc mf-medium mt-3">{!! $main->section_2_second_catalog !!} </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center px-0 catalog c-pointer row justify-content-center">
                <img class="responsive-img" src="{!! asset('storage/images/'.$main->section_2_third_catalog_img) !!} " alt="">
                <a href="/catalog#oil">
                    <button class="main-p-btn px-4 d-none" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Посмотреть каталог</button>
                    <p class="product-desc mf-medium mt-3">{!! $main->section_2_third_catalog !!} </p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center px-0 catalog c-pointer row justify-content-center">
                <img class="responsive-img" src="{!! asset('storage/images/'.$main->section_2_fourth_catalog_img) !!} " alt="">
                <a href="/catalog#servcies">
                    <button class="main-p-btn px-4 d-none" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Посмотреть каталог</button>
                    <p class="product-desc mf-medium mt-3">{!! $main->section_2_fourth_catalog !!} </p>
                </a>
            </div>
        </div>
    </div>
    <div class="section-3 "  style="margin-top: 10%">
        <div class="pr-0 overflow-hidden">
            <div class="col-15 text-center px-5">
                <h2 class="mf-medium">{!! $main->section_3_header !!} </h2>
            </div>
            <div class="prevNextButton-single position-relative" style="height: 30px;">
                <a class="nextBtn-single c-pointer">
                    <img src="{!! asset('storage/images/leftArrow.png') !!} " alt="">
                </a>
                <a class="prevBtn-single c-pointer">
                    <img src="{!! asset('storage/images/rightArrow.png') !!} " alt="">
                </a>
            </div>
            <div class="row justify-content-center single-item">
                @for($i=0;$i<=4;$i++)
                    @foreach($products as $product)
                    <div class="col-3 d-flex justify-content-center product m-4 py-5 {{$product->new ? 'new-product':''}}">
                        <div>
                            <img class="new-mark d-none" src="{!! asset('storage/images/new.png') !!} " alt="">
                            <img class="responsive-img w-100" src="{!! asset('storage/images/'.$product->img) !!} " alt="" style="height: 250px; width: 250px;">
                            <p class="mf-medium" style="color: #222">{!! $product->name !!}</p>
                        </div>
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            @if(isset( $product->name))
                                <p class="mb-0 mf-light" style="color: #fff">{!! $product->name !!}</p>
                            @endif
                            <button class="btn btn-view mt-2"><a href="/inner-product/{{$product->id}}">Подробнее</a></button>
                            <button class="btn btn-view mt-2 getPrice" data-toggle="modal" data-target="#getPrice" data-id="{{$product->id}}">Узнать цену</button>
                        </div>
                    </div>
                    @endforeach
                @endfor
            </div>
        </div>
    </div>
    <div class="section-4" style="margin: 0% 0% 5% 0%;">
        <div class="col-15 text-center px-5">
            <h2 class="mf-medium">{!! $main->section_4_header !!} </h2>
            <p class="mf-light my-4">{!! $main->section_4_description !!} </p>
        </div>
        <div class="d-flex align-items-center section-4-bg section-4-bg-img" style="flex-wrap: wrap;">
            <div class="col-md-4 col-sm-6 text-center">
                <img src="{!! asset('storage/images/'.$main->section_4_first_img) !!} " alt="">
                <p class="mf-medium advantages-text">{!! $main->section_4_first_description !!} </p>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <img src="{!! asset('storage/images/'.$main->section_4_second_img) !!} " alt=""  style="transform: translate(-10%,20%);z-index:100">
                <p class="mf-medium advantages-text" style="transform: translate(5%,-45%);z-index:150">{!! $main->section_4_second_description !!} </p>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <img src="{!! asset('storage/images/'.$main->section_4_third_img) !!} " alt="">
                <p class="mf-medium advantages-text">{!! $main->section_4_third_description !!} </p>
            </div>
            <div class="col-md-4 d-none d-lg-block">

            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <img src="{!! asset('storage/images/'.$main->section_4_fourth_img) !!} " alt="">
                <p class="mf-medium advantages-text" style="transform: translate(-5%,-90%)">{!! $main->section_4_fourth_description !!} </p>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <img src="{!! asset('storage/images/'.$main->section_4_fifth_img) !!} " alt="">
                <p class="mf-medium advantages-text w-auto">{!! $main->section_4_fifth_description !!} </p>
            </div>
        </div>
    </div>
    <div class="section-5" id="partners">
        <div class="d-flex justify-content-center">
            <div class="col-15 text-center">
                <h2 class="header-30 mf-bold">{!! $main->section_5_header !!} </h2>
                <p class="mf-light">{!! $main->section_5_description !!} </p>
                <p class="mf-light">{!! $main->section_5_additional_description !!} </p>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5 partners-carousel outline-none">
            @for($i=0;$i<=2;$i++)
                @foreach($partners as $partner)
                <div class="col-3 text-center px-0">
                    <img class="responsive-img" src="{{asset('storage/images/'.$partner->img)}}" alt="">
                </div>
                @endforeach
            @endfor
        </div>
    </div>
    <div class="section-6 pr-0 overflow-hidden" style="margin-top:10%;"  id="news">
        <div class="col-15  px-5 d-flex justify-content-start">
            <a style="text-decoration: none;color: #222;" href="/news">
                <h2 class="mf-bold">{!! $main->section_6_header !!} </h2>
            </a>
        </div>
        <div class="prevNextButton-news position-relative" style="height: 30px;">
            <a class="nextBtn-news c-pointer">
                <img src="{!! asset('storage/images/leftArrow.png') !!} " alt="">
            </a>
            <a class="prevBtn-news c-pointer">
                <img src="{!! asset('storage/images/rightArrow.png') !!} " alt="">
            </a>
        </div>
        <div class="row justify-content-center news-carousel">
            @foreach($news as $new)
                <a href="news/{{$new->id}}">
                    <div class="news-content d-flex justify-content-center tableware m-4 outline-none" style="max-height:450px;">
                        <div class="px-5">
                            <div class="d-flex justify-content-center">
                                <img class="" src="{!! asset('storage/images/'.$new->img) !!} " alt=""  style="max-height: 320px;">
                            </div>
                            <p class="product-desc mf-medium mt-3">{!! Str::limit($new->header,38,'...') !!}</p>
                        </div>
                    </div>
                </a>
            @endforeach
            @foreach($news as $new)
                <a href="news/{{$new->id}}">
                    <div class="news-content d-flex justify-content-center tableware m-4 outline-none" style="max-height:450px;">
                        <div class="px-5">
                            <div class="d-flex justify-content-center">
                                <img class="" src="{!! asset('storage/images/'.$new->img) !!} " alt=""  style="max-height: 320px;">
                            </div>
                            <p class="product-desc mf-medium mt-3">{!! Str::limit($new->header,38,'...') !!}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="w-100 text-center my-5">
            <a class="ml-auto mf-light " style="color: #222;" href="/news"><button class="main-p-btn" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;color: #fff;">Читать все новости</button></a>
        </div>
    </div>
</div>
@include('modals.get_price')
@endsection
@push('scripts')
    <script>
        $('.partners-carousel').slick({
            slidesToShow: 4,
            dots: true,
            arrows:true,
            autoplay:true,
            autoplaySpeed:3000,
            infinite:true,
        });
    </script>
@endpush
