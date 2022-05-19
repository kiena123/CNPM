@extends('layouts/admin')

@section('content')
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Tên</th>
                    <th scope="col">Độ tuổi</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Giá</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $data as $item )
                <tr>
                    <td >{{ $item->pd_name; }}</td>
                    <td >{{ $item->pd_ages; }}</td>
                    <td >
                        <img style="width :60px" src='{{ asset("$item->pd_image") }}' alt="hinh ảnh" />
                    </td>
                    <td>{{ $item->pd_prices; }}</td>
                    <td class="text-center">
                        <a class="text-decoration-none" href="./product/update?id={{ $item->pd_id; }}">Sửa</a>
                        <a class="text-decoration-none" href="./product/delete?id={{ $item->pd_id; }}">Xóa</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <p>Không tìm thấy dữ liệu</p>
                </tr>
                @endforelse
            </tbody>     
        </table>
        <p class="text-center border-top">
            <button class="btn btn-outline-warning">
                <a href="./product/add">Thêm</a>
            </button>
        </p>
@endsection