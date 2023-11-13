<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
</head>

<body id="top">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <div class="bgded overlay" style="background-image:url({{ asset('images/demo/backgrounds/01.png') }});">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="{{ route('home') }}">Indoramah</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a class="drop" href="#">Tentang Kami</a>
                            <ul>
                                <li>
                                    <a href="{{ route('company-profile') }}">Profil Perusahaan</a>
                                </li>
                                <li>
                                    <a href="{{ route('advantage') }}">Keunggulan Indoramah</a>
                                </li>
                                <li>
                                    <a href="{{ route('order-step') }}">Cara Pemesanan</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('home') }}#services">Jasa & Produk</a></li>
                        <li><a href="{{ route('customer') }}">Pelanggan</a></li>
                        <li><a href="{{ route('home') }}#testimonies">Testimoni</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('home') }}#location">Lokasi</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>


</body>

</html>
