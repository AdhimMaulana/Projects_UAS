<?php
session_start();
unset($_SESSION['sesi_login']);
unset($_SESSION['id_admin']);
session_destroy();
header("Location:../Login-Registrasi/login.php")
?>