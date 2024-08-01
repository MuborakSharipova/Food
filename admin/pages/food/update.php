<?php
if (isset($_GET['edit']))
{
  


require_once('C:\OSPanel\domains\Foodies\config.php');


$id = $_GET['id'];
$title = $_GET['title'];
$text = $_GET['text'];
$created_ad = $_GET['created_ad'];
$created_by = $_GET['created_by'];
$image = $_GET['image'];


$query = "UPDATE `store`.`posts`
set 
`title` = '$title',
`text` = '$text',
`created_ad` = '$created_ad',
`created_by` = '$created_by',
`image` = '$image'
where `id` = $id;";
$result = mysqli_query($conn, $query);
header('Location: ../../index.php?page=9');
}
?>