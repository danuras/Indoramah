<!DOCTYPE html>
<html>

<head>
    <title>Pelanggan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link href="{{asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
</head>

<body id="top">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
                        <li><a href="{{route('home')}}#location">Lokasi</a></li>s
                    </ul>
                </nav>
            </header>
        </div>
    </div>
    <div class="wrapper row4" id ="services">
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Jasa & Produk Kami</h3>
            </div>
            <div class="group btmspace-50 center">
                <div class="one_quarter first">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 1</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 2</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 3</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 4</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="group btmspace-50 center">
                <div class="one_quarter first">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 5</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 6</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 7</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 8</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="group btmspace-50 center">
                <div class="one_quarter first">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 9</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 10</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 11</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 12</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="group btmspace-50 center">
                <div class="one_quarter first">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 13</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 14</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 15</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 16</div>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>

    @include('components.footer')

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{asset('layout/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.backtotop.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>