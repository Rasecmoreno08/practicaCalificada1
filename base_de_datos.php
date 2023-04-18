<?php
/*
Credenciales para la conexión DB
================================
 */
$contraseña = "89385303dccb322c56224180e01180e3ed3a4cdab342b192e5ae41033ea44e85";
$usuario = "taylhpggsxxkff";
$nombreBaseDeDatos = "d9v66eor6b4q7e";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "ec2-44-207-133-100.compute-1.amazonaws.com";
$puerto = "5432";
try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}
