<?php
if (isset($_GET["id"]) && !empty($_GET['id'])){
    $id = $_GET['id'];
require_once('config.php');
    $query = "DELETE FROM `store`.`contacts` 
	WHERE	`id` = '$id' ;";
$result = mysqli_query($conn,$query);
header("Location: select.php");
}
?>