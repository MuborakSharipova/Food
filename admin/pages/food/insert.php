<?php

if (isset($_POST["save"])) {
  $title = $_POST["title"];
  $text = $_POST["text"];
$created_ad = $_POST["created_ad"];
$created_by = $_POST["created_by"];
$image = $_FILES["image"]['name'];
require_once('C:\OSPanel\domains\Foodies\config.php');
$query = "INSERT INTO `store`.`posts` 
	(`title`, 
	`text`, 
	`created_ad`, 
	`created_by`, 
	`image` 

	)
	VALUES
	(
	'$title', 
	'$text', 
	'$created_ad', 
	'$created_by', 
	'$image' 
	);";

$result = mysqli_query($conn,$query);


}

?>
