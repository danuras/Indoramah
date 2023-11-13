<!DOCTYPE html> <html>

<head> <title>Indoramah</title> <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> <link
        href="{{asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all"> <link
        href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
</head> 
<body id="top">   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bagian 1 -->
    <div class="bgded overlay" style="background-image:url({{asset('images/demo/backgrounds/01.png')}});">
        <div class="wrapper">
            <div id="pageintro" class="hoc clear">
                <article>
                    <h2 class="heading">Consectetur adipiscing elit etiam (heading utama)</h2>
                    <p>Pretium ullamcorper velit ut lobortis duis non (sub heading)</p>
                    <footer><a class="call_to_action" href="https://wa.me/6283102377495?text=Hai%20INDORAMAH !%20Saya%20ingin%20tanya%20seputar%20jasa%20anda."><i class="fa fa-whatsapp my-float"></i> (WA) Hubungi - 0888 8888 8888</a></footer>
                    <footer><a class="call_to_action" href="#services"><i class="fa fa-cube"></i> Info jasa & Produk</a></footer>
                    <footer><a class="call_to_action" href="{{route('send-email')}}"><i class="fa fa-envelope-o"></i> Kirim Email - email@gmail.com</a></footer>
                </article>
            </div>
        </div>
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="{{route('home')}}">Indoramah</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="#">Home</a></li>
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
    <!-- Bagian 2 (portfolio)-->
    <div class="wrapper row3" id = 'portfolio'>
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Portfolio</h3>
            </div>
            <div class="group btmspace-50 center">
                <div class="one_third first" id = 'portfolio_card'>
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
                <div class="one_third" id = 'portfolio_card'>
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
                    <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer></div>
                <div class="one_third" id = 'portfolio_card'>
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
                    <footer><a class="btn inverse" href="https://youtu.be/D0UnqGm_miA?si=D6-iTD8XRNNYgRzb">Video Proyek</a></footer></div>
            </div>
            <p class="center"><a class="btn" href="portfolio">Tampilkan Semua</a></p>
            <div class="clear"></div>
        </main>
    </div>

    <!-- Bagian 2 -->
    <div class="wrapper row4" id ="services">
        <main class="hoc container clear">
            <div class="group btmspace-50 center">
                <div class="group btmspace-50 demo">
                    <div class="one_quarter first">
                        <p class= 'big_text'><b>Brand Yang Bisa Anda Andalkan</b></p><br>
                    </div>
                    <div class="two_quarter">
                        <p class = 'left_text'>masukan misi perusahaan. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium repellat, voluptatum excepturi nostrum repudiandae voluptate cum minima iusto quasi soluta cupiditate quidem consequatur quas quis autem perspiciatis eos nam laudantium exercitationem! Reiciendis, autem blanditiis quia voluptatibus omnis in magni earum magnam laudantium ipsum eum nam quaerat perspiciatis. Tempore necessitatibus delectus, quos quasi beatae et pariatur possimus eligendi aliquid officiis ipsam eos repellendus voluptate dignissimos repellat, perferendis minus porro suscipit! Ea sapiente aperiam unde autem numquam itaque nesciunt asperiores est saepe tempora optio fugiat praesentium illum, repudiandae voluptates natus, facilis distinctio non iure veritatis quasi? Quod deserunt adipisci illo facere eos.</p>
                    </div>
                    <div class="one_quarter">
                        <p class="center"><a class="btn inverse" href="advantage">Keuntungan</a></p>
                    </div>
                </div>
            </div>
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
                    <a href="services/services-example-2">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 5</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example-2">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 6</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example-2">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 7</div>
                        </div>
                    </a>
                </div>
                <div class="one_quarter">
                    <a href="services/services-example-2">
                        <div class="image-container">
                            <img src="{{asset('images/demo/gallery/02.png')}}" alt="Deskripsi Gambar">
                            <div class="image-text">Jasa 8</div>
                        </div>
                    </a>
                </div>
            </div>
            <p class="center"><a class="btn inverse" href="services">Tampilkan Semua</a></p>
            <div class="clear"></div>
        </main>
    </div>
   
    <!-- Bagian 2 -->
    <div class="wrapper row3" id = "customers">
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Pelanggan Kami</h3>
            </div>
            <ul class="nospace clear services">
                <li class="one_quarter first">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                            <figcaption>Nama-Pelanggan-1</figcaption>
                        </figure>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                            <figcaption>Nama-Pelanggan-2</figcaption>
                        </figure>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                            <figcaption>Nama-Pelanggan-3</figcaption>
                        </figure>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                            <figcaption>Nama-Pelanggan-4</figcaption>
                        </figure>
                </li>
                <li class="one_quarter first">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                            <figcaption>Nama-Pelanggan-5</figcaption>
                        </figure>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                            <figcaption>Nama-Pelanggan-6</figcaption>
                        </figure>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                            <figcaption>Nama-Pelanggan-7</figcaption>
                        </figure>
                </li>
                <li class="one_quarter">
                        <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="">
                            <figcaption>Nama-Pelanggan-8</figcaption>
                        </figure>
                </li>
            </ul>
            <p class="center"><a class="btn" href="customer">Tampilkan Semua</a></p>
            <div class="clear"></div>
        </main>
    </div>

<div class="carousel carousel slide row3" data-ride="carousel" id = "testimonies">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#testimonies" data-slide-to="0" class="active"></li>
        <li data-target="#testimonies" data-slide-to="1"></li>
        <li data-target="#testimonies" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Bagian 3 -->
            <div class="wrapper bgded overlay" style="background-image:url({{asset('images/demo/backgrounds/02.png')}});">
                <div class="hoc container clear">
                    <div class="testimonial clear">
                        <blockquote>Est vitae varius vivamus enim mi egestas at lacinia et faucibus eget tellus aenean nec massa
                            semper luctus quam non cursus purus donec nec sollicitudin mauris at pulvinar lectus nunc eget mi a.
                        </blockquote>
                        <figure><img class="circle" src="{{asset('images/demo/60x60.png')}}" alt="">
                            <figcaption><strong>A.Doe</strong><br>
                                <em>Job / Title</em>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">  
            <!-- Bagian 3 -->
            <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
                <div class="hoc container clear">
                    <div class="testimonial clear">
                        <blockquote>Est vitae varius vivamus enim mi egestas at lacinia et faucibus eget tellus aenean nec massa
                            semper luctus quam non cursus purus donec nec sollicitudin mauris at pulvinar lectus nunc eget mi a.
                        </blockquote>
                        <figure><img class="circle" src="{{asset('images/demo/60x60.png')}}" alt="">
                            <figcaption><strong>A.Doe</strong><br>
                                <em>Job / Title</em>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">  
            <!-- Bagian 3 -->
            <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
                <div class="hoc container clear">
                    <div class="testimonial clear">
                        <blockquote>Est vitae varius vivamus enim mi egestas at lacinia et faucibus eget tellus aenean nec massa
                            semper luctus quam non cursus purus donec nec sollicitudin mauris at pulvinar lectus nunc eget mi a.
                        </blockquote>
                        <figure><img class="circle" src="{{asset('images/demo/60x60.png')}}" alt="">
                            <figcaption><strong>A.Doe</strong><br>
                                <em>Job / Title</em>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#testimonies" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Sebelumnya</span>
    </a>
    <a class="right carousel-control" href="#testimonies" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Berikutnya</span>
    </a>
</div>

<!-- Bagian 4 (list blog) -->
<div class="wrapper row3" id="blog">
    <section class="hoc container clear">
        <div class="btmspace-50 center">
            <h3 class="btmspace-10">Blog</h3>
        </div>
        <div class="latest">
            <article class="clear">
                <div class="one_half first"><a class="iblock borderedbox inspace-10" href="#"><img
                            src="{{asset('images/demo/540x333.png')}}" alt=""></a></div>
                <div class="one_half">
                    <h3 class="heading">Elementum scelerisque nisi id sollicitudin tellus vivamus id convallis
                        tellus</h3>
                    <ul class="nospace meta">
                        <li>
                            <time datetime="2045-04-06">6<sup>th</sup> April 2045</time>
                        </li>
                        <li>by <a href="https://www.danforblog.com/author/danforblog/">Admin</a></li>
                    </ul>
                    <p>Nullam tristique nulla sit amet tortor eleifend vitae tempor est mattis praesent aliquam
                        mauris sem id convallis ipsum posuere vel cras porttitor turpis turpis tincidunt hendrerit
                        urna&hellip;</p>
                    <footer><a class="btn" href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a></footer>
                </div>
            </article>
            <article class="clear">
                <div class="one_half first">
                    <h3 class="heading">Aliquam vel quisque nec dolor ullamcorper lacinia ut nec dictum ipsum</h3>
                    <ul class="nospace meta">
                        <li>
                            <time datetime="2045-04-05">5<sup>th</sup> April 2045</time>
                        </li>
                        <li>by <a href="https://www.danforblog.com/author/danforblog/">Admin</a></li>
                    </ul>
                    <p>Sed vulputate mauris proin fermentum vitae diam non hendrerit vivamus pharetra interdum augue
                        ut dignissim aenean placerat lectus ullamcorper malesuada sodales massa urna
                        pulvinar&hellip;</p>
                    <footer><a class="btn" href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a></footer>
                </div>
                <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img
                            src="{{asset('images/demo/540x333.png')}}" alt=""></a></div>
            </article>
        </div>
        <br><br>
        <p class="center"><a class="btn" href="blog">Tampilkan Semua</a></p>
        <div class="clear"></div>
    </section>
</div>


<!-- Bagian 4 (maps) -->
<div class="wrapper row4" id = "location">
    <section class="hoc container center clear">
        <h3 class="btmspace-10">Lokasi</h3>
        <p class="nospace">Sed at augue consectetur ultricies elit semper facilisis quam aliquam</p>
    </section>
    <div class="gmap clear">

        <iframe id='gmapcanvas'
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63273.86296260176!2d110.26389765952453!3d-7.6166475801990705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8b1c5e2d7805%3A0xb323b526d2f7ce2e!2sSMK%20Negeri%201%20Salam!5e0!3m2!1sen!2sid!4v1699502834176!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
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