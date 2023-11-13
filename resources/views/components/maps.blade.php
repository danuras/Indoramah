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
    <div class="wrapper row4" id = "location">
        <section class="hoc container center clear">
            <h3 class="btmspace-10">Lokasi</h3>
            <p class="nospace">Sed at augue consectetur ultricies elit semper facilisis quam aliquam</p>
        </section>
        <div class="gmap clear">

            <iframe id='gmapcanvas'
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63273.86296260176!2d110.26389765952453!3d-7.6166475801990705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8b1c5e2d7805%3A0xb323b526d2f7ce2e!2sSMK%20Negeri%201%20Salam!5e0!3m2!1sen!2sid!4v1699502834176!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!--JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
