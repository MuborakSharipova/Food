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
            <th>Email</th>
            <th>Письмо</th>
            <th>Удалить</th>
           <th>Изменить</th>
        </tr>
        <?php
        $i=0;
        require_once('config.php');
        $query="Select * from contacts";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result))
        {

            $i++;
        ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['surname'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['text'];?></td>
            <td><a class="btn btn-danger" href="delete.php?id=<?=$row['id']?>">Удалить</a></td>
            <td><a class="btn btn-success" href="edit.php?id=<?=$row['id']?>">Изменить</a></td>
        
        </tr>
        <?php
        }
        ?>
    </table>
    <a class="btn btn-primary " href="contact.php">Добавить</a>
    <td><a class="btn btn-success" href="index.php">Выход</a></td>

</body>
</html>