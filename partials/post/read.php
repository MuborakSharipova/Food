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
            <th>Title</th>
            <th>Текст</th>
            <th>Число</th>
            <th>Производитель</th>
            <th>Изображение</th>
           <th>Удалить</th>
           <th>Изменить</th>
        </tr>
        <?php
        $i=0;
        require_once("db.php");
        $query = "Select * from posts";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result))
        {
            
        $i++;
        ?>
        <tr>
            <td><?=$i;?></td>
            <td><?=$row['title'];?></td>
            <td><?=$row['text'];?></td>
            <td><?=$row['country'];?></td>
            <td><?=$row['year'];?></td>
            <td><?=$row['couter'];?></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?=$row['id']?>">Удалить</a></td>
            <td><a class="btn btn-success" href="edit.php?id=<?=$row['id']?>">Изменить</a></td>
        </tr>
        <?php
        }
        ?>

    </table>
    <a class="btn btn-primary " href="index.php">Добавить</a>
</body>
</html>