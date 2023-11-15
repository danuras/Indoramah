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

    <div class="carousel carousel slide row3" data-ride="carousel" id = "testimonies">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#testimonies" data-slide-to="0" class="active"></li>
            @for ($i = 1; $i < sizeof($testimonies); $i++)
                <li data-target="#testimonies" data-slide-to="{{$i}}"></li>
            @endfor
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Bagian 3 -->
                <div class="wrapper bgded overlay"
                    style="background-image:url({{ asset($background_image) }});">
                    <div class="hoc container clear">
                        <div class="testimonial clear">
                            <blockquote>{{$testimonies[0]->value }}
                            </blockquote>
                            <figure><img class="circle" src="{{ asset($testimonies[0]->photo_profile) }}" alt="">
                                <figcaption><strong>{{$testimonies[0]->name}}</strong><br>
                                    <em>{{$testimonies[0]->job}}</em>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            @for ($i = 1; $i < sizeof($testimonies); $i++)
                <div class="item">
                    <!-- Bagian 3 -->
                    <div class="wrapper bgded overlay"
                        style="background-image:url({{ asset($background_image) }});">
                        <div class="hoc container clear">
                            <div class="testimonial clear">
                                <blockquote>{{$testimonies[$i]->value }}
                                </blockquote>
                                <figure><img class="circle" src="{{ asset($testimonies[$i]->photo_profile) }}" alt="">
                                    <figcaption><strong>{{$testimonies[$i]->name}}</strong><br>
                                        <em>{{$testimonies[$i]->job}}</em>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
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

</body>

</html>
