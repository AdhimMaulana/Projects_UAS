<?php
session_start();
$_SESSION['sesi_login']=NULL;
include "koneksi.php";
if(isset($_POST['submit'])){
    $user = isset($_POST['user']) ? $_POST['user']: "";
    $pass = isset($_POST['pass']) ? $_POST['pass']: "";

    $qry = mysqli_query($db, "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
    $sesi_login = mysqli_num_rows($qry);

    if($sesi_login == 1){
        $data_admin = mysqli_fetch_array($qry);
        $_SESSION['id_admin'] = $data_admin['id_admin'];
        $_SESSION['sesi_login'] = $data_admin['username'];
        echo "<script>alert('Anda berhasil login'); </script>";
        echo "<meta http-equiv = 'refresh' content = '0; url = ../TampilanUser/dashboard.php'>";
    }else{
        echo "<meta http-equiv = 'refresh' content = '0; url = login.php'>";
        echo "<script>alert('Anda gagal login'); </script>";
    }
}else{
    include "login.php";
}
?>