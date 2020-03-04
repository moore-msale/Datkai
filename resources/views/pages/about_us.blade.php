@extends('layouts.layout')

@push('styles')
    <style>
        .main-about-us{
            background-image: url("{{ asset('storage/images/'.$about->section_1_bg_img)}}");
            background-position: right center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div>
    <div class='main-about-us p-md-5 p-0' style="max-height:713px;">
        <div class="d-flex align-items-between p-md-5 p-0">
            <div class="col-lg-8 col-12">
                <h2 class="mf-bold" style="font-size: 55px;line-height: 67px;color: #222222;">{!! $about->section_1_header !!}</h2>
                <p class="mf-light mt-5 mb-0" style="font-size: 20px;line-height: 140%;color: #222222;">
                    {!! $about->section_1_description !!}
                </p>
                <div class="row mt-md-5 mt-0">
                    <div class="col-md-5 col-sm-12 d-flex align-items-center py-2">
                        <div class="work-year p-2">
                            <div class="work-year-inner px-4 py-2">
                                <p class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #fff;">{!! $about->section_1_experience_year_before !!}</p>
                                <h3 class="mf-light"  style="font-size: 55px;color: #fff;">{!! $about->section_1_experience_year !!}</h3>
                                <p class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #fff;">{!! $about->section_1_experience_year_after !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 d-flex align-items-center">
                        <p class="mf-light" style="font-size: 20px;line-height: 140%;color: #222222;">
                            {!! $about->section_1_experience_description !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="d-none d-lg-block" style="transform: translate(83%,100%);z-index:10;"><img src="{!! asset('storage/images/rightArt.png') !!}" alt=""></div>
            </div>
        </div>
    </div>
        <div class="section-2-about-us p-5">
            <div class="col-15 text-left">
                <h2 class="mf-bold">{!! $about->section_2_header !!}</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 text-center p-4">
                    <div class="clients-is p-2">
                        <img class="my-5" src="{!! asset('storage/images/'.$about->section_2_first_img) !!}" alt="">
                        <p class="mf-light text-center mb-5">{!! $about->section_2_first_description !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center p-4">
                    <div class="clients-is p-2">
                        <img class="my-5" src="{!! asset('storage/images/'.$about->section_2_second_img) !!}" alt="">
                        <p class="mf-light text-center mb-5">{!! $about->section_2_second_description !!}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-center p-4">
                    <div class="clients-is p-2">
                        <img class="my-5" src="{!! asset('storage/images/'.$about->section_2_third_img) !!}" alt="">
                        <p class="mf-light text-center mb-5">{!! $about->section_2_third_description !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3-about-us p-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-12 d-flex align-items-between">
                    <div>
                        <p class="mf-medium">
                            {!! $about->section_3_first_block_description !!}
                        </p>
                        <span class="mf-light mb-0 mt-2" style="font-size: 20px;line-height: 140%;color: #222;"> {!! $about->section_3_first_block_number_befor !!}</span>
                        <h3 class="mf-medium"  style="font-size: 60px;color: #F9BB68;">{!! $about->section_3_first_block_number !!}</h3>
                        <span class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #222;">{!! $about->section_3_first_block_number_after !!}</span>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 d-flex align-items-between justify-content-center py-5" style="background: #FFEAA7;">
                    <div class="p-5">
                        <p class="mf-medium">
                            {!! $about->section_3_second_block_description !!}
                        </p>
                        <span class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #222;"> {!! $about->section_3_second_block_number_before !!}</span>
                        <h3 class="mf-medium"  style="font-size: 60px;color: #222;"> {!! $about->section_3_second_block_number !!}</h3>
                        <span class="mf-light mb-0" style="font-size: 20px;line-height: 140%;color: #222;">{!! $about->section_3_second_block_number_after !!}</span>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 d-flex align-items-between pl-2">
                    <div>
                        <p class="mf-medium pl-5">
                            {!! $about->section_3_third_block_description !!}
                        </p>
                        <div class="company-count">
                            @if(isset($about->section_3_third_block_paragraph_1))
                                <div class="d-flex align-items-center">
                                    <div class="col-2 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                                    <div class="col-10">
                                        <span class="mf-light">{!! $about->section_3_third_block_paragraph_1 !!}</span>
                                    </div>
                                </div>
                            @endif
                            @if(isset($about->section_3_third_block_paragraph_2))
                                <div class="d-flex align-items-center mt-3">
                                    <div class="col-2 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                                    <div class="col-10">
                                        <span class="mf-light">{!! $about->section_3_third_block_paragraph_2 !!}</span>
                                    </div>
                                </div>
                            @endif
                            @if(isset($about->section_3_third_block_paragraph_3))
                                <div class="d-flex align-items-center mt-3">
                                    <div class="col-2 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                                    <div class="col-10">
                                        <span class="mf-light">{!! $about->section_3_third_block_paragraph_3 !!}</span>
                                    </div>
                                </div>
                            @endif
                            @if(isset($about->section_3_third_block_paragraph_4))
                                <div class="d-flex align-items-center mt-3">
                                    <div class="col-2 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                                    <div class="col-10">
                                        <span class="mf-light">{!! $about->section_3_third_block_paragraph_4 !!}</span>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-4-about-us row p-3">
            <div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
                <div class="datkai-valuable">
                    <h2 class="mf-medium pl-4">
                        {!! $about->section_4_header !!}
                    </h2>

                    @if(isset($about->section_4_paragraph_1))
                        <div class="d-flex align-items-center mt-5">
                            <div class="col-1 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                            <div class="col-11">
                                <span class="mf-light">{!! $about->section_4_paragraph_1 !!}</span>
                            </div>
                        </div>
                    @endif
                    @if(isset($about->section_4_paragraph_2))
                        <div class="d-flex align-items-center mt-3">
                            <div class="col-1 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                            <div class="col-11">
                                <span class="mf-light">{!! $about->section_4_paragraph_2 !!}</span>
                            </div>
                        </div>
                    @endif
                    @if(isset($about->section_4_paragraph_3))
                        <div class="d-flex align-items-center mt-3">
                            <div class="col-1 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                            <div class="col-11">
                                <span class="mf-light">{!! $about->section_4_paragraph_3 !!}</span>
                            </div>
                        </div>
                    @endif
                    @if(isset($about->section_4_paragraph_4))
                        <div class="d-flex align-items-center mt-3">
                            <div class="col-1 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                            <div class="col-11">
                                <span class="mf-light">{!! $about->section_4_paragraph_4 !!}</span>
                            </div>
                        </div>
                    @endif
                    @if(isset($about->section_4_paragraph_5))
                        <div class="d-flex align-items-center mt-3">
                            <div class="col-1 text-right"><img src="{!! asset('storage/images/Vector.png') !!}" alt=""></div>
                            <div class="col-11">
                                <span class="mf-light">{!! $about->section_4_paragraph_5 !!}</span>
                            </div>
                        </div>
                    @endif
                    <p class="mf-medium pl-4 pt-5">{!! $about->section_4_description !!}</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12  d-flex align-items-center justify-content-end">
                <img src="{!! asset('storage/images/'.$about->section_4_img) !!}" alt="">
            </div>
        </div>
    </div>
@include('modals.get_price')
@endsection
@push('scripts')

@endpush
