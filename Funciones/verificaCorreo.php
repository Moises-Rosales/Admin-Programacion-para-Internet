<?php

require "Funciones/conecta.php";
$con = conecta();
$correo = $_REQUEST['correo'];

$sql = "SELECT * FROM empleados WHERE correo = '$correo' AND eliminado = 0";
$res = $con->query($sql);
$num = $res->num_rows;

echo $num;
?>