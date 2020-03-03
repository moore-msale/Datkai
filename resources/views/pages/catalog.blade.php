@extends('layouts.layout')
@push('styles')
@endpush
@section('content')
    <div class="d-flex nav nav-tabs mt-5 border-0" role="tablist">
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0 nav-item">
            <a class="nav-link btn rounded-0 border-0 btn-block text-left mf-light p-2 pl-3 catalogTabs active" href="#tableware" data-toggle="tab" role="tab"  style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);">Одноразовая посуда</a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0 nav-item">
            <a class="nav-link btn rounded-0 border-0 btn-block text-left mf-light p-2 pl-3 catalogTabs"  href="#halofiber" data-toggle="tab" role="tab"  style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);">Синтепон / Холлофайбер</a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0 nav-item">
            <a class="nav-link btn rounded-0 border-0 btn-block text-left mf-light p-2 pl-3 catalogTabs"  href="#oil" data-toggle="tab" role="tab"  style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);">Растительное масло</a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0 nav-item">
            <a class="nav-link btn rounded-0 border-0 btn-block text-left mf-light p-2 pl-3 catalogTabs"  href="#servcies" data-toggle="tab" role="tab"  style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);">Услуги по стеганию</a>
        </div>
    </div>
    <div class="tab-content px-5" id="myTabContent">
        <div class="pt-4 tab-pane fade active show s-activeTab w-100" id="tableware" style="flex-wrap: wrap;">
            <div class="row">
                @foreach($products->where('type','tableware') as $product)
                    <div class="col-lg-3 col-sm-6 py-5">
                        <div class="px-4 row justify-content-center w-100 product {{$product->new ? 'new-product':''}}">
                            <img class="new-mark d-none" src="{!! asset('storage/images/new.png') !!}" alt="">
                            <img class="" src="{!! asset('storage/images/'.$product->img) !!}" alt="" style="max-width:250px;max-height: 250px;">
                            <div class="overlay"></div>
                            <div class="spec d-none w-100 px-4">
                                @if(isset( $product->name))
                                    <p class="mb-0 mf-light" style="color: #fff">{!! $product->name !!}</p>
                                @endif
                                <a href="/inner-product/{{$product->id}}"><button class="btn btn-view mt-2">Подробнее</button></a>
                                <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            </div>
                            <p class="mf-light w-100">{!!$product->name !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pt-4 tab-pane fade s-activeTab w-100" id="halofiber" style="flex-wrap: wrap;">
            <div class="row">
                @foreach($products->where('type','halofiber') as $product)
                    <div class="col-lg-3 col-sm-6 py-5">
                        <div class="px-4 row justify-content-center w-100 product {{$product->new ? 'new-product':''}}">
                            <img class="new-mark d-none" src="{!! asset('storage/images/new.png') !!}" alt="">
                            <img class="" src="{!! asset('storage/images/'.$product->img) !!}" alt="" style="max-width:250px;max-height: 250px;">
                            <div class="overlay"></div>
                            <div class="spec d-none w-100 px-4">
                                @if(isset( $product->name))
                                    <p class="mb-0 mf-light" style="color: #fff">{!! $product->name !!}</p>
                                @endif
                                <a href="/inner-product/{{$product->id}}"><button class="btn btn-view mt-2">Подробнее</button></a>
                                <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            </div>
                            <p class="mf-light w-100">{!!$product->name !!}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pt-4 tab-pane fade s-activeTab w-100" id="oil" style="flex-wrap: wrap;">
            <div class="row">
                @foreach($products->where('type','oil') as $product)
                    <div class="col-lg-3 col-sm-6 py-5">
                        <div class="px-4 row justify-content-center w-100 product {{$product->new ? 'new-product':''}}">
                            <img class="new-mark d-none" src="{!! asset('storage/images/new.png') !!}" alt="">
                            <img class="" src="{!! asset('storage/images/'.$product->img) !!}" alt="" style="max-width:250px;max-height: 250px;">
                            <div class="overlay"></div>
                            <div class="spec d-none w-100 px-4">
                                @if(isset( $product->name))
                                    <p class="mb-0 mf-light" style="color: #fff">{!! $product->name !!}</p>
                                @endif
                                <a href="/inner-product/{{$product->id}}"><button class="btn btn-view mt-2">Подробнее</button></a>
                                <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            </div>
                            <p class="mf-light w-100">{!!$product->name !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pt-4 tab-pane fade s-activeTab w-100" id="servcies" style="flex-wrap: wrap;">
            <div class="row">
                @foreach($products->where('type','services') as $product)
                    <div class="col-lg-3 col-sm-6 py-5">
                        <div class="px-4 row justify-content-center w-100 product {{$product->new ? 'new-product':''}}">
                            <img class="new-mark d-none" src="{!! asset('storage/images/new.png') !!}" alt="">
                            <img class="" src="{!! asset('storage/images/'.$product->img) !!}" alt="" style="max-width:250px;max-height: 250px;">
                            <div class="overlay"></div>
                            <div class="spec d-none w-100 px-4">
                                @if(isset( $product->name))
                                    <p class="mb-0 mf-light" style="color: #fff">{!! $product->name !!}</p>
                                @endif
                                <a href="/inner-product/{{$product->id}}"><button class="btn btn-view mt-2">Подробнее</button></a>
                                <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            </div>
                            <p class="mf-light w-100">{!!$product->name !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('modals.get_price')
@endsection
@push('scripts')
    <script>
        $(document).on('click','.nav-link',function (e) {
            $('.nav-link').removeClass('active');
            $(e.currentTarget).addClass('active');
        });
        $(document).ready(function () {
            let pathname = (window.location.href);
            // history.replaceState && history.replaceState(null,'',pathname.split('#')[0]);
            pathname = pathname.split('#')[1];
            $('.nav-link[href="#'+pathname+'"]').trigger('click');
        });
    </script>
@endpush
