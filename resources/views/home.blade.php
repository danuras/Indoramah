<!DOCTYPE html>
<html>

<head>
    <title>Indoramah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
</head>

<body id="top">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @include('components.heading-web')

    @include('components.card-1-section')

    @include('components.advantage-section')

    @include('components.card-2-section')

    @include('components.card-3-section')

    @include('components.testimonies-section')

    @include('components.blog-section')

    @include('components.maps')

    @include('components.footer')

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
