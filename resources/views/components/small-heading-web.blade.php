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
    <div class="bgded overlay" style="background-image:url({{ asset($web_attribute->background_image) }});">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left">
                    <h1><a href="{{ route('home') }}">{{$web_attribute->title}}</a></h1>
                </div>
                <nav id="mainav" class="fl_right">
                    <ul class="clear">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a class="drop" href="#">Tentang Kami</a>
                            <ul>
                                @if(in_array('company_profile', $navigations))
                                    <li>
                                        <a href="{{ route('company-profile') }}">Profil Perusahaan</a>
                                    </li>
                                @endif
                                @if(in_array('advantage', $navigations))
                                    <li>
                                        <a href="{{ route('advantage') }}">Keunggulan Indoramah</a>
                                    </li>
                                @endif
                                @if(in_array('order_flow', $navigations))
                                    <li>
                                        <a href="{{ route('order-step') }}">Cara Pemesanan</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        @if(in_array('testimony', $navigations))
                            <li><a href="{{route('home')}}#testimonies">Testimoni</a></li>
                        @endif
                        @if(in_array('blog', $navigations))
                            <li><a href="{{route('blog')}}">Blog</a></li>
                        @endif

                        @if(in_array('location', $navigations))
                            <li><a href="{{route('home')}}#location">Lokasi</a></li>
                        @endif
                        
                        <li><a class="drop" href="#">Lainnya</a>
                            <ul>
                                @foreach ($card_boxes as $cb)
                                    <li>
                                        <a href="{{route('card-box', [$cb->title, $cb->card_type, $cb->id])}}">{{$cb->title}}</a>
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
