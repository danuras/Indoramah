<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{asset('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all"> 
        <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet" /> 
    </head> 
    <body id="top"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
        <div class="wrapper row4" id ="advantage">
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
                            <p class="center"><a class="btn inverse" href="advantage">Keuntungan</a></p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>