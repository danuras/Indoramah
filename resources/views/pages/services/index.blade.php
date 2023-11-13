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
    @include('components.small-heading-web')
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