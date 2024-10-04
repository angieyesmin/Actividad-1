<?php
require 'conexion_be.php';

function esAdministrador($usuario_id)
{
    global $conexion;
    $sql = "SELECT rol_id FROM usuarios WHERE id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $stmt->bind_result($rol_id);
    $stmt->fetch();
    $stmt->close();

    // Verificar si el rol es 2 para administrador
    return $rol_id === 2;
}
?>