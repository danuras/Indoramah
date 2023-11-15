<!DOCTYPE html>
<html>

<head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
    <style>
        h3 {
            color: <?php echo $color->common_text_color; ?>;
        }
    </style>
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

            <div class="btmspace-50 center">
                <h3 class="btmspace-10">{{ $title }}</h3>
            </div>
            @for ($i = 0; $i < sizeof($cards) / 3; $i++)
                <div class="group btmspace-50 center">
                    @if (isset($cards[$i*3]))
                        <div class="one_third first" id = 'portfolio_card'>
                            <figure><img src="{{ asset($cards[$i*3]->image_url) }}" alt=""></figure>
                            <br>
                            <div class="w-100 text-left">
                                {!! $cards[$i*3]->text !!}
                            </div>
                            <footer><a class="btn inverse" href="{{ $cards[$i*3]->link }}">Selengkapnya</a></footer>
                        </div>
                    @else
                        <div class="one_third">
                        </div>
                    @endif
                    @if (isset($cards[$i*3+1]))
                        <div class="one_third" id = 'portfolio_card'>
                            <figure><img src="{{ asset($cards[$i*3+1]->image_url) }}" alt=""></figure>
                            <br>
                            <div class="w-100 text-left">
                                {!! $cards[$i*3+1]->text !!}
                            </div>
                            <footer><a class="btn inverse" href="{{ $cards[$i*3+1]->link }}">Selengkapnya</a></footer>
                        </div>
                    @else
                        <div class="one_third">
                        </div>
                    @endif
                    @if (isset($cards[$i*3+2]))
                        <div class="one_third" id = 'portfolio_card'>
                            <figure><img src="{{ asset($cards[$i*3+2]->image_url) }}" alt=""></figure>
                            <br>
                            <div class="w-100 text-left">
                                {!! $cards[$i*3+2]->text !!}
                            </div>
                            <footer><a class="btn inverse" href="{{ $cards[$i*3+2]->link }}">Selengkapnya</a></footer>
                        </div>
                    @else
                        <div class="one_third">
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
    <!--JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
