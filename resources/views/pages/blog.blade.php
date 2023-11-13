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
    @include('components.small-heading-web')

    <!-- Bagian list blog -->
    <div class="wrapper row3" id="blog">
        <section class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Blog</h3>
            </div>
            <div class="latest">
                <article class="clear">
                    <div class="one_half first"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{ asset('images/demo/540x333.png') }}" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Elementum scelerisque nisi id sollicitudin tellus vivamus id convallis
                            tellus</h3>
                        <ul class="nospace meta">
                            <li>
                                <time datetime="2045-04-06">6<sup>th</sup> April 2045</time>
                            </li>
                            <li>by <a href="https://www.danforblog.com/author/danforblog/">Admin</a></li>
                        </ul>
                        <p>Nullam tristique nulla sit amet tortor eleifend vitae tempor est mattis praesent aliquam
                            mauris sem id convallis ipsum posuere vel cras porttitor turpis turpis tincidunt hendrerit
                            urna&hellip;</p>
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                </article>
                <article class="clear">
                    <div class="one_half first">
                        <h3 class="heading">Aliquam vel quisque nec dolor ullamcorper lacinia ut nec dictum ipsum</h3>
                        <ul class="nospace meta">
                            <li>
                                <time datetime="2045-04-05">5<sup>th</sup> April 2045</time>
                            </li>
                            <li>by <a href="https://www.danforblog.com/author/danforblog/">Admin</a></li>
                        </ul>
                        <p>Sed vulputate mauris proin fermentum vitae diam non hendrerit vivamus pharetra interdum augue
                            ut dignissim aenean placerat lectus ullamcorper malesuada sodales massa urna
                            pulvinar&hellip;</p>
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                    <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{ asset('images/demo/540x333.png') }}" alt=""></a></div>
                </article>
                <article class="clear">
                    <div class="one_half first"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{ asset('images/demo/540x333.png') }}" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Elementum scelerisque nisi id sollicitudin tellus vivamus id convallis
                            tellus</h3>
                        <ul class="nospace meta">
                            <li>
                                <time datetime="2045-04-06">6<sup>th</sup> April 2045</time>
                            </li>
                            <li>by <a href="https://www.danforblog.com/author/danforblog/">Admin</a></li>
                        </ul>
                        <p>Nullam tristique nulla sit amet tortor eleifend vitae tempor est mattis praesent aliquam
                            mauris sem id convallis ipsum posuere vel cras porttitor turpis turpis tincidunt hendrerit
                            urna&hellip;</p>
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                </article>
                <article class="clear">
                    <div class="one_half first">
                        <h3 class="heading">Aliquam vel quisque nec dolor ullamcorper lacinia ut nec dictum ipsum</h3>
                        <ul class="nospace meta">
                            <li>
                                <time datetime="2045-04-05">5<sup>th</sup> April 2045</time>
                            </li>
                            <li>by <a href="https://www.danforblog.com/author/danforblog/">Admin</a></li>
                        </ul>
                        <p>Sed vulputate mauris proin fermentum vitae diam non hendrerit vivamus pharetra interdum augue
                            ut dignissim aenean placerat lectus ullamcorper malesuada sodales massa urna
                            pulvinar&hellip;</p>
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                    <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{ asset('images/demo/540x333.png') }}" alt=""></a></div>
                </article>
                <article class="clear">
                    <div class="one_half first"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{ asset('images/demo/540x333.png') }}" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Elementum scelerisque nisi id sollicitudin tellus vivamus id convallis
                            tellus</h3>
                        <ul class="nospace meta">
                            <li>
                                <time datetime="2045-04-06">6<sup>th</sup> April 2045</time>
                            </li>
                            <li>by <a href="https://www.danforblog.com/author/danforblog/">Admin</a></li>
                        </ul>
                        <p>Nullam tristique nulla sit amet tortor eleifend vitae tempor est mattis praesent aliquam
                            mauris sem id convallis ipsum posuere vel cras porttitor turpis turpis tincidunt hendrerit
                            urna&hellip;</p>
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                </article>
                <article class="clear">
                    <div class="one_half first">
                        <h3 class="heading">Aliquam vel quisque nec dolor ullamcorper lacinia ut nec dictum ipsum</h3>
                        <ul class="nospace meta">
                            <li>
                                <time datetime="2045-04-05">5<sup>th</sup> April 2045</time>
                            </li>
                            <li>by <a href="https://www.danforblog.com/author/danforblog/">Admin</a></li>
                        </ul>
                        <p>Sed vulputate mauris proin fermentum vitae diam non hendrerit vivamus pharetra interdum augue
                            ut dignissim aenean placerat lectus ullamcorper malesuada sodales massa urna
                            pulvinar&hellip;</p>
                        <footer><a class="btn"
                                href="https://www.danforblog.com/pengertian-dan-cara-membuat-blog-dummy/">Read More</a>
                        </footer>
                    </div>
                    <div class="one_half"><a class="iblock borderedbox inspace-10" href="#"><img
                                src="{{ asset('images/demo/540x333.png') }}" alt=""></a></div>
                </article>
            </div>
            <br><br>
            <div class="clear"></div>
        </section>
    </div>

    @include('components.footer')

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
