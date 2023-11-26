<?php

// session_start();
if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // echo"<script>console.log('$username')</script>";
    // echo"<script>console.log('$password')</script>";

    if($username === "" ){
        echo "login gagal";
    }else if($password === ""){
        echo "password gagal";

    }else{
        echo "login berhasil";
    }
}

?>
