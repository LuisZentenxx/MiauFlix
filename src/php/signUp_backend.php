<?php
    include 'conexion.php';

    if(isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];
        $contrasenia = hash('sha512', $contrasenia); // encriptación de contraseña

        $query = "INSERT INTO usuario (nombre, correo, contrasenia)
                  VALUES ('$nombre', '$correo', '$contrasenia')";

        $ejecutar = mysqli_query($conexion, $query);

        
        if($ejecutar){
            echo '
                <script>
                    alert("Usuario almacenado exitosamente 😸🍿");
                    window.location = "../signins.php"
                </script>
            ';
        }else{
            echo '
                <script>
                    alert("Inténtalo de nuevo, usuario no almacenado 😿");
                    window.location = "../signup.php"
                </script>
            ';
        }



        /*
        if($ejecutar) {
            // La inserción se realizó correctamente
            echo "Registro exitoso";
        } else {
            // Error al ejecutar la consulta
            echo "Error en la inserción: " . mysqli_error($conexion);
        }
        */
    }
?>
