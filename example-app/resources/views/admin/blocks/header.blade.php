<header>
        <div class="tieude d-flex justify-content-between">
            <div class="col30">
                <img src="{{ asset('assets/image/icon/logo-shop.png') }}" alt="Petshop" />
            </div>
            <div class="col10 header-icon ms-3">
                <a href="#">
                    <img src="{{ asset('assets/image/icon/dangnhap-icon.png') }}" alt="đăng nhập">
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