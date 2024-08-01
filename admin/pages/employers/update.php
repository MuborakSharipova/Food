<?php
if (isset($_GET['edit']))
{
  


require_once('C:\OSPanel\domains\Foodies\config.php');


$id = $_GET['id'];
$name = $_GET['name'];
$surname = $_GET['surname'];
$birthday = $_GET['birthday'];
$gender = $_GET['gender'];
$position = $_GET['position'];
$image = $_GET['image'];


$query = "UPDATE `store`.`employers`
set 
`name` = '$name',
`surname` = '$surname',
`birthday` = '$birthday',
`gender` = '$gender',
`position` = '$position',
`image1` = '$image'
where `id` = $id";
$result = mysqli_query($conn, $query);
header('Location: ../../index.php?page=3');
}
?>