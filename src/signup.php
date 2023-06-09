<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles2.css">
    <title>Sign Up</title>

     <!-- Tostify -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

  <!-- Main -->
  <script src="./main.js" type="module"></script>
</head>

<!-- REGISTRO USUARIO -->
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <form class="needs-validation" id="signups-form" action = "php/signUp_backend.php" method = "POST">

            <div class="form-group was-validated">
                <label for="text" class="form-label">Name</label>
                <input type="text" name="nombre" class="form-control" id="signups-email" required placeholder="enter your name">
                
            </div>

            <div class="form-group was-validated">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="correo" class="form-control" id="signups-email" required placeholder="enter your email">
                
            </div>

            <div class="form-group was-validated">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="signups-passwd" required placeholder="enter your password">
                
            </div>

            <div class="form-group was-validated">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="contrasenia" class="form-control" id="signups-passwd" required placeholder="repeat your password">
                
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Create Account</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

     <!-- Tostify -->
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>