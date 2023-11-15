<!DOCTYPE html>
<html>

<head>
    <title>Pelanggan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
</head>

<body id="top">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Bagian Header -->
    @include('components.small-heading-web', [
        'web_attribute' => $web_attribute,
        'navigations' => $navigations,
        'card_boxes' => $card_boxes,
        'color' => $color,
    ])
    <div class="wrapper row3" id ="services">
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">{{ $title }}</h3>
            </div>
            @for ($i = 0; $i < sizeof($cards) / 4; $i++)
                <div class="group btmspace-50 center">
                    @if (isset($cards[$i * 4]))
                        <div class="one_quarter first">
                            <a
                                href="{{ route('card-content', [$cards[$i * 4]->title, $cards[$i * 4]->content_type, $cards[$i * 4]->id]) }}">
                                <div class="image-container">
                                    <img src="{{ asset($cards[$i * 4]->image_url) }}" alt="Deskripsi Gambar">
                                    <div class="image-text">{{ $cards[$i * 4]->title }}</div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="one_quarter first">
                        </div>
                    @endif
                    @if (isset($cards[$i * 4 + 1]))
                        <div class="one_quarter">
                            <a
                                href="{{ route('card-content', [$cards[$i * 4 + 1]->title, $cards[$i * 4 + 1]->content_type, $cards[$i * 4 + 1]->id]) }}">
                                <div class="image-container">
                                    <img src="{{ asset($cards[$i * 4 + 1]->image_url) }}" alt="Deskripsi Gambar">
                                    <div class="image-text">{{ $cards[$i * 4 + 1]->title }}</div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="one_quarter">
                        </div>
                    @endif
                    @if (isset($cards[$i * 4 + 2]))
                        <div class="one_quarter">
                            <a
                                href="{{ route('card-content', [$cards[$i * 4 + 2]->title, $cards[$i * 4 + 2]->content_type, $cards[$i * 4 + 2]->id]) }}">
                                <div class="image-container">
                                    <img src="{{ asset($cards[$i * 4 + 2]->image_url) }}" alt="Deskripsi Gambar">
                                    <div class="image-text">{{ $cards[$i * 4 + 2]->title }}</div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="one_quarter">
                        </div>
                    @endif
                    @if (isset($cards[$i * 4 + 3]))
                        <div class="one_quarter">
                            <a
                                href="{{ route('card-content', [$cards[$i * 4 + 3]->title, $cards[$i * 4 + 3]->content_type, $cards[$i * 4 + 3]->id]) }}">
                                <div class="image-container">
                                    <img src="{{ asset($cards[$i * 4 + 3]->image_url) }}" alt="Deskripsi Gambar">
                                    <div class="image-text">{{ $cards[$i * 4 + 3]->title }}</div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="one_quarter">
                        </div>
                    @endif
                </div>
            @endfor
            
            <div class="text-xs-center">
                {!! $cards->links('vendor.pagination.bootstrap-4') !!}
            </div>
            <div class="clear"></div>
        </main>
    </div>

    @include('components.footer', [
        'web_attribute' => $web_attribute,
        'contact' => $contact,
        'navigations' => $navigations,
        'social_media' => $social_media,
    ])

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
