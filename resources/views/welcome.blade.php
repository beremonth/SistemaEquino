<!-- welcome.blade.php es el documento principal al que accede el navegador -->
<!-- sucede porque la funcion index() de la clase CaballoController trae al navegador a este documento -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema equino</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/personalizado2.css">
    <link rel="shortcut icon" href="image/logo.png" />
</head>
<body>

<header>
    <div class="container">            
    <!-- Panel de opciones -->            
            @include('diseño.nav') 
</header>

            <!-- Insercción funciones de PHP o reglas de negocio de la empresa -->
            <!-- Insercción de las funciones del negocio -->
            @yield('content')

            <!-- Fin diseño de Bootstrap -->
    </div>

            <!-- Intersección donde entra el pie de página -->
            @include('diseño.footer')
</body>
</html>