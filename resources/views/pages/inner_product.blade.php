@extends('layouts.layout')
@push('styles')
    <style>
        @media only screen and (min-width: 1000px) {

        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                <img src="{{asset('images/container2.png')}}" alt="">
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-center align-items-center">
                <div>
                <p class="mf-medium">
                    Характеристики:
                </p>
                <p class="mf-medium">ширина: 20 см</p>
                <p class="mf-medium">высота: 20 см</p>
                <p class="mf-medium">длина: 50 см</p>
                <p class="mf-medium">глубина: 20 см</p>
                <p class="mf-medium">объем: 1 мл</p>
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
