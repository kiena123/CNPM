@extends('layouts/client')

@section('cssLink')
    <link href="{{ asset('assets/clients/css/phukien.css') }}" rel="stylesheet" />
@endsection

@section('MainListItem')
        <div>
            @if (!empty($search))
                <h4>Từ khóa tìm kiếm : "{{ $search }}"</h4>
            @else
                <h4>Danh sách tất cả sản phẩm</h4>
            @endif
        </div>
        <section class="info_main">
            <section class="info">
                @forelse ( $data as $item )
                    <div class="info_product">
                        <img src='{{ asset("$item->pd_image") }}' alt="hinh ảnh" />
                        <h6>{{ $item->pd_name }}</h6>
                        <p>{{ $item->pd_prices }}</p>
                        <div class="choose">
                            <a href="/client/cart/add?pd_id={{ $item->pd_id }}" class="dathang">Đặt hàng</a>
                            <a href="/titleProduct?pd_id={{ $item->pd_id }}" class="chitiet">Chi tiết</a>
                        </div>
                    </div>
                @empty
                    <div class="info_product">
                        <p> Không tìm thấy sản phẩm có "{{ $search; }}" trông tên </p>
                    </div>
                @endforelse
            </section>
        </section>
@endsection