@extends('layouts/admin')

@section('content')
    <div class="w-100 ms-auto">
        <div class="d-flex justify-content-around">
            <div class="card border-warning my-3" style="max-width: 18rem;">
                <div class="card-body">
                    <a class="m-5 text-center" href="/admin/product">
                        <img style="width : 32px; height : 32px" src="{{ asset('assets/admin/image/icon/product-icon.png') }}" alt="sản phẩm">
                        <h5>Sản phẩm</h5>
                    </a>
                </div>
            </div>
    
            <div class="card border-warning my-3" style="max-width: 18rem;">
                <div class="card-body">
                    <a class="m-5 text-center" href="">
                        <img style="width : 32px; height : 32px" src="{{ asset('assets/admin/image/icon/product-icon.png') }}" alt="sản phẩm">
                        <h5>Người dùng</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection