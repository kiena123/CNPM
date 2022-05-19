@extends('layouts/client')

@section('cssLink')
    <link href="{{ asset('assets/clients/css/phukien.css') }}" rel="stylesheet" />
@endsection

@section('MainListItem')
        <!-- Request::input(['search']) -->
        <div>
            <h4>Từ khóa tìm kiếm : "{{ $search; }}"</h4>
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
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-coihuanluyen.png') }}" alt="hinh ảnh" />
                    <h6>Còi Huấn Luyện</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-thitcuuque.png') }}" alt="hinh ảnh" />
                    <h6>Thịt Cừu Que</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-SmartHeart.png') }}" alt="hinh ảnh" />
                    <h6>SmartHeart Dành Cho Chó Nhỏ</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-banhthuong.png') }}" alt="hinh ảnh" />
                    <h6>Bánh Thưởng Loại Viên</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-royal_truongthanh.png') }}" alt="hinh ảnh" />
                    <h6>Royal Canin Cho Chó Trưởng Thành</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-capno.png') }}" alt="hinh ảnh" />
                    <h6>Cặp Nơ</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-khanren.png') }}" alt="hinh ảnh" />
                    <h6>Khăn Ren Công Chúa</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-thuoccanxi.png') }}" alt="hinh ảnh" />
                    <h6>Thuốc Canxi</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-aongucnochuong.png') }}" alt="hinh ảnh" />
                    <h6>Áo Ngực Nơ Chuông</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-bongbongdochoi.png') }}" alt="hinh ảnh" />
                    <h6>Bóng Đồ Chơi</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-raoquaycho.png') }}" alt="hinh ảnh" />
                    <h6>Rào Quây Chó</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-dautamnuochoabloomsexy.png') }}" alt="hinh ảnh" />
                    <h6>Dầu Tắm Nước Hoa BLOOM SEXY</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-dochoi.png') }}" alt="hinh ảnh" />
                    <h6>Đồ Chơi</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-dautamFay.png') }}" alt="hinh ảnh" />
                    <h6>Dầu Tắm Nước Hoa BLOOM SEXY</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-sirochongchaynuocmat.png') }}" alt="hinh ảnh" />
                    <h6>Siro Chống Chảy Nước Mắt</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-vongtriveran.png') }}" alt="hinh ảnh" />
                    <h6>Vòng Trị Ve Rận</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-xitveranHANTOC.png') }}" alt="hinh ảnh" />
                    <h6>Xịt Ve Rận HANTOC</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-gelddNutri.png') }}" alt="hinh ảnh" />
                    <h6>Gel Dinh Dưỡng Nutri</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-suabotchomeo.png') }}" alt="hinh ảnh" />
                    <h6>Sữa Bột Bio Dành Cho Chó Mèo</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-vitamintonghop.png') }}" alt="hinh ảnh" />
                    <h6>Vitamin Tổng Hợp Sleeky</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-canxinano.png') }}" alt="hinh ảnh" />
                    <h6>Canxi Nano
                    </h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-tuivanchuyen.png') }}" alt="hinh ảnh" />
                    <h6>Túi Vận Chuyển</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-dochoithucan.png') }}" alt="hinh ảnh" />
                    <h6>Đồ Chơi Thức Ăn</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-ao_giaythat.png') }}" alt="hinh ảnh" />
                    <h6>Áo + Dây Dắt</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-dianem.png') }}" alt="hinh ảnh" />
                    <h6>Đĩa Ném</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-quacaugai.png') }}" alt="hinh ảnh" />
                    <h6>Quả Cầu Gai</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-sungbanthucan.png') }}" alt="hinh ảnh" />
                    <h6>Súng Bắn Thức Ăn</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-banchaylong.png') }}" alt="hinh ảnh" />
                    <h6>Bàn Chải Lông</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-dochoi_gatrong.png') }}" alt="hinh ảnh" />
                    <h6>Đồ Chơi Chú Gà Trống</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-xuongda.png') }}" alt="hinh ảnh" />
                    <h6>Xương Da</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-Smartheart_truongthanh.png') }}" alt="hinh ảnh" />
                    <h6>SmartHeart Dành Cho Chó Trưởng Thành</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-roya_chonho.png') }}" alt="hinh ảnh" />
                    <h6>Royal Canin Cho Chó Nhỏ</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-phantamkhoFay.png') }}" alt="hinh ảnh" />
                    <h6>Phấn Tắm Khô FAY</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
                <div class="info_product">
                    <img src="{{ asset('assets/clients/image/phukien/phukien-suatamoliver.png') }}" alt="hinh ảnh" />
                    <h6>Sữa Tắm Oliver</h6>
                    <div>
                        <i class="fas fa-star star1"></i>
                        <i class="fas fa-star star2"></i>
                        <i class="fas fa-star star3 "></i>
                        <i class="fas fa-star star4"> </i>
                        <i class="fas fa-star star5"></i>
                    </div>
                    <p>100.000đ</p>
                    <div class="choose">
                        <a href="#" class="dathang">Đặt hàng</a>
                        <a href="#" class="chitiet">Chi tiết</a>
                    </div>
                </div>
            </section>

        </section>
@endsection