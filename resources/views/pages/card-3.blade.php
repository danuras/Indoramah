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
        'color' => $color,
        'card_boxes' => $card_boxes,
    ])

    <div class="wrapper row3" id = "customers">
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">{{$title}}</h3>
            </div>
            @for ($i = 0; $i < sizeof($cards) / 4; $i++)
                <ul class="nospace clear services">
                    @if (isset($cards[$i * 4]))
                        <li class="one_quarter first">
                            <figure><img src="{{ asset($cards[$i * 4]->image_url) }}" alt="">
                                <figcaption>{{ $cards[$i * 4]->title }}</figcaption>
                            </figure>
                        </li>
                    @else
                        <li class="one_quarter first">
                        </li>
                    @endif
                    @if (isset($cards[$i * 4 + 1]))
                        <li class="one_quarter">
                            <figure><img src="{{ asset($cards[$i * 4 + 1]->image_url) }}" alt="">
                                <figcaption>{{ $cards[$i * 4 + 1]->title }}</figcaption>
                            </figure>
                        </li>
                    @else
                        <li class="one_quarter ">
                        </li>
                    @endif
                    @if (isset($cards[$i * 4 + 2]))
                        <li class="one_quarter">
                            <figure><img src="{{ asset($cards[$i * 4 + 2]->image_url) }}" alt="">
                                <figcaption>{{ $cards[$i * 4 + 2]->title }}</figcaption>
                            </figure>
                        </li>
                    @else
                        <div class="one_quarter ">
                        </div>
                    @endif
                    @if (isset($cards[$i * 4 + 3]))
                        <li class="one_quarter">
                            <figure><img src="{{ asset($cards[$i * 4 + 3]->image_url) }}" alt="">
                                <figcaption>{{ $cards[$i * 4 + 3]->title }}</figcaption>
                            </figure>
                        </li>
                    @else
                        <li class="one_quarter ">
                        </li>
                    @endif
                </ul>
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
