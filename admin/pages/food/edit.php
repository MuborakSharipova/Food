<?php
if (isset($_GET['id']) || !empty($_GET['id']))
{
    require_once('C:\OSPanel\domains\Foodies\config.php');
    
    $id = $_GET['id'];
    $query = "Select * from posts where id = $id";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    if($rows <= 0){
        header('Localtion:index.php?page=9');
    }
    $row = mysqli_fetch_assoc($result);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div  class="container col-sm-6"></div>
    <form action="pages/food/update.php" method="get">
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        Title
        <input type="text" name="title" id="" value="<?=$row['title'];?>" class="form-control">
        Text
        <input type="text" name="text" id="" value="<?=$row['text'];?>" class="form-control">
        Дата
        <input type="date" name="created_ad" id="" value="<?=$row['created_ad'];?>" class="form-control">
        Производитель
        <input type="text" name="created_by" id="" value="<?=$row['created_by'];?>" class="form-control">
        Изображение
        <input type="file" name="image" value="<?=$row['image'];?>" class="form-control">
        <input type="hidden" name="id" value="<?=$id;?>">
        <input type="submit" value="Изменить" class="btn btn-success" name="edit">
    </form>
</body>
</html>