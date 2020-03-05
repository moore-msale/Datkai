@extends('layouts.layout')
@push('styles')
@endpush
@section('content')
    <div class="container">
        <div class="mt-4">
            <a href="/catalog#{{$product->type}}">В каталог</a>
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                <img src="{!! asset('storage/images/'.$product->img) !!} " alt="" style="max-height: 250px;max-height: 250px;">
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-left"  style="background-color: #F9BB68;border-radius: 20px;">
                <div class="p-4">
                <h2 class="mf-bold mt-2 mb-3">{!! $product->name !!}</h2>
                    <p class="mf-bold mb-1" style="font-size: 18px;">
                        Характеристики:
                    </p>
                    @if(isset($product->width))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("width",$product->width)}}</p>
                    @endif
                    @if(isset($product->inner_width))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("inner_width",$product->inner_width)}}</p>
                    @endif
                    @if(isset($product->height))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("height",$product->height)}}</p>
                    @endif
                    @if(isset($product->inner_height))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("inner_height",$product->inner_height)}}</p>
                    @endif
                    @if(isset($product->depth))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("depth",$product->depth)}}</p>
                    @endif
                    @if(isset($product->length))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("length",$product->length)}}</p>
                    @endif
                    @if(isset($product->inner_length))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("inner_length",$product->inner_length)}}</p>
                    @endif
                    @if(isset($product->quantity))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("quantity",$product->quantity)}}</p>
                    @endif
                    @if(isset($product->material))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("material",$product->material)}}</p>
                    @endif
                    @if(isset($product->mass))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("mass",$product->mass)}}</p>
                    @endif
                    @if(isset($product->diametr))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("diametr",$product->diametr)}}</p>
                    @endif
                    @if(isset($product->inner_diametr))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("inner_diametr",$product->inner_diametr)}}</p>
                    @endif
                    @if(isset($product->nutritional_value))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("nutritional_value",$product->nutritional_value)}}</p>
                    @endif
                    @if(isset($product->energy_value))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("energy_value",$product->energy_value)}}</p>
                    @endif
                    @if(isset($product->best_before))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("best_before",$product->best_before)}}</p>
                    @endif
                    @if(isset($product->order))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("order",$product->order)}}</p>
                    @endif
                    @if(isset($product->use))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("use",$product->use)}}</p>
                    @endif
                    @if(isset($product->price))
                        <p class="mb-0 mf-light" style="color: #222">{{$product->setName("price",$product->price)}}</p>
                    @endif
                    <button class="btn btn-view mt-4 mb-4 getPrice" data-toggle="modal" data-target="#getPrice" data-id="{{$product->id}}" style="width: 200px;background: #F9BB68;border-radius: 20px;border: 1px solid #000;color:#000;">Узнать цену</button>
                </div>
            </div>
            <div class="col-12 text-left py-5 mt-5" style="background: #FAFAFA;border-radius: 20px;">
                <div class="p-2" >
                    <p class="mf-bold" style="font-size: 18px;">
                        Описание:
                    </p>
                    <p class="mf-light" style="color:#5E5E5E;">{!! $product->description !!}</p>
                </div>
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
    </script>
@endpush
