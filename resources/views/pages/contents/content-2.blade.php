<!DOCTYPE html>
<html>

<head>
    <title>Jasa & Produk</title>
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

    <div class="wrapper row3" id = 'portfolio'>
        <main class="hoc container clear">
            <div class="btmspace-50 left">
                <h3 class="btmspace-10">{{ $card->title }}</h3>
            </div>
            <div class="group btmspace-50 left">
                <div class="three_quarter first">

                    <p>{{ $card_type->sub_content_title }}</p>
                </div>
                <div class="one_quarter">
                    <footer><a class="btn"
                            href="https://wa.me/{{ $contact->whatsapp }}?text={{ $card_type->whatsapp_message }}"><i
                                class="fa fa-whatsapp my-float"></i> (WA) Hubungi - {{ $contact->whatsapp }}</a>
                    </footer>
                </div>
            </div>
            @for ($i = 0; $i < sizeof($content_types) / 4; $i++)
                <ul class="nospace clear services content_card_2">
                    @if (isset($content_types[$i * 4]))
                        <li class="one_quarter first">
                            <h3>{{ $content_types[$i * 4]->title }}</h3>
                            {!! $content_types[$i * 4]->text !!}
                        </li>
                    @else
                        <li class="one_quarter first">
                        </li>
                    @endif
                    @if (isset($content_types[$i * 4 + 1]))
                        <li class="one_quarter">
                            <h3>{{ $content_types[$i * 4 + 1]->title }}</h3>
                            {!! $content_types[$i * 4 + 1]->text !!}
                        </li>
                    @else
                        <li class="one_quarter">
                        </li>
                    @endif
                    @if (isset($content_types[$i * 4 + 2]))
                        <li class="one_quarter">
                            <h3>{{ $content_types[$i * 4 + 2]->title }}</h3>
                            {!! $content_types[$i * 4 + 2]->text !!}
                        </li>
                    @else
                        <li class="one_quarter">
                        </li>
                    @endif
                    @if (isset($content_types[$i * 4 + 3]))
                        <li class="one_quarter">
                            <h3>{{ $content_types[$i * 4 + 3]->title }}</h3>
                            {!! $content_types[$i * 4 + 3]->text !!}
                        </li>
                    @else
                        <li class="one_quarter">
                        </li>
                    @endif
                </ul>
            @endfor

            <div class="text-xs-center">
                {!! $content_types->links('vendor.pagination.bootstrap-4') !!}
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
    <!--JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
