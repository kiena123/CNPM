@extends('layouts/client')

@section('cssLink')
    <link href="{{ asset('assets/clients/css/index-style.css') }}" rel="stylesheet" />
@endsection

@section('navMenu')
    @include('client.blocks/navMenu')
@endsection

@section('MainListItem')
    <div>
        <h4>bán chạy nhất</h4>
    </div>
    <section class="list-item">
        <div class="p-5 m-auto" style="width : 80%">
            <div class="bg-light">
                <ul class="d-flex flex-row list-unstyled m-0">
                    <li class="m-auto text-center" style="width : 55%">
                            <p class="m-auto">Product</p>
                    </li>
                    <li class="m-auto text-center" style="width : 15%">
                            Giá tiền
                    </li>
                    <li class="m-auto text-center" style="width : 15%">
                            Số lượng
                    </li>
                    <li class="m-auto text-center" style="width : 15%">
                            Xóa
                    </li>
                </ul>
            </div>
            @forelse ( $data as $item )
            <div class="border-top border-secondary bg-white">
                <ul class="d-flex flex-row m-0 list-unstyled">
                    <li class="text-start" style="width : 55%">
                        <div class="d-flex flex-row">
                            <img class="m-3 mx-5" src="{{ asset($item->pd_image); }}" style=" width: 80px; height: 80px;">
                            <div class="my-auto ms-3">
                                <h5 class="">{{$item->pd_name}}</h5>
                                <p class="">{{$item->pd_ages}}</p>
                            </div>
                        </div>
                    </li>
                    <li class="m-auto text-center" style="width : 15%">
                        <p>{{$item->pd_prices}}</p>
                    </li>
                    <li class="m-auto text-center" style="width : 15%">
                            <input class="border border-secondary" type="number" value="1" style="width : 100%" id="quantity" name="quantity" min="1" max="5">
                    </li>
                    <li class="m-auto text-center" style="width : 15%">
                        <a href="/client/cart/delete?ca_id={{$item->ca_id}}" class="">Xóa</a>
                    </li>
                </ul>
            </div>
            @empty
                
            @endforelse
        </div>
    </section>
@endsection