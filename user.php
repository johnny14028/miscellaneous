<?php

require_once 'conexion.php';

$objConexion = new conexion();
$sql = "SELECT * FROM users";
$users = $objConexion->query($sql);
print_r($users);