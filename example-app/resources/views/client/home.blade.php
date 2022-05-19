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
                        <img src="{{ asset('assets/clients/image/anhhotro/bootstrap-img.PNG') }}" alt="hình ảnh">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/clients/image/anhhotro/bootstrap1-img.PNG') }}" alt="hình ảnh">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/clients/image/anhhotro/boostrap2.jpg') }}" alt="hình ảnh">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
    </section>
@endsection

@section('MainListItem')
    <div>
        <h4>bán chạy nhất</h4>
    </div>
    <section class="list-item">
        <div class="info-item">
            <img src="{{ asset('assets/clients/image/giongcho/akita-inu.jpg') }}" alt="AKITA INU" />
            <h6>AKITA INU</h6>
            <div>
                <div class="col40">
                    <a href="#">Xem chi tiết</a>
                </div>
                <div class="col60">
                    <i class="fas fa-star star1"></i>
                    <i class="fas fa-star star2"></i>
                    <i class="fas fa-star star3 "></i>
                    <i class="fas fa-star star4"> </i>
                    <i class="fas fa-star star5"></i>
                </div>
            </div>
        </div>
        <div class="info-item">
            <img src="{{ asset('assets/clients/image/giongcho/alaska.jpg') }}" alt="ALASKA" />
            <h6>ALASKA</h6>
            <div>
                <div class="col40">
                    <a href="#">Xem chi tiết</a>
                </div>
                <div class="col60">
                    <i class="fas fa-star star1"></i>
                    <i class="fas fa-star star2"></i>
                    <i class="fas fa-star star3 "></i>
                    <i class="fas fa-star star4"> </i>
                    <i class="fas fa-star star5"></i>
                </div>
            </div>
        </div>
        <div class="info-item">
            <img src="{{ asset('assets/clients/image/giongcho/becgie-bi.jpg') }}" alt="BECGIE BỈ (MALINOIS)" />
            <h6>Trần Đức Anh :D</h6>
            <div>
                <div class="col40">
                    <a href="#">Xem chi tiết</a>
                </div>
                <div class="col60">
                    <i class="fas fa-star star1"></i>
                    <i class="fas fa-star star2"></i>
                    <i class="fas fa-star star3 "></i>
                    <i class="fas fa-star star4"></i>
                    <i class="fas fa-star star5"></i>
                </div>
            </div>
        </div>
        
        <div class="info-item">
            <img src="{{ asset('assets/clients/image/giongcho/shiba.jpg') }} " alt=" SHIBA INU " />
            <h6>SHIBA INU</h6>
            <div>
                <div class="col40">
                    <a href="#">Xem chi tiết</a>
                </div>
                <div class="col60">
                    <i class="fas fa-star star1"></i>
                    <i class="fas fa-star star2"></i>
                    <i class="fas fa-star star3 "></i>
                    <i class="fas fa-star star4"> </i>
                    <i class="fas fa-star star5"></i>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
        
@endsection