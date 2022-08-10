<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SUAM. Sistema Universitario del Adulto Mayor</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="css/stylewelcome.css">
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
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


            <div class="title m-b-md">
                <img src="images/baner-suam.jpg" class="img-fluid"><br>
            </div>
            <br>
            <div class="title">
                <p>Si ya fue alumno nuestro, por favor acceda con su nombre de usuario y contraseña, de no recordarlos
                    comuníquese con administración a los siguientes números 33-31-06-71-60 o al 33-14-08-43-24</p>
            </div>
            <br>
            <div class="links">
                <a href="{{ route('login') }}">Acceder</a>
                <a href="{{ route('register') }}">Registrarse por Primera Vez</a>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/now-ui-dashboard.js" type="text/javascript"></script>
</body>

</html>
