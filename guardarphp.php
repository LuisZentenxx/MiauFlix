<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "battery12.", "miauflix");

// Verificar la conexión
if (mysqli_connect_errno()) {
  echo "Error de conexión: " . mysqli_connect_error();
  exit();
}

// Obtener los datos del formulario
$nombre = $_POST["email"];
$correo = $_POST["password"];

// Escapar caracteres especiales para evitar inyección SQL
$nombre = mysqli_real_escape_string($conexion, $nombre);
$correo = mysqli_real_escape_string($conexion, $correo);

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (email, passwrd) VALUES ('$email', '$passwrd')";

if (mysqli_query($conexion, $sql)) {
  echo "Datos guardados correctamente";
} else {
  echo "Error al guardar los datos: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
?>
