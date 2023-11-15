<!DOCTYPE html>
<html>

<head>
    <title>{{ $web_attribute->title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
    @include('components.style-controller', $color)
    
</head>

<body id="top">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @include('components.heading-web', [
        'web_attribute' => $web_attribute,
        'contact' => $contact,
        'navigations' => $navigations,
        'card_boxes' => $card_boxes,
    ])

    @foreach ($web_contents as $wc)
        @if ($wc->content_type == 'card')
            @foreach ($card_boxes as $cb)
                @if ($cb->id == $wc->card_box_id)
                    @if ($cb->card_type == 'card-1')
                        @include('components.card-1-section', ['cb' => $cb, 'rank' => $wc->rank])
                    @elseif($cb->card_type == 'card-2')
                        @include('components.card-2-section', ['cb' => $cb, 'rank' => $wc->rank])
                    @elseif($cb->card_type == 'card-3')
                        @include('components.card-3-section', ['cb' => $cb, 'rank' => $wc->rank])
                    @endif
                @endif
            @endforeach
        @elseif($wc->content_type == 'advantage')
            @include('components.advantage-section', ['advantage'=>$advantage, 'rank' => $wc->rank])
        @elseif($wc->content_type == 'testimony')
            @include('components.testimonies-section', [
                'testimonies' => $testimonies,
                'background_image' => $web_attribute->background_testimonies, 
                'rank' => $wc->rank,
            ])
        @elseif($wc->content_type == 'blog')
            @include('components.blog-section', ['blogs'=>$blogs, 'rank' => $wc->rank])
        @elseif($wc->content_type == 'maps')
            @include('components.maps', ['maps'=>$maps, 'rank' => $wc->rank])
        @endif
    @endforeach

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
