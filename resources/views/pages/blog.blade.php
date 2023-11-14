<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
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

    <!-- Bagian list blog -->
    <div class="wrapper row3" id="blog">
        <section class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Blog</h3>
            </div>
            <div class="latest">
                @for ($i = 0; $i < sizeof($blogs) / 2; $i++)
                    @if (isset($blogs[$i * 2]))
                        <article class="clear">
                            <div class="one_half first"><a class="iblock borderedbox inspace-10" href=""><img
                                        src="{{ asset($blogs[$i * 2]->image_url) }}" alt=""></a></div>
                            <div class="one_half">
                                <h3 class="heading">{{ $blogs[$i * 2]->title }}</h3>
                                <ul class="nospace meta">
                                    <li><time
                                            datetime="{{ $blogs[$i * 2]->date_published }}">{{ $blogs[$i * 2]->date_published }}</time>
                                    </li>
                                    <li>Oleh {{ $blogs[$i * 2]->author }}</li>
                                </ul>
                                <p>{{ substr($blogs[$i * 2]->text, 0, 400) }}&hellip;</p>
                                <footer>
                                    <a class="btn" href="{{ $blogs[$i * 2]->link }}">Baca</a>
                                </footer>
                            </div>
                        </article>
                    @endif
                    @if (isset($blogs[$i * 2 + 1]))
                        <article class="clear">
                            <div class="one_half first">
                                <h3 class="heading">{{ $blogs[$i * 2 + 1]->title }}</h3>
                                <ul class="nospace meta">
                                    <li><time
                                            datetime="{{ $blogs[$i * 2 + 1]->date_published }}">{{ $blogs[$i * 2 + 1]->date_published }}</time>
                                    </li>
                                    <li>Oleh {{ $blogs[$i * 2 + 1]->author }}</li>
                                </ul>
                                <p>{{ substr($blogs[$i * 2 + 1]->text, 0, 400) }}&hellip;</p>
                                <footer>
                                    <a class="btn" href="{{ $blogs[$i * 2 + 1]->link }}">Baca</a>
                                </footer>
                            </div>
                            <div class="one_half">
                                <a class="iblock borderedbox inspace-10" href="">
                                    <img src="{{ asset($blogs[$i * 2 + 1]->image_url) }}" alt="">
                                </a>
                            </div>
                        </article>
                    @endif
                @endfor
            </div>
            <div class="text-xs-center">
                {!! $blogs->links('vendor.pagination.bootstrap-4') !!}
            </div>
            <br><br>
            <div class="clear"></div>
        </section>
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
