<?php

$usuario="root";
$password="";
$servidor="localhost";
$basededatos="formulario";


$conexion = mysqli_conmect($servidor,$usuario,"")or die("Error con la base de datos");
$bd =mysqli_selec_db($conexion,$basededatos)or die("Error conexion");
 ?>
