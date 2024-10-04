<?php
session_start();

include 'conexion_be.php';
include 'funciones.php';  // Incluye la función para verificar el rol

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña); // Especifica el algoritmo de hash

// Validar el usuario
$validar_login = mysqli_query($conexion, "SELECT id, rol_id FROM usuarios WHERE email = '$email' AND contraseña = '$contraseña'");

if ($validar_login) {
  if (mysqli_num_rows($validar_login) > 0) {
    $usuario = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario_id'] = $usuario['id'];

    // Verificar el rol
    $es_admin = esAdministrador($usuario['id']);

    if ($es_admin) {
      header("location: /Ejercicios/adopet2/index.php");
    } else {
      header("location: /Ejercicios/adopet2/index.php");
    }
    exit();
  } else {
    echo '
      <script>
        alert("Usuario no existe o la contraseña no es correcta, por favor verificar los datos introducidos");
        window.location = "../login.php";
      </script>
      ';
    exit();
  }
} else {
  echo '
    <script>
      alert("Error en la consulta SQL: ' . mysqli_error($conexion) . '");
      window.location = "../login.php";
    </script>
    ';
  exit();
}
?>
