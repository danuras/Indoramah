<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body id="top">
    <div class="wrapper {{ $rank % 2 == 1 ? 'row3' : 'row4' }}" id = '{{ $cb->title }}'>
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">{{ $cb->title }}</h3>
            </div>

            <div class="group btmspace-50 center">
                @if (isset($cb->cards[0]))
                    <div class="one_third first" id = 'portfolio_card'>
                        <figure><img src="{{ asset($cb->cards[0]->image_url) }}" alt=""></figure>
                        <br>
                        <div class="w-100 text-left">
                            {!! $cb->cards[0]->text !!}
                        </div>
                        <footer><a class="btn inverse" href="{{ $cb->cards[0]->link }}">Selengkapnya</a></footer>
                    </div>
                @else
                    <div class="one_third">
                    </div>
                @endif
                @if (isset($cb->cards[1]))
                    <div class="one_third" id = 'portfolio_card'>
                        <figure><img src="{{ asset($cb->cards[1]->image_url) }}" alt=""></figure>
                        <br>
                        <div class="w-100 text-left">
                            {!! $cb->cards[1]->text !!}
                        </div>
                        <footer><a class="btn inverse" href="{{ $cb->cards[1]->link }}">Selengkapnya</a></footer>
                    </div>
                @else
                    <div class="one_third">
                    </div>
                @endif
                @if (isset($cb->cards[2]))
                    <div class="one_third" id = 'portfolio_card'>
                        <figure><img src="{{ asset($cb->cards[2]->image_url) }}" alt=""></figure>
                        <br>
                        <div class="w-100 text-left">
                            {!! $cb->cards[2]->text !!}
                        </div>
                        <footer><a class="btn inverse" href="{{ $cb->cards[2]->link }}">Selengkapnya</a></footer>
                    </div>
                @else
                    <div class="one_third">
                    </div>
                @endif
            </div>
            <p class="center"><a class="{{ $rank % 2 == 1 ? 'btn' : 'btn inverse' }}"
                    href="{{ route('card-box', [$cb->title, $cb->card_type, $cb->id]) }}">Tampilkan Semua</a></p>
            <div class="clear"></div>
        </main>
    </div>
</body>
</html>
