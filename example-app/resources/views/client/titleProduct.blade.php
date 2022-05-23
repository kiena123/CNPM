@extends('layouts/client')

@section('cssLink')
    <link href="{{ asset('assets/clients/css/index-style.css') }}" rel="stylesheet" />
@endsection

@section('navMenu')
    @include('client.blocks/navMenu')
@endsection

@section('MainSectionContent')
    <section class="section-content">
    </section>
@endsection

@section('MainListItem')
    <div>
        <h4>Chi tiết sản phẩm</h4>
    </div>
    {{--
    @php
        dd($data);
    @endphp
    --}}
    <section class="list-item d-flex justify-content-between p-3">
        <div class="bg-warn" style="width : 35%;">
            <img style="width : 100%;" src='{{ asset($data[0]->pd_image) }}' alt="hinh ảnh" />
        </div>
        <div class="" style="width :62%;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span style="width :30%;">Tên sản phẩm : </span>{{ $data[0]->pd_name }}</li>
                <li class="list-group-item"><span style="width :30%;">Giá tiền : </span>{{ $data[0]->pd_prices }}</li>
                <li class="list-group-item"><span style="width :30%;">Độ tuổi: </span>{{ $data[0]->pd_ages }}</li>
            </ul>
            <div class="bg-white mt-5 p-3">
                <span style="width :30%;">Mô tả sản phẩm : </span>
                {{ $data[0]->pd_desciption }}
            </div>
        </div>
    </section>
@endsection

@section('javascript')
        @php
            if(Session::has('notify')){
                $notify = Session::get('notify');
                echo "alert('$notify')";
            }
        @endphp
@endsection