<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body id="top">
    <div class="wrapper {{ $rank % 2 == 1 ? 'row3' : 'row4' }}" id = "location">
        <section class="hoc container center clear">
            <h3 class="btmspace-10">Lokasi</h3>
            <p class="nospace">{{$maps->info_location}}</p>
        </section>
        <div class="gmap clear">
            <iframe id='gmapcanvas'
                src="{{$maps->embeded_map_url}}"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

</body>

</html>
