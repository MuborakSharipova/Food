<?php

ob_start();
error_reporting(0);
if(isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
    require_once('C:\OSPanel\domains\Foodies\config.php');
    $query= "delete from posts where id = $id";
    $result = mysqli_query($conn,$query);
header("Locatin:?page=9"); 

}
?>