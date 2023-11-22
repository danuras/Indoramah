<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body id="top">
    <div class="wrapper {{ $rank % 2 == 1 ? 'row3' : 'row4' }}" id ="{{ $cb->title }}">
        <main class="hoc container clear">
            <div class="btmspace-50 center">
                <h3 class="btmspace-10">{{ $cb->title }}</h3>
                <p>{{ $cb->info }}</p>
            </div>
            @for ($i = 0; $i < sizeof($cb->cards) / 4; $i++)
                <div class="group btmspace-50 center">
                    @if (isset($cb->cards[$i * 4]))
                        <div class="one_quarter first">
                            <a
                                href="{{ route('card-content', [$cb->cards[$i * 4]->title, $cb->cards[$i * 4]->content_type, $cb->cards[$i * 4]->id]) }}">
                                <div class="image-container">
                                    <img src="{{ asset($cb->cards[$i * 4]->image_url) }}" alt="Deskripsi Gambar">
                                    <div class="image-text">{{ $cb->cards[$i * 4]->title }}</div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="one_quarter first">
                        </div>
                    @endif
                    @if (isset($cb->cards[$i * 4 + 1]))
                        <div class="one_quarter">
                            <a
                                href="{{ route('card-content', [$cb->cards[$i * 4 + 1]->title, $cb->cards[$i * 4 + 1]->content_type, $cb->cards[$i * 4 + 1]->id]) }}">
                                <div class="image-container">
                                    <img src="{{ asset($cb->cards[$i * 4 + 1]->image_url) }}" alt="Deskripsi Gambar">
                                    <div class="image-text">{{ $cb->cards[$i * 4 + 1]->title }}</div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="one_quarter">
                        </div>
                    @endif
                    @if (isset($cb->cards[$i * 4 + 2]))
                        <div class="one_quarter">
                            <a
                                href="{{ route('card-content', [$cb->cards[$i * 4 + 2]->title, $cb->cards[$i * 4 + 2]->content_type, $cb->cards[$i * 4 + 2]->id]) }}">
                                <div class="image-container">
                                    <img src="{{ asset($cb->cards[$i * 4 + 2]->image_url) }}" alt="Deskripsi Gambar">
                                    <div class="image-text">{{ $cb->cards[$i * 4 + 2]->title }}</div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="one_quarter">
                        </div>
                    @endif
                    @if (isset($cb->cards[$i * 4 + 3]))
                        <div class="one_quarter">
                            <a
                                href="{{ route('card-content', [$cb->cards[$i * 4 + 3]->title, $cb->cards[$i * 4 + 3]->content_type, $cb->cards[$i * 4 + 3]->id]) }}">
                                <div class="image-container">
                                    <img src="{{ asset($cb->cards[$i * 4 + 3]->image_url) }}" alt="Deskripsi Gambar">
                                    <div class="image-text">{{ $cb->cards[$i * 4 + 3]->title }}</div>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="one_quarter">
                        </div>
                    @endif
                </div>
            @endfor
            <p class="center"><a class="{{ $rank % 2 == 1 ? 'btn' : 'btn inverse' }}"
                    href="{{ route('card-box', [$cb->title, $cb->card_type, $cb->id]) }}">Tampilkan Semua</a></p>
            <div class="clear"></div>
        </main>
    </div>
</body>
</html>
