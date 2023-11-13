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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bagian 4 (list blog) -->

    <div class="carousel carousel slide row3" data-ride="carousel" id = "testimonies">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#testimonies" data-slide-to="0" class="active"></li>
            <li data-target="#testimonies" data-slide-to="1"></li>
            <li data-target="#testimonies" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Bagian 3 -->
                <div class="wrapper bgded overlay"
                    style="background-image:url({{ asset('images/demo/backgrounds/02.png') }});">
                    <div class="hoc container clear">
                        <div class="testimonial clear">
                            <blockquote>Est vitae varius vivamus enim mi egestas at lacinia et faucibus eget tellus
                                aenean nec massa
                                semper luctus quam non cursus purus donec nec sollicitudin mauris at pulvinar lectus
                                nunc eget mi a.
                            </blockquote>
                            <figure><img class="circle" src="{{ asset('images/demo/60x60.png') }}" alt="">
                                <figcaption><strong>A.Doe</strong><br>
                                    <em>Job / Title</em>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <!-- Bagian 3 -->
                <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
                    <div class="hoc container clear">
                        <div class="testimonial clear">
                            <blockquote>Est vitae varius vivamus enim mi egestas at lacinia et faucibus eget tellus
                                aenean nec massa
                                semper luctus quam non cursus purus donec nec sollicitudin mauris at pulvinar lectus
                                nunc eget mi a.
                            </blockquote>
                            <figure><img class="circle" src="{{ asset('images/demo/60x60.png') }}" alt="">
                                <figcaption><strong>A.Doe</strong><br>
                                    <em>Job / Title</em>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <!-- Bagian 3 -->
                <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
                    <div class="hoc container clear">
                        <div class="testimonial clear">
                            <blockquote>Est vitae varius vivamus enim mi egestas at lacinia et faucibus eget tellus
                                aenean nec massa
                                semper luctus quam non cursus purus donec nec sollicitudin mauris at pulvinar lectus
                                nunc eget mi a.
                            </blockquote>
                            <figure><img class="circle" src="{{ asset('images/demo/60x60.png') }}" alt="">
                                <figcaption><strong>A.Doe</strong><br>
                                    <em>Job / Title</em>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#testimonies" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Sebelumnya</span>
        </a>
        <a class="right carousel-control" href="#testimonies" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Berikutnya</span>
        </a>
    </div>

    <!--JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
