<?php
session_start();
if (!isset($_SESSION['id_usu_sistema_iesthuanta'])) {
   header("location: login.php");
}
?>