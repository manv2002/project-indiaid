<?php

@include 'config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "user_db";

    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM user_form WHERE id = $id";
    $connection -> query($sql);



}

header("location: /INDIAID/Scripts/admin_page.php");
exit;
?>