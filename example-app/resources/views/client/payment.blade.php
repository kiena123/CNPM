@extends('layouts/client')

@section('cssLink')
    <link href="{{ asset('assets/clients/css/index-style.css') }}" rel="stylesheet" />
@endsection

@section('navMenu')
    @include('client.blocks/navMenu')
@endsection

@section('MainListItem')
        <div class="mb-2">
            <h4>Hóa đơn</h4>
        </div>
        <div class="m-auto" style="width : 80%">
            <table class="table table-hover bg-white">
                <thead>
                    <tr>
                        <th scope="col">Tên</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá sản phẩm</th>
                        <th scope="col">Tổng giá</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0
                    @endphp
                    @forelse ( $data as $item )
                    <tr>
                        <td >{{ $item->pd_name; }}</td>
                        <td >{{ $item->ca_quantity; }}</td>
                        <td>{{ $item->pd_prices; }}</td>
                        <td >{{ $item->ca_quantity*$item->pd_prices; }}</td>
                    @php
                        $i += $item->ca_quantity*$item->pd_prices;
                    @endphp
                    </tr>
                    @empty
                    <tr>
                        <p>Không tìm thấy dữ liệu</p>
                    </tr>
                    @endforelse
                </tbody>     
            </table>
        </div> 
        <p class="text-center border-top">
            <span>Tổng tiền : {{ $i; }}</span>
            <button class="btn btn-outline-warning">
                <a href="./product/add">Xác nhận</a>
            </button>
        </p>
@endsection