<?php
if (isset($_POST["save"])) {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];
$position = $_POST["position"];
$image1= $_FILES["image"];
$image= $image1['name'];
require_once('C:\OSPanel\domains\Foodies\config.php');
$query = "INSERT INTO `store`.`employers`(`name`,`surname`,	`birthday`, `gender`, 
	`position`, `image1`)VALUES('$name', '$surname', '$birthday', '$gender', '$position','$image');";

$result = mysqli_query($conn,$query);


}
?>