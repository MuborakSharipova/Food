
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    
</head>
<body>

<table class="table col-sm-9">
        <tr> 
            <th>#</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>День рождения</th>
            <th>Пол</th>
            <th>Профессия</th>
            <th>Фото</th>
           <th>Удалить</th>
           <th>Изменить</th>
        </tr>
        <?php
        $i=0;
    require_once('C:\OSPanel\domains\Foodies\config.php');
        $query = "Select * from employers";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result))
        {
            
        $i++;
        ?>
        <tr>
            <td><?=$i;?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['surname'];?></td>
            <td><?=$row['birthday'];?></td>
            <td><?=$row['gender'];?></td>
            <td><?=$row['position'];?></td>
            <td><?=$row['image1'];?></td>
            <td><a class="btn btn-danger" href="?page=6&id=<?=$row['id']?>">Удалить</a></td>
            <td><a class="btn btn-success" href="?page=4&id=<?=$row['id']?>">Изменить</a></td>
        </tr>
        <?php
        }
        ?>

    </table>
    <a class="btn btn-primary " href="?page=1">Добавить</a>

</body>
</html>