<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location="signIns.php";
            </script>
        ';
    //header('Location: login.php');
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Css-->
    <link rel="stylesheet" href="estilosPrincipal.css">
    <!--Css Paginacion-->
    <link rel="stylesheet" href="paginacion.css">
    <!--Icono navegador-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&family=Poppins&family=Roboto+Mono:wght@100&display=swap"
        rel="stylesheet">
    <!--Iconos bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--Iconos RemixIcon-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>🐱 MiauFlix 🐱</title>
    <link rel="stylesheet" href="http://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>

    <!-- Barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <img class="img_logo" src="img/logo_MiauFlix.png" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30">
                        <path stroke="white" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                            d="M4 7h22M4 15h22M4 23h22"></path>
                    </svg>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="principal.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myMovies.php">My movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="php/cerrar_sesion.php" tabindex="-1" aria-disabled="true">Exit</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!--Carrousel-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/mario.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/pixar.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/avengers.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>


    <section class="principal">

        <div id="tags"></div>

        <h1 class="titulo">Last Movies</h1>

        <!-- Botón para buscar -->
        <form id="form" class="search-form">
            <input type="text" placeholder="Search" id="search" class="search-input">
            <button type="submit" class="search-button"><i class="bi bi-search-heart"></i></button>
        </form>

        <!--Tarjetas peliculas plantilla-->
        <div id="main" class="main row">
            <div class="movie">
                <img src="img/movie.jpg" alt="image">
                <div class="movie-info">
                    <h3>Movie Tittle</h3>
                    <span class="green">9.8</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                </div>
            </div>
    

    </section>
    <!--Paginación-->
    <div class="pagination">
            <div class="page disabled" id="prew">Previus Page</div>
            <div class="current" id="current">1</div>
            <div class="page" id="next">Next Page</div>
    </div>
    <!--Script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!--Sript del proyecto-->
    <script src="app/javaScript.js"></script>
    <!--funciones globales-->
    <script src="app/javascriptGlobal.js"></script>
</body>

</html>