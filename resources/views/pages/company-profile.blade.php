<!DOCTYPE html>
<html>

<head>
    <title>Profil {{$web_attribute->title}}</title>
    <meta charset="utf-8">
    <meta name="description" content="{{$company_profile->description}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
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
        'color' => $color,
    ])
    
    <div class="wrapper row3" id = 'portfolio'>
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Profil {{$web_attribute->title}}</h3>
            </div>
            <div class="group btmspace-50 center">
                <div class="two_quarter first">
                    <figure><img src="{{asset($company_profile->image_url)}}" alt="" class="image_left"></figure>
                    <br>
                    <br>
                    <footer><a class="btn" href="https://wa.me/{{$contact->whatsapp}}?text={{$contact->whatsapp_message}}"><i class="fa fa-whatsapp my-float"></i> (WA) Hubungi - {{$contact->whatsapp}}</a></footer>
                </div>
                <div class = "two_quarter">
                    <h3>Riwayat Perusahaan</h3>
                    <br>
                    <p style="text-align: left;">{{$company_profile->description}}</p>
                </div>
            </div>
            <div class="group btmspace-50 center">
                <div class="two_quarter first">
                    <h3>Visi Perusahaan</h3>
                    <br>
                    <p>{{$company_profile->vision}}</p>
                </div>
                <div class = "two_quarter">
                    <h3>Misi Perusahaan</h3>
                    <br>
                    <p>{{$company_profile->mission}}</p>
                </div>
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
    <script src="{{asset('layout/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.backtotop.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>