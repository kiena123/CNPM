<header>
        <div class="tieude">
            <div class="col30">
                <img src="{{ asset('assets/clients/image/icon/logo-shop.png') }}" alt="Petshop" />
            </div>
            <div class="col40">
                <div class="search">
                    <input type="search" placeholder="Bạn tìm gì..." />
                    <input type="image" value="timkiem" src="{{ asset('assets/clients/image/icon/search-icon.png') }}" />
                </div>
            </div>
            <div class="col10 header-icon ms-3">
                <a href="#">
                    <img src="{{ asset('assets/clients/image/icon/dangnhap-icon.png') }}" alt="đăng nhập">
                    <span>
                        @php
                            $userId = Session::get('userid');
                            $data = DB::select(" SELECT us_name FROM users WHERE us_id = $userId");
                            echo($data[0]->us_name);
                        @endphp
                    </span>
                </a>
                <ul>
                    <li>
                        <a href="/logout">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>