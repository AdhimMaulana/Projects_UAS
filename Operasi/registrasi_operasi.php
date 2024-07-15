<?php
include "koneksi.php";
if(isset($_POST['submit'])){
    $user= $_POST['user'];
    $pass = $_POST['pass'];
    $mail = $_POST['email'];
    $query = "INSERT INTO admin(username, password, email) VALUES ('$user', '$pass', '$mail')";
    $result = mysqli_query($db, $query);
    if($result){
        header("location:../Login-Registrasi/login.php");
    
    }else{
    header("location:../Login-Registrasi/login.php?status=error");
    }
}else{
    header("location:../Login-Registrasi/login.php");
}
?>