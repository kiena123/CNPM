@extends('layouts/admin')

@section('content')
        
        @if ($type != "update")
        <form enctype="multipart/form-data" action="./add" method="post">
            <div class="form-floating">
                <label class="ms-2" style="width: 100%" for="NameProduct">Tên sản phẩm</label>
                <input type="text" class="form-control" id="NameProduct" name="NameProduct" value="" placeholder="Nhập tên sản phẩm">
            </div>

            <div class="form-floating">
                <label for="AgesProduct" class="ms-2" style="width: 100%">Độ tuổi</label>
                <select class="form-select" id="AgesProduct" name="AgesProduct" aria-label="Chọn độ tuổi">
                    <option selected value="0-1">0-1 tuổi</option>
                    <option value="2-3">2-3 tuổi</option>
                    <option value="4-6">4-6 tuổi</option>
                    <option value="6-11">6-11 tuổi</option>
                    <option value="12+">12+ tuổi</option>
                </select>
            </div>
            <div class="form-floating">
                <label for="ImageProduct" style="width: 100%">Ảnh sản phẩm</label>
                <input type="file" class="form-control" id="ImageProduct" name="ImageProduct" placeholder="Chọn đường dẫn">
                <img id="avatar" style="width :60px" src="" alt="hinh ảnh" />
            </div>
            <div class="form-floating">
                <label for="PriceProduct" style="width: 100%">Giá tiền</label>
                <input type="number" class="form-control" id="PriceProduct" name="PriceProduct" min="0" value='' placeholder="Giá tiền">
            </div>
            @csrf
            <button class="btn btn-outline-secondary" type="submit">
                Thêm
            </button>
        </form>

        @else
        <form enctype="multipart/form-data" action="./update?id={{ $data[0]->pd_id }}" method="post">
            <div class="form-floating">
                <label class="ms-2" style="width: 100%" for="NameProduct">Tên sản phẩm</label>
                <input type="text" class="form-control" id="NameProduct" name="NameProduct" value="{{ $data[0]->pd_name }}" placeholder="Nhập tên sản phẩm">
            </div>

            <div class="form-floating">
                <label for="AgesProduct" class="ms-2" style="width: 100%">Độ tuổi</label>
                <select class="form-select" id="AgesProduct" name="AgesProduct" aria-label="Chọn độ tuổi">
                    <option @php echo(($data[0]->pd_ages == "0-1")?"selected":"") @endphp value="0-1">0-1 tuổi</option>
                    <option @php echo(($data[0]->pd_ages == "2-3")?"selected":"") @endphp value="2-3">2-3 tuổi</option>
                    <option @php echo(($data[0]->pd_ages == "4-6")?"selected":"") @endphp value="4-6">4-6 tuổi</option>
                    <option @php echo(($data[0]->pd_ages == "6-11")?"selected":"") @endphp value="6-11">6-11 tuổi</option>
                    <option @php echo(($data[0]->pd_ages == "12+")?"selected":"") @endphp value="12+">12+ tuổi</option>
                </select>
            </div>
            <div class="form-floating">
                <label for="ImageProduct" style="width: 100%">Ảnh sản phẩm</label>
                <input type="file" class="form-control" id="ImageProduct" name="ImageProduct" value = "{{ $data[0]->pd_image }}" placeholder="Chọn đường dẫn">
                <img id="avatar" style="width :60px" src="{{ asset($data[0]->pd_image) }}" alt="hinh ảnh" />
            </div>
            <div class="form-floating">
                <label for="PriceProduct" style="width: 100%">Giá tiền</label>
                <input type="number" class="form-control" id="PriceProduct" name="PriceProduct" min="0" value='{{ $data[0]->pd_prices }}' placeholder="Giá tiền">
            </div>
            @csrf
            <button class="btn btn-outline-secondary" type="submit">
                Sửa
            </button>
        </form>

        @endif
@endsection

@section("javascript")
    $("#ImageProduct").change(function(e){ 
        $("#avatar").attr("src","{{ asset('assets/image/anhsanpham') }}/" + e.target.files[0].name).fadeIn();
    });
@endsection