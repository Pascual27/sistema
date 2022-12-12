<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "ceicom_pascual", "71068043.ñ", "ceicom_pascual");
//$conexion = mysqli_connect("localhost", "root", "root", "sistema");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>