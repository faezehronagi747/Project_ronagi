<?php
include ("sabt.php");
if(isset($_GET["btnlogin"])){
    if (empty($_GET["username"]) || empty($_GET["password"]) ){
        header("location:sabt.php?empty=1010");
        exit();
    }
    if (!empty($_GET["username"]) || empty($_GET["password"]) ){
        header("location:index-1.php");
        exit();
    }
    else{
        header("location:login.php?error=2020");
        exit();
    }
}