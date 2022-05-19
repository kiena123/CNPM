<header>
        <div class="tieude">
            <div class="col30">
                <img src="{{ asset('assets/clients/image/icon/logo-shop.png') }}" alt="Petshop" />
            </div>
            <div class="col40">
                <form class="search" method="get" action="/search">
                    <input type="search" name="search" placeholder="Bạn tìm gì..." />
                    <!-- @csrf -->
                    <button type="submit"><img src="{{ asset('assets/clients/image/icon/search-icon.png') }}" alt="Tìm kiếm"></button>
                </form>
            </div>
            <div class="col10 header-icon">
                <a id="hotro" href="#">
                    <img src="{{ asset('assets/clients/image/icon/hotro-icon.png') }}" alt="hỗ trợ">
                    <span>Hỗ trợ</span>
                </a>
            </div>
            <div class="col10 header-icon">
                <a href="client/cart">
                    <img src="{{ asset('assets/clients/image/icon/giohang-icon.png') }}" alt="Giỏ hàng">
                    <span>Giỏ hàng</span>
                </a>
            </div>
            <div class="col10 header-icon">
                <a href="#">
                    <img src="{{ asset('assets/clients/image/icon/dangnhap-icon.png') }}" alt="đăng nhập">
                    <span>
                        @php
                            $userId = Session::get('userid');
                            if(!empty($userId)){
                                $data = DB::select(" SELECT us_name FROM users WHERE us_id = $userId");
                                echo($data[0]->us_name);
                            }else{
                                echo('Tài khoản');
                            }
                        @endphp
                    </span>
                </a>
                <ul>
                    @php
                        $data = Session::get('userid');
                        if(!empty($data)){
                            echo('
                            <li>
                                <a href="/logout">Đăng xuất</a>
                            </li>
                            ');
                        }else{
                            echo('
                            <li>
                                <a href="/register">Đăng ký</a>
                            </li>
                            <li>
                                <a href="/login">Đăng nhập</a>
                            </li>
                            ');
                        }
                    @endphp
                </ul>
            </div>
        </div>
    </header>