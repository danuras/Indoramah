<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body id="top">
    <div class="bgded overlay" style="background-image:url({{ asset($web_attribute->background_image) }});">
        <div class="wrapper">
            <div id="pageintro" class="hoc clear">
                <article>
                    <h2 class="heading" style="">{{ $web_attribute->main_heading }}</h2>
                    <p>{{ $web_attribute->sub_heading }}</p>
                    <footer><a class="call_to_action"
                            href="https://wa.me/{{ $contact->whatsapp }}?text={{ $contact->whatsapp_message }}"><i
                                class="fa fa-whatsapp my-float"></i> (WA) Hubungi - {{ $contact->whatsapp }}</a>
                    </footer>
                    <footer><a class="call_to_action" href="{{ route('send-email') }}"><i class="fa fa-envelope-o"></i>
                            Kirim Email - {{ $contact->email }}</a></footer>
                </article>
            </div>
        </div>
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="{{ route('home') }}">{{ $web_attribute->title }}</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="#">Home</a></li>
                        <li><a class="drop" href="#">Tentang Kami</a>
                            <ul>
                                @if (in_array('company_profile', $navigations))
                                    <li>
                                        <a href="{{ route('company-profile') }}">Profil Perusahaan</a>
                                    </li>
                                @endif
                                @if (in_array('advantage', $navigations))
                                    <li>
                                        <a href="{{ route('advantage') }}">Keunggulan Indoramah</a>
                                    </li>
                                @endif
                                @if (in_array('order_flow', $navigations))
                                    <li>
                                        <a href="{{ route('order-step') }}">Cara Pemesanan</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        @if (in_array('testimony', $navigations))
                            <li><a href="#testimonies">Testimoni</a></li>
                        @endif
                        @if (in_array('blog', $navigations))
                            <li><a href="#blog">Blog</a></li>
                        @endif

                        @if (in_array('location', $navigations))
                            <li><a href="#location">Lokasi</a></li>
                        @endif


                        <li><a class="drop" href="#">Lainnya</a>
                            <ul>
                                @foreach ($card_boxes as $cb)
                                    <li>
                                        <a href="#{{ $cb->title }}">{{ $cb->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
        </div>
    </div>


</body>

</html>
