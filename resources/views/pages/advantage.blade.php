<!DOCTYPE html>
<html>

<head>
    <title>Keunggulan Indoramah</title>
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
    ])

    <div class="wrapper row3" id = 'advantage'>
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Kelebihan Indoramah</h3>
            </div>
            <div class="group btmspace-50 center">
                <div class="two_quarter first">
                    <figure><img src="{{ asset($advantage->image_url) }}" alt="" class="image_left"></figure>
                    <br>
                    <br>
                    <footer><a class="btn"
                            href="https://wa.me/{{ $contact->whatsapp }}?text={{ $contact->whatsapp_message }}"><i
                                class="fa fa-whatsapp my-float"></i> (WA) Hubungi - {{ $contact->whatsapp }}</a>
                    </footer>
                </div>
                @for ($i = 0; $i < 2; $i++)
                    <div class="one_quarter">
                        <div class="group btmspace-50 center">
                            @if (isset($advantage_contents[$i * 2]))
                                <div class="tree_quarter btmspace-30 advantage_card">
                                    <figure><img class="circle" src="{{ asset($advantage_contents[$i * 2]->icon) }}"
                                            alt=""></figure>
                                    <h3>{{ $advantage_contents[$i * 2]->title }}</h3>
                                    <p>{{ $advantage_contents[$i * 2]->text }}</p>
                                </div>
                            @else
                                <div class="tree_quarter btmspace-30 advantage_card">
                                </div>
                            @endif
                            <br>
                            @if (isset($advantage_contents[$i * 2 + 1]))
                                <div class="tree_quarter btmspace-30 advantage_card">
                                    <figure><img class="circle" src="{{ asset($advantage_contents[$i * 2 + 1]->icon) }}"
                                            alt=""></figure>
                                    <h3>{{ $advantage_contents[$i * 2 + 1]->title }}</h3>
                                    <p>{{ $advantage_contents[$i * 2 + 1]->text }}</p>
                                </div>
                            @else
                                <div class="tree_quarter btmspace-30 advantage_card">
                                </div>
                            @endif
                        </div>
                    </div>
                @endfor

            </div>
            <div class="group btmspace-50 center">
                @for ($i = 1; $i < sizeof($advantage_contents) / 4; $i++)
                    @if (isset($advantage_contents[$i * 4]))
                        <div class="one_quarter first btmspace-30 advantage_card">
                            <figure><img class="circle" src="{{ asset($advantage_contents[$i * 4]->icon) }}"
                                    alt=""></figure>
                            <h3>{{ $advantage_contents[$i * 4]->title }}</h3>
                            <p>{{ $advantage_contents[$i * 4]->text }}</p>
                        </div>
                    @else
                        <div class="one_quarter btmspace-30">
                        </div>
                    @endif
                    @if (isset($advantage_contents[$i * 4 + 1]))
                        <div class="one_quarter btmspace-30 advantage_card">
                            <figure><img class="circle" src="{{ asset($advantage_contents[$i * 4 + 1]->icon) }}"
                                    alt=""></figure>
                            <h3>{{ $advantage_contents[$i * 4 + 1]->title }}</h3>
                            <p>{{ $advantage_contents[$i * 4 + 1]->text }}</p>
                        </div>
                    @else
                        <div class="one_quarter btmspace-30">
                        </div>
                    @endif
                    @if (isset($advantage_contents[$i * 4 + 2]))
                        <div class="one_quarter btmspace-30 advantage_card">
                            <figure><img class="circle" src="{{ asset($advantage_contents[$i * 4 + 2]->icon) }}"
                                    alt=""></figure>
                            <h3>{{ $advantage_contents[$i * 4 + 2]->title }}</h3>
                            <p>{{ $advantage_contents[$i * 4 + 2]->text }}</p>
                        </div>
                    @else
                        <div class="one_quarter btmspace-30">
                        </div>
                    @endif
                    @if (isset($advantage_contents[$i * 4 + 3]))
                        <div class="one_quarter btmspace-30 advantage_card">
                            <figure><img class="circle" src="{{ asset($advantage_contents[$i * 4 + 3]->icon) }}"
                                    alt=""></figure>
                            <h3>{{ $advantage_contents[$i * 4 + 3]->title }}</h3>
                            <p>{{ $advantage_contents[$i * 4 + 3]->text }}</p>
                        </div>
                    @else
                        <div class="one_quarter btmspace-30">
                        </div>
                    @endif
                @endfor
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
