<!DOCTYPE html> <html> <head> <title>Merciano</title> <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
                    <h1><a href="/">Indoramah</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="/#">Home</a></li>
                        <li><a class="drop" href="#">Tentang Kami</a>
                            <ul>
                                <li>
                                    <a href="company-profile">Profil Perusahaan</a>
                                </li>
                                <li>
                                    <a href="advantage">Keunggulan Indoramah</a>
                                </li>
                                <li>
                                    <a href="order-step">Cara Pemesanan</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="portfolio">Portfolio</a></li>
                        <li><a href="/#services">Jasa & Produk</a></li>
                        <li><a href="customer">Pelanggan</a></li>
                        <li><a href="/#testimonies">Testimoni</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="/#location">Lokasi</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>
    <div class="wrapper row3" id="customers">
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Standard Operating Procedure (SOP) Proses Pemesanan Produk Indoramah
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat omnis aliquam porro odio laborum
                    dolorum nulla cupiditate ipsa velit voluptate.</p>
                    <br><br>
                <div class="group btmspace-50 demo">
                    <div class="one_quarter first">
                        <figure><img class="circle" src="images/demo/60x60.png" alt=""></figure>
                        <br>
                        <p>1. langkah pertama</p>
                    </div>
                    <div class="one_quarter">
                        <figure><img class="circle" src="images/demo/60x60.png" alt=""></figure>
                        <br>
                        <p>1. langkah kedua</p>
                    </div>
                    <div class="one_quarter">
                        <figure><img class="circle" src="images/demo/60x60.png" alt=""></figure>
                        <br>
                        <p>1. langkah ketiga</p>
                    </div>
                    <div class="one_quarter">
                        <figure><img class="circle" src="images/demo/60x60.png" alt=""></figure>
                        <br>
                        <p>1. langkah keempat</p>
                    </div>
                </div>
            </div>

            <div class="clear"></div>
        </main>
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
                    <li><a href="/#">Home</a></li>
                    <li><a href="portfolio">Portfolio</a></li>
                    <li><a href="/#services">Jasa & Produk</a></li>
                    <li><a href="customer">Pelanggan</a></li>
                    <li><a href="/#testimonies">Testimoni</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="/#location">Lokasi</a></li>
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
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>