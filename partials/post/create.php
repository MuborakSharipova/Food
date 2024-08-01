<?php
if(isset($_POST["btn"])){
$title = $_POST['title'];
$text = $_POST['text'];
$created_ad = $_POST['created_ad'];
$created_by = $_POST['created_by'];
$image = $_POST['image'];

require_once('db.php');

$query = "INSERT INTO posts(`title`,`text`,
`created_ad`,`created_by`,`image`)VALUES('$title','$text','$created_ad','$created_by','$image');";
echo $query;

$result = mysqli_query($conn, $query);
header ("Location: blogs.php");
}
?>