<?php
if (isset($_GET['id']) || !empty($_GET['id']))
{
    require_once('C:\OSPanel\domains\Foodies\config.php');
    
    $id = $_GET['id'];
    $query = "Select * from employers where id = $id";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    if($rows <= 0){
        header('Localtion:index.php?page=3');
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
    <form action="pages/employers/update.php" method="get">
        <input type="hidden" name="id" value="<?=$row['id'];?>">
        Название
        <input type="text" name="name" id="" value="<?=$row['name'];?>" class="form-control">
        Фамилия
        <input type="text" name="surname" id="" value="<?=$row['surname'];?>" class="form-control">
        День рождения
        <input type="date" name="birthday" id="" value="<?=$row['birthday'];?>" class="form-control">
        Пол
        <select name="gender" id="" value="<?=$row['gender'];?>" class="form-control">
<option value="male">Male</option>
<option value="female">Female</option>
        </select>
        Профессия
        <input type="text" name="position" id="" value="<?=$row['position'];?>" class="form-control">
        Фото
        <input type="file" name="image" value="<?=$row['image1'];?>" class="form-control">
        <input type="hidden" name="id" value="<?=$id;?>">
        <input type="submit" value="Изменить" class="btn btn-success" name="edit">
    </form>
</body>
</html>