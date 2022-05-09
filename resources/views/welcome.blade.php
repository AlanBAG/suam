<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SUAM. Sistema Universitario del Adulto Mayor</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            align-content: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
            
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))                
            <div class="top-right links">
                @auth
                @else
                    <a href="{{ route('login') }}">Acceder</a>
                        @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registrarse por Primera Vez</a>
                        @endif
                @endauth  
            </div>
        @endif
        
        <div class="content">
            <div class="title m-b-md">
                <img src="images/baner-suam.jpg" class="img-fluid"><br>
            </div>
<br>
            <br>
            <br>
<div class="title">
<p>Si ya fue alumno nuestro, por favor acceda con su nombre de usuario y contraseña, de no recordarlos comuníquese con administración a los siguientes números 33-31-06-71-60 o al 33-14-08-43-24</p>
</div>
            <br>
            <div class="links">
                <a href="{{ route('login') }}">Acceder</a>
             <a href="{{ route('register') }}">Registrarse por Primera Vez</a>
            
    </div>
    
        </div>
    </div>


</body>
</html>
