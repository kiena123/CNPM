<!DOCTYPE html>
<html>

<head>
    <title>Pet Shop|Cửa Hàng Mua Bán Thú Cưng</title>
    <meta name="keywords" content="Chó cảnh, pet, cách nuôi chó, mua thú cưng">
    <meta name="description" content="Mua bán chó cảnh">
    <meta http-equiv="refresh" content="3600">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- {{-- <link href="{{ asset('assets/clients/css/index-style.css') }}" rel="stylesheet" /> --}} -->
    @yield("cssLink")

    <!-- responsive -->
    <link rel="stylesheet" media="mediatype and|not|only (expressions)" href="print.css">
    <!-- icon web -->
    <link href="{{ asset('assets/clients/image/icon/icon-logo.PNG') }}" rel="shortcut icon" />
    <!-- icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- javascript -->
    <script src="{{ asset('assets/clients/js/style_javascript.js') }}"></script>
    
</head>

<body>
    <!--  header -->
    @include('client.blocks.header')
    <!--  nav -->
    @include('client.blocks.navMenu')

    <!-- section main -->
    <section class="main">
        @yield('MainSectionContent')

        @yield('MainListItem')
        
    </section>
    <!-- nut go to back -->
    <div class="back-to-top" id="backtop">
        <a href="">
            <img src="{{ asset('assets/clients/image/icon/icon-backtotop.png') }}" alt="back to top" />
        </a>
    </div>
    <script>
        @php
            if(Session::has('notify')){
                $notify = Session::get('notify');
                echo "alert('$notify')";
            }
        @endphp
        @yield('javascript')
    </script>
    <!--footer-->
    @include('client.blocks.footer')
</body>

</html>