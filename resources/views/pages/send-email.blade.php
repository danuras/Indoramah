<!DOCTYPE html>
<html>

<head>
    <title>Kontak {{$web_attribute->title}}</title>
    <meta name="description" content="{{ $contact->info_contact }}"/>
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
        'color' => $color,
    ])
    <div class="wrapper row3" style="background-image:url({{ asset($contact->background_contact) }});">
        <main class="hoc container clear">
            <div class="group btmspace-50">
                <div class="two_quarter first mail_box">
                    {!! $contact->info_contact !!}
                    <br>
                    <br>
                    <center><footer><a class="btn"
                            href="https://wa.me/{{$contact->whatsapp}}?text={{$contact->whatsapp_message}}."><i
                                class="fa fa-whatsapp my-float"></i> (WA) Hubungi - {{$contact->whatsapp}}</a></footer></center>
                </div>
                <div class="two_quarter  mail_box" id="comments">
                    <h3>Kirim Email</h3>
                    <form action="{{ route('send-message') }}" method="POST">
                        @csrf
                        <div class="group btmspace-50 demo">
                            <div class="two_quarter first">
                                <label for="name" class="text_left">Nama <span>*</span></label>
                                <input type="text" name="name" id="name" value="" size="22"
                                    required>
                            </div>
                            <div class="two_quarter">
                                <label for="email" class="text_left">Email <span>*</span></label>
                                <input type="email" name="email" id="email" value="" size="22"
                                    required>
                            </div>
                        </div>
                        <div class="group btmspace-50 demo">
                            <div class="two_quarter first">
                                <label for="phone" class="text_left">Nomor Telepon <span>*</span></label>
                                <input type="text" name="phone" id="phone" value="" size="22"
                                    required>
                            </div>
                        </div>
                        <div class="block clear">
                            <label for="message" class="text_left">Isi pesan <span>*</span></label>
                            <textarea name="message" id="message" cols="25" rows="10" required></textarea>
                        </div>
                        <center>
                            <div>
                                <input type="submit" name="submit" value="Kirim Pesan">
                                &nbsp;
                                <input type="reset" name="reset" value="Reset">
                            </div>
                        </center>
                        @if (session('success'))
                            <div class="alert alert-success mb-1 mt-1">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
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
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
