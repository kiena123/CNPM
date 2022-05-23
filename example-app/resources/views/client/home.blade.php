@extends('layouts/client')

@section('cssLink')
    <link href="{{ asset('assets/clients/css/index-style.css') }}" rel="stylesheet" />
@endsection

@section('navMenu')
    @include('client.blocks/navMenu')
@endsection

@section('MainSectionContent')
    <section class="section-content">
        <!-- section bootstrap -->
        <section class="bootstrap-carousel">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
    
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/image/anhhotro/slide1.jpeg') }}" alt="hình ảnh">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/image/anhhotro/slide2.jpg') }}" alt="hình ảnh">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/image/anhhotro/slide3.jpg') }}" alt="hình ảnh">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark"></span>
                </a>
            </div>
        </section>
    </section>
@endsection

@section('MainListItem')
    <div>
        <h4>Sản phẩm mới nhất</h4>
    </div>
    <section class="list-item">
        @forelse ($data as $item)
        <div class="info-item">
            <img src="{{ asset($item->pd_image) }}" alt="{{ asset($item->pd_name) }}" />
            <h6>{{$item->pd_name}}</h6>
            <div>
                <div class="col40">
                    <a href="/client/cart/add?pd_id={{ $item->pd_id }}" class="dathang">Đặt hàng</a>
                </div>
                <div class="col40">
                    <a href="/titleProduct?pd_id={{ $item->pd_id }}">Xem chi tiết</a>
                </div>
            </div>
        </div>
        @empty
        <div class="">Không có sản phẩm</div>
        @endforelse
    </section>
@endsection