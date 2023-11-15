<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    </head> 
    <body id="top"> 
        <div class="wrapper {{ $rank % 2 == 1 ? 'row3' : 'row4' }}" id ="advantage">
            <main class="hoc container clear">
                <div class="group center">
                    <div class="group demo">
                        <div class="one_quarter first">
                            <p class= 'big_text'><b>{{$advantage->title}}</b></p><br>
                        </div>
                        <div class="two_quarter">
                            <p class = 'left_text'>{{$advantage->description}}</p>
                        </div>
                        <div class="one_quarter">
                            <p class="center"><a class="{{ $rank % 2 == 1 ? 'btn' : 'btn inverse' }}" href="advantage">Keuntungan</a></p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>