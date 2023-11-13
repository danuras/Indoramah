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
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('home') }}#services">Jasa & Produk</a></li>
                    <li><a href="{{ route('customer') }}">Pelanggan</a></li>
                    <li><a href="{{ route('home') }}#testimonies">Testimoni</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('home') }}#location">Lokasi</a></li>
                </ul>
            </div>
            <div class="one_quarter" style = "width: 100px;">
                <h6 class="title">Akun media sosial</h6>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_social_media"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_social_media"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_social_media"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_social_media"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_social_media"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_social_media"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
                    </div>
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

</body>

</html>
