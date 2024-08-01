<?php
if (!isset($_GET['id']) || empty($_GET['id']))
{
    header ('Location: select.php');
}

require_once('config.php');
$id = $_GET['id'];
$name = $_GET['name'];
$surname = $_GET['surname'];
$email = $_GET['email'];
$text = $_GET['text'];

$query = "UPDATE `store`.`contacts` 
	SET
	`name` = '$name', 
	`surname` = '$surname', 
	`email` = '$email', 
	`text` = '$text'
	
	WHERE
	`id` = $id" ;

$result = mysqli_query($conn, $query);
header('Location:select.php');

?>