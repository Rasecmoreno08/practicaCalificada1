<?php
/*
Credenciales para la conexión DB
================================
 */
$contraseña = "ulQJFGUyYDAcMMyDXBbV";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "containers-us-west-41.railway.app";
$puerto = "6512";
try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
