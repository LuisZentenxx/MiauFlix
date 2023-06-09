<?php
    session_start();
    include 'conexion.php';

    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];
    $contrasenia = hash('sha512', $contrasenia);

    $consulta = "SELECT * FROM usuario where correo = '$correo' AND contrasenia = '$contrasenia'";
    $validar_login = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("location: ../principal.php");
        exit;
    } else {
        echo '
            <script>
                alert("Datos mal ingresados o usuario inexistente 😿");
                window.location = "../signIns.php"
            </script>
        ';
        exit;
    }
    //mysqli_close($conexion);
?>