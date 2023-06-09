<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&family=Play&display=swap"
    rel="stylesheet">

  <!-- Custom Css -->
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/5006b19bd1.js" crossorigin="anonymous"></script>

  <!-- Tostify -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

  <!-- Main -->
  <script src="./main.js" type="module"></script>

  <title>MiauFlix</title>
</head>

<!-- INCIO SESION -->

<body class="bg-dark">
  <section>
    <div class="row g-0">

      <div class="col-lg-7 d-none d-lg-block">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-caption d-none d-md-block"></div>
              <img src="img/img-1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/img-2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/img-3.jpg" class="d-block w-100">
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
        <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">
          <img src="" class="img-fluid">
        </div>

        <div class="px-lg-5 py-lg-4 p-4 w-100 m">
          <h1 class="font-weight-bold-mb-4">Welcome Back</h1>

          <form id="signup-form" class="mb-5">
            <!-- Campo Email -->
            <div class="mb-4 needs-validation">
              <label for="email" class="form-label font-weight-bold ">Email</label>
              <input type="email" name="correo" id="signup-email" class="form-control bg-dark-x border-0"
                placeholder="Enter your email" required>
            </div>
            <!-- Campo Contraseña -->
            <div class="mb-4 needs-validation">
              <label for="password" class="form-label font-weight-bold">Password</label>
              <input type="password" name="contrasenia" id="signup-passwd" class="form-control bg-dark-x border-0 mb-2"
                placeholder="Enter your password" required>
              <a href="#" id="emailHelp" class="form-text text-muted text-decoration-none">Forgot your password?</a>
            </div>
            <button type="submit" id="login" class="btn btn-primary w-100">Login</button>
          </form>

          <p class="font-weight-bold text-center text-muted">or Signup with</p>
          <div class="d-flex justify-content-around">
            <button type="submit" id="googleLogin" class="btn btn-outline-light flex-grow-1 mx-2"><i
                class="fa-brands fa-google lead mr-1"></i>oogle</button>
            <button type="submit" id="fbLogin" class="btn btn-outline-light flex-grow-1 mx-3"><i
                class="fa-brands fa-facebook-f lead mr-1"></i>acebook</button>
          </div>
        </div>

        <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
          <p class="d-inline-block mb-0">Don't have an account?</p> <a href="#"
            class="text-light font-weight-bold text-decoration-none">Create an account now</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Tostify -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>