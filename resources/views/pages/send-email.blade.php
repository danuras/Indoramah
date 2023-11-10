<!DOCTYPE html> <html> <head> <title>Kirim Pesan</title> <meta charset="utf-8">
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
                    <h1><a href="/">Indoramah</a></h1>
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
    <div class="wrapper row3"  style="background-image:url({{asset('images/demo/backgrounds/01.png')}});">
        <main class="hoc container clear">
            <div class="group btmspace-50 center">
                <div class="two_quarter first mail_box">
                    <h3>Kami Siap Melayani Anda Pesan Sekarang!</h3>
                    <p>Waktu Operasional:</p>
                    <p>Senin s/d Sabtu (Kecuali Hari Libur Nasional)</p>
                    <p>8:00 s/d 17:00 WIB</p>
                    <p>Anda dapat menghubungi kami melalui:</p>
                    <p>Telepon: +62 888-8888-888</p>
                    <p>Whatsapp: +62 888-8888-888</p>
                    <p>Email: admin@gmail.com</p>
                    <p class="text_left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia esse facere voluptatem quam reiciendis quod corrupti alias, cumque aliquid provident magnam voluptates similique ducimus qui. Dolore autem minima reiciendis architecto?</p>
                    <br>
                    <br>
                    <footer><a class="btn"
                            href="https://wa.me/6283102377495?text=Hai%20INDORAMAH !%20Saya%20ingin%20tanya%20seputar%20jasa%20anda."><i
                                class="fa fa-whatsapp my-float"></i> (WA) Hubungi - 0888 8888 8888</a></footer>
                </div>
                <div class="two_quarter  mail_box" id="comments">
                    <h3>Kirim Email</h3>
                    <form action="{{ route('send-message') }}" method="POST">
                        @csrf
                        <div class="group btmspace-50 demo">
                            <div class="two_quarter first">
                                <label for="name" class="text_left">Nama <span>*</span></label>
                                <input type="text" name="name" id="name" value="" size="22" required>
                            </div>
                            <div class="two_quarter">
                                <label for="email" class="text_left">Email <span>*</span></label>
                                <input type="email" name="email" id="email" value="" size="22" required>
                            </div>
                        </div>
                        <div class="group btmspace-50 demo">
                            <div class="two_quarter first">
                                <label for="phone" class="text_left">Nomor Telepon <span>*</span></label>
                                <input type="text" name="phone" id="phone" value="" size="22" required>
                            </div>
                        </div>
                        <div class="block clear">
                            <label for="message" class="text_left">Isi pesan <span>*</span></label>
                            <textarea name="message" id="message" cols="25" rows="10" required></textarea>
                        </div>
                        <div>
                            <input type="submit" name="submit" value="Kirim Pesan">
                            &nbsp;
                            <input type="reset" name="reset" value="Reset">
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success mb-1 mt-1">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
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