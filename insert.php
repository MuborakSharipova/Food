<?php
require_once('config.php');

if(isset($_POST['btn'])){
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$text = $_POST['text'];
}
$query = "INSERT INTO `store`.`contacts`( `name`, `surname`, `email`, `text`)
	VALUES('$name','$surname','$email','$text');";

$result = mysqli_query($conn, $query);
header("Location: select.php")
?>