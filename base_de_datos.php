<?php

$contraseña = "Bir4edPbcIzqCs01fxjz";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";

$rutaServidor = "containers-us-west-164.railway.app";
$puerto = "5524";
try{
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}