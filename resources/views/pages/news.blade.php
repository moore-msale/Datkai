@extends('layouts.layout')
@push('styles')
@endpush
@section('content')
    <div class="pt-4 tab-pane fade active show s-activeTab w-100" style="flex-wrap: wrap;">
        <h2 class="mf-medium text-center">Новости</h2>
        <div class="row d-flex justify-content-center">
            @foreach($news as $new)
                    <div class="col-lg-3 col-sm-6 py-5">
                        <a href="news/{{$new->id}}">
                            <div class="px-4 row justify-content-center w-100 product">
                                <img class="w-100" src="{!! asset('storage/images/'.$new->img) !!} " alt="">
                                <p class="w-100 product-desc mf-medium mt-3">{!! Str::limit($new->header,60,'...') !!}</p>
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
    @include('modals.get_price')
@endsection
@push('scripts')
@endpush
