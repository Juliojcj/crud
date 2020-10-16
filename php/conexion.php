<?php

$servidor= "localhost";
$usuario= "root";
$clave= "";
$base= "empresa";
$conexion=mysqli_connect($servidor , $usuario, $clave, $base);
if (!$conexion) {
    echo "error en la conexion";
    
}
