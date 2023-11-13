<!DOCTYPE html>
<html>

<head>
    <title>Keunggulan Indoramah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" />
</head>

<body id="top">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Bagian Header -->
    @include('components.small-heading-web')

    <div class="wrapper row3" id = 'portfolio'>
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">Kelebihan Indoramah</h3>
            </div>
            <div class="group btmspace-50 center">
                <div class="two_quarter first">
                    <figure><img src="{{asset('images/demo/gallery/01.png')}}" alt="" class="image_left"></figure>
                    <br>
                    <br>
                    <footer><a class="btn" href="https://wa.me/6283102377495?text=Hai%20INDORAMAH !%20Saya%20ingin%20tanya%20seputar%20jasa%20anda."><i class="fa fa-whatsapp my-float"></i> (WA) Hubungi - 0888 8888 8888</a></footer>
                </div>
                <div class="one_quarter">
                    <div class="group btmspace-50 center">
                        <div class="two_quarter btmspace-30 advantage_card">
                            <figure><img class="circle" src="{{asset('images/demo/60x60.png')}}" alt=""></figure>
                            <h3>Judul 1</h3>
                            <p>(penjelasan) Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eius laudantium possimus libero distinctio, temporibus dolore neque natus saepe debitis.</p>
                        </div>
                        <br>
                        <div class="two_quarter btmspace-30 advantage_card">
                            <figure><img class="circle" src="{{asset('images/demo/60x60.png')}}" alt=""></figure>
                            <h3>Judul 1</h3>
                            <p>(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quia quibusdam sequi quos unde deserunt eaque temporibus asperiores nulla quae.</p>
                        </div>
                    </div>
                </div>
                
                <div class="one_quarter">
                    <div class="group btmspace-50 center">
                        <div class="two_quarter btmspace-30 advantage_card">
                            <figure><img class="circle" src="{{asset('images/demo/60x60.png')}}" alt=""></figure>
                            <h3>Judul 1</h3>
                            <p>(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quia quibusdam sequi quos unde deserunt eaque temporibus asperiores nulla quae.</p>

                        </div>
                        <div class="two_quarter btmspace-30 advantage_card">
                            <figure><img class="circle" src="{{asset('images/demo/60x60.png')}}" alt=""></figure>
                            <h3>Judul 1</h3>
                            <p>(penjelasan) Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quia quibusdam sequi quos unde deserunt eaque temporibus asperiores nulla quae.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </main>
    </div>
    @include('components.footer')
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{asset('layout/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.backtotop.js')}}"></script>
    <script src="{{asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>