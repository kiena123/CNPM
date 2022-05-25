@extends('layouts/client')

@section('cssLink')
    <link href="{{ asset('assets/clients/css/index-style.css') }}" rel="stylesheet" />
@endsection

@section('navMenu')
    @include('client.blocks/navMenu')
@endsection

@section('MainSectionContent')
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

@section('MainListItem')
    @php
        $userid = Session::get("userid");
        $selectMessage  = DB::select("select * from messages,users where ms_idUs = us_id and ms_idPd = ?", [$data[0]->pd_id]);
    @endphp
    <div class="mx-auto" style="width: 80%">
        <form action="/client/addComment" method="post">
            <div class="form-floating">
                <label for="floatingTextarea">Comments</label>
                <textarea class="form-control" placeholder="Leave a comment here" name="Comment" id="floatingTextarea"></textarea>
            </div>
            <div class="form-floating">
                <input class="form-control" type="hidden" name="pd_id" value="{{$data[0]->pd_id;}}" id="floatingInput"></input>
            </div>
            @csrf
            <div class="form-floating">
                <button class="form-control" type="submit">Nhận xét</button>
            </div>
        </form>
        <div class="my-3 bg-white">
                @forelse ($selectMessage as $item)
                    <div class="form-floating px-3">
                        <span>{{ $item->us_name }} ({{ $item->us_email }}) : </span>
                        <p>{{ $item->ms_comment }}</p>
                    </div>
                @empty
                    <div class="form-floating px-3">
                        <p>Không có nhận xét nào về sản phẩm</p>
                    </div>
                @endforelse
        </div>
    </div>
@endsection

@section('javascript')
        @php
            if(Session::has('notify')){
                $notify = Session::get('notify');
                echo "alert('$notify')";
            }
        @endphp
@endsection