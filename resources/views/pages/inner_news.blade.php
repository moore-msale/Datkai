@extends('layouts.layout')
@push('styles')
@endpush
@section('content')
    <div class="pt-4 tab-pane fade active show s-activeTab w-100" style="flex-wrap: wrap;">
        <div class="container px-0">
            <h2 class="mf-medium">{!! $news->header !!}</h2>
            <div class="row mt-5">
                <div class="col-lg-5 col-10"><img class="" src="{!! asset('storage/images/'.$news->img) !!} " alt=""></div>
                <div class="col-lg-7 col-12"><p class="mf-light pl-lg-2 pl-0"  style="color: #222;font-size: 18px;line-height: 200%;"> {!! $news->description !!}</p></div>
            </div>
            <div class="py-4">
                <div class="text-center mb-5">
                    <img class="" src="{!! asset('storage/images/'.$news->additional_img) !!} " alt="">
                </div>
                <p class="mf-light" style="color: #222;font-size: 18px; line-height: 180%"> {!! $news->additional_description !!}</p>
            </div>
            <p>{!! \Carbon\Carbon::make($news->created_at)->format('d-m-Y') !!}</p>
        </div>
    </div>
    @include('modals.get_price')
@endsection
@push('scripts')
@endpush
