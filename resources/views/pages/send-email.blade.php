<!DOCTYPE html>
<html>

<head>
    <title>Kirim Pesan</title>
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

    <div class="wrapper row3" style="background-image:url({{ asset('images/demo/backgrounds/01.png') }});">
        <main class="hoc container clear">
            <div class="group btmspace-50 center">
                <div class="two_quarter first mail_box">
                    <h3>Kami Siap Melayani Anda Pesan Sekarang!</h3>
                    <p>Waktu Operasional:</p>
                    <p>Senin s/d Sabtu (Kecuali Hari Libur Nasional)</p>
                    <p>8:00 s/d 17:00 WIB</p>
                    <p>Anda dapat menghubungi kami melalui:</p>
                    <p>Telepon: +62 888-8888-888</p>
                    <p>Whatsapp: +62 888-8888-888</p>
                    <p>Email: admin@gmail.com</p>
                    <p class="text_left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia esse facere
                        voluptatem quam reiciendis quod corrupti alias, cumque aliquid provident magnam voluptates
                        similique ducimus qui. Dolore autem minima reiciendis architecto?</p>
                    <br>
                    <br>
                    <footer><a class="btn"
                            href="https://wa.me/6283102377495?text=Hai%20INDORAMAH !%20Saya%20ingin%20tanya%20seputar%20jasa%20anda."><i
                                class="fa fa-whatsapp my-float"></i> (WA) Hubungi - 0888 8888 8888</a></footer>
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
                        <div>
                            <input type="submit" name="submit" value="Kirim Pesan">
                            &nbsp;
                            <input type="reset" name="reset" value="Reset">
                        </div>
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

    @include('components.footer')

    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
    <script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
</body>

</html>
