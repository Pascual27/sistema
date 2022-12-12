<?php
// conexion utiliza servidor-usuario-password-base de datos
//$conexion = mysqli_connect("localhost", "ceicom_pascual", "YGql3VLZv^qB", "ceicom_pascual");
$conexion = mysqli_connect("localhost", "root", "root", "sistema");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>