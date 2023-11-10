<!DOCTYPE html> <html> <head>
<title>Blog</title>
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
    <!-- Bagian list blog -->
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
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
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
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                    <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{asset('images/demo/540x333.png')}}" alt=""></a></div>
                </article>
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
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
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
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                    <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{asset('images/demo/540x333.png')}}" alt=""></a></div>
                </article>
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
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
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
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                    <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{asset('images/demo/540x333.png')}}" alt=""></a></div>
                </article>
            </div>
            <br><br>
            <div class="clear"></div>
        </section>
    </div>



    <div class="wrapper row4" id="footer">
        <footer id="footer" class="hoc clear">
            <div class="one_quarter first">
                <h6 class="title">Alamat dan Kontak</h6>
                <address class="btmspace-30">
                    Street Name &amp; Number<br>
                    Town<br>
                    Postcode/Zip
                </address>
                <ul class="nospace">
                    <li class="btmspace-10"><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                    <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="title">Tentang</h6>
                <article>
                    <h2 class="nospace font-x1"><a href="#">Dictum dui quisque</a></h2>
                    <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                    <p>Lacinia gravida accumsan proin tincidunt auctor pharetra mauris id luctus tellus morbi eu magna
                        sit amet.</p>
                </article>
            </div>
            <div class="one_quarter">
                <h6 class="title">Menu</h6>
                <ul class="nospace linklist footer_menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                    <li><a href="{{route('home')}}#services">Jasa & Produk</a></li>
                    <li><a href="{{route('customer')}}">Pelanggan</a></li>
                    <li><a href="{{route('home')}}#testimonies">Testimoni</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('home')}}#location">Lokasi</a></li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="title">Akun media sosial</h6>
                <div class="group btmspace-10 demo">
                    <div class="one_third first box_social_media"><i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                    <div class="one_third box_social_media"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    <div class="one_third box_social_media"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                </div>
                <div class="group btmspace-10 demo">
                    <div class="one_third first box_social_media"><i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <div class="one_third box_social_media"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                    <div class="one_third box_social_media"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Footer -->
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <p class="fl_left">Indoramah Autometic Gate</a></p>
        </div>
    </div>


    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{asset('layout/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.backtotop.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>