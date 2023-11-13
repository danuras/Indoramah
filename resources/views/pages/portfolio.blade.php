<!DOCTYPE html> <html> <head> <title>Portfolio</title> <meta charset="utf-8"> <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    
    <link href="{{asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" /> </head> <body id="top"> <link
    rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"> </script>
        <!-- Bagian Header -->
    <div class="bgded overlay" style="background-image:url({{asset('images/demo/backgrounds/01.png')}});">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="{{route('home')}}">Indoramah</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a class="drop" href="#">Tentang Kami</a>
                            <ul>
                                <li>
                                    <a href="{{route('company-profile')}}">Profil Perusahaan</a>
                                </li>
                                <li>
                                    <a href="{{route('advantage')}}">Keunggulan Indoramah</a>
                                </li>
                                <li>
                                    <a href="{{route('order-step')}}">Cara Pemesanan</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                        <li><a href="{{route('home')}}#services">Jasa & Produk</a></li>
                        <li><a href="{{route('customer')}}">Pelanggan</a></li>
                        <li><a href="{{route('home')}}#testimonies">Testimoni</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('home')}}#location">Lokasi</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
        <div class="wrapper row3" id = 'portfolio'>
        <main class="hoc container clear">
            
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Portfolio</h3>
            </div>
            <div class="group btmspace-50 center"> <div class="one_third first" id='portfolio_card'> <figure><img
                    src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                <br>
                <div class="w-100 text-left">
                <b>Proyek:</b>
                <p>Nama Proyek</p>
                <br>
                <b>Lokasi:</b>
                <p>Nama Lokasi</p>
                <br>
                <b>Produk terinstall:</b>
                <p>produk-1</p>
                <p>produk-2</p>
                <p>produk-3</p>
            </div>
            <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
            </div>
            <div class="one_third" id='portfolio_card'>
                <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                <br>
                <div class="w-100 text-left">
                    <b>Proyek:</b>
                    <p>Nama Proyek</p>
                    <br>
                    <b>Lokasi:</b>
                    <p>Nama Lokasi</p>
                    <br>
                    <b>Produk terinstall:</b>
                    <p>produk-1</p>
                    <p>produk-2</p>
                    <p>produk-3</p>
                </div>
                <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
            </div>
            <div class="one_third" id='portfolio_card'>
                <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                <br>
                <div class="w-100 text-left">
                    <b>Proyek:</b>
                    <p>Nama Proyek</p>
                    <br>
                    <b>Lokasi:</b>
                    <p>Nama Lokasi</p>
                    <br>
                    <b>Produk terinstall:</b>
                    <p>produk-1</p>
                    <p>produk-2</p>
                    <p>produk-3</p>
                </div>
                <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
            </div>
            </div>
            <div class="group btmspace-50 center">
                <div class="one_third first" id='portfolio_card'>
                    <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                    <br>
                    <div class="w-100 text-left">
                        <b>Proyek:</b>
                        <p>Nama Proyek</p>
                        <br>
                        <b>Lokasi:</b>
                        <p>Nama Lokasi</p>
                        <br>
                        <b>Produk terinstall:</b>
                        <p>produk-1</p>
                        <p>produk-2</p>
                        <p>produk-3</p>
                    </div>
                    <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
                </div>
                <div class="one_third" id='portfolio_card'>
                    <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                    <br>
                    <div class="w-100 text-left">
                        <b>Proyek:</b>
                        <p>Nama Proyek</p>
                        <br>
                        <b>Lokasi:</b>
                        <p>Nama Lokasi</p>
                        <br>
                        <b>Produk terinstall:</b>
                        <p>produk-1</p>
                        <p>produk-2</p>
                        <p>produk-3</p>
                    </div>
                    <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
                </div>
                <div class="one_third" id='portfolio_card'>
                    <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                    <br>
                    <div class="w-100 text-left">
                        <b>Proyek:</b>
                        <p>Nama Proyek</p>
                        <br>
                        <b>Lokasi:</b>
                        <p>Nama Lokasi</p>
                        <br>
                        <b>Produk terinstall:</b>
                        <p>produk-1</p>
                        <p>produk-2</p>
                        <p>produk-3</p>
                    </div>
                    <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
                </div>
            </div>
            <div class="group btmspace-50 center">
                <div class="one_third first" id='portfolio_card'>
                    <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                    <br>
                    <div class="w-100 text-left">
                        <b>Proyek:</b>
                        <p>Nama Proyek</p>
                        <br>
                        <b>Lokasi:</b>
                        <p>Nama Lokasi</p>
                        <br>
                        <b>Produk terinstall:</b>
                        <p>produk-1</p>
                        <p>produk-2</p>
                        <p>produk-3</p>
                    </div>
                    <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
                </div>
                <div class="one_third" id='portfolio_card'>
                    <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                    <br>
                    <div class="w-100 text-left">
                        <b>Proyek:</b>
                        <p>Nama Proyek</p>
                        <br>
                        <b>Lokasi:</b>
                        <p>Nama Lokasi</p>
                        <br>
                        <b>Produk terinstall:</b>
                        <p>produk-1</p>
                        <p>produk-2</p>
                        <p>produk-3</p>
                    </div>
                    <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
                </div>
                <div class="one_third" id='portfolio_card'>
                    <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt=""></figure>
                    <br>
                    <div class="w-100 text-left">
                        <b>Proyek:</b>
                        <p>Nama Proyek</p>
                        <br>
                        <b>Lokasi:</b>
                        <p>Nama Lokasi</p>
                        <br>
                        <b>Produk terinstall:</b>
                        <p>produk-1</p>
                        <p>produk-2</p>
                        <p>produk-3</p>
                    </div>
                    <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer>
                </div>
            </div>
            <div class="clear"></div>
        </main>
        </div>
        @include('components.footer')
</div >


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!--JAVASCRIPTS -->
    <script src="{{asset('layout/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.backtotop.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>