<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body id="top">

    <div class="wrapper row4" id="footer">
        <footer id="footer" class="hoc clear">
            <div class="one_quarter first">
                <h6 class="title">Alamat dan Kontak</h6>
                <address class="btmspace-30">
                    {{ $contact->address }}
                </address>
                <ul class="nospace">
                    <li class="btmspace-10"><i class="fa fa-phone"></i> {{ $contact->call_number }}</li>
                    <li><i class="fa fa-envelope-o"></i> {{ $contact->email }}</li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="title">Tentang</h6>
                <article>
                    <h2 class="nospace font-x1">{{ $web_attribute->title }}</h2>
                    <p>{{ $web_attribute->short_description }}</p>
                </article>
            </div>
            <div class="one_quarter">
                <h6 class="title">Menu</h6>
                <ul class="nospace linklist footer_menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    @if (in_array('company_profile', $navigations))
                        <li><a href="{{ route('company-profile') }}">Profil Perusahaan</a></li>
                    @endif
                    @if (in_array('advantage', $navigations))
                        <li><a href="{{ route('advantage') }}">Keunggulan Indoramah</a></li>
                    @endif
                    @if (in_array('order_flow', $navigations))
                        <li><a href="{{ route('order-step') }}">Cara Pemesanan</a></li>
                    @endif
                    @if (in_array('testimony', $navigations))
                        <li><a href="{{ route('home') }}#testimonies">Testimoni</a></li>
                    @endif
                    @if (in_array('blog', $navigations))
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                    @endif
                    @if (in_array('location', $navigations))
                        <li><a href="{{ route('home') }}#location">Lokasi</a></li>
                    @endif
                </ul>
            </div>
            <div class="one_quarter" style = "width: 100px;">
                <h6 class="title">Akun media sosial</h6>
                <div class="row">
                    <div class="col-md-4">
                        @if (isset($social_media->facebook))
                            <div class="box_social_media">
                                <a href="{{ $social_media->facebook }}">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </div>
                        @else
                            <div class="box_social_media_no_active">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if (isset($social_media->twitter))
                            <div class="box_social_media">
                                <a href="{{ $social_media->twitter }}">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </div>
                        @else
                            <div class="box_social_media_no_active">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if (isset($social_media->linkedin))
                            <div class="box_social_media">
                                <a href="{{ $social_media->linkedin }}">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        @else
                            <div class="box_social_media_no_active">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if (isset($social_media->instagram))
                            <div class="box_social_media">
                                <a href="{{ $social_media->instagram }}">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        @else
                            <div class="box_social_media_no_active">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if (isset($social_media->google_plus))
                            <div class="box_social_media">
                                <a href="{{ $social_media->google_plus }}">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        @else
                            <div class="box_social_media_no_active">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        @if (isset($social_media->youtube))
                            <div class="box_social_media">
                                <a href="{{ $social_media->youtube }}">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        @else
                            <div class="box_social_media_no_active">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Footer -->
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <p class="fl_left">{{ $web_attribute->long_title }}</p>
        </div>
    </div>

</body>

</html>
