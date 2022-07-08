<?php
    // $con = new mysqli('localhost','root','Naim-Camil@123','restaurant');
    $con= new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8','root','');

    if(!$con){
        die(mysqli_error($con));
    }
?>
