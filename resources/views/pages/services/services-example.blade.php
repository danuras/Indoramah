<!DOCTYPE html>
<html>

<head>
    <title>Jasa & Produk</title>
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
                        <li><a href="{{route('home')}}#location">Lokasi</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
    <div class="wrapper row3" id = 'portfolio'>
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">(JUDUL JASA/PRODUK)</h3>
            </div>
            <div class="group btmspace-50 center">
                <div class="two_quarter first">
                    <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="" class="image_left"></figure>
                    <br>
                    <br>
                    <footer><a class="btn" href="https://wa.me/6283102377495?text=Hai%20INDORAMAH !%20Saya%20ingin%20tanya%20seputar%20jasa%20anda."><i class="fa fa-whatsapp my-float"></i> (WA) Hubungi - 0888 8888 8888</a></footer>
                </div>
                <div class="two_quarter">
                    <h3>Judul 1</h3>
                    <p  class="text_left">(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptas doloremque sapiente modi ducimus doloribus dignissimos iusto illo ut quaerat, aliquam, vero accusamus ratione nobis. Eligendi, quod ducimus? Distinctio sed, quos, quod provident illo nobis dolore commodi voluptates fugiat corrupti, eaque unde voluptatum dolorum! Nesciunt officiis excepturi quos beatae, dolorem dicta voluptatibus quis laboriosam voluptatem earum consequatur neque quo ut maiores, incidunt totam atque nobis sequi. Molestiae, ratione iste molestias voluptatum saepe itaque tempore, atque nihil dicta ipsum aliquid odit!</p>
                    <ul>
                        <li><p class="text_left"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>
                        <li><p class="text_left"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>
                        <li><p class="text_left"><u>Lorem ipsum</u> dolor sit, amet consectetur adipisicing elit. Praesentium, aspernatur.</p></li>
                    </ul>
                </div>
            </div>
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">(Sub JUDUL Konten)</h3>
            </div>
            
            <ul class="nospace clear services content_card_1">
                <li class="one_quarter first">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter first">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter first">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter first">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                        </figure>
                        <div class = "w-100 text-left">
                            <b>Judul</b>
                            <p>informasi-1</p>
                            <p>informasi-2</p>
                            <p>informasi-3</p>
                        </div>
                </li>
                
            </ul>
            <div class="clear"></div>
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