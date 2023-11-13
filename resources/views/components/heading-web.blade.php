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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <div class="bgded overlay" style="background-image:url({{ asset('images/demo/backgrounds/01.png') }});">
        <div class="wrapper">
            <div id="pageintro" class="hoc clear">
                <article>
                    <h2 class="heading">Consectetur adipiscing elit etiam (heading utama)</h2>
                    <p>Pretium ullamcorper velit ut lobortis duis non (sub heading)</p>
                    <footer><a class="call_to_action"
                            href="https://wa.me/6283102377495?text=Hai%20INDORAMAH !%20Saya%20ingin%20tanya%20seputar%20jasa%20anda."><i
                                class="fa fa-whatsapp my-float"></i> (WA) Hubungi - 0888 8888 8888</a></footer>
                    <footer><a class="call_to_action" href="{{ route('send-email') }}"><i class="fa fa-envelope-o"></i>
                            Kirim Email - email@gmail.com</a></footer>
                </article>
            </div>
        </div>
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="{{ route('home') }}">Indoramah</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="#">Home</a></li>
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

                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#services">Jasa & Produk</a></li>
                        <li><a href="#customers">Pelanggan</a></li>
                        <li><a href="#testimonies">Testimoni</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#location">Lokasi</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>


    <!--JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
