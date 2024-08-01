<?php

if(isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
    require_once('C:\OSPanel\domains\Foodies\config.php');
    $query= "delete from employers where id = $id";
    $result = mysqli_query($conn,$query);
    header("Location: ?page=3");
   
}

?>