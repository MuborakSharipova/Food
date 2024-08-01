<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-starter.css">
</head>
<body>
    <center><h1>Добавить</h1></center>
    <div class="col-sm-9" >
        <form action="http://foodies-starter/index.php" method="post">
        <label for="">Title</label>
        <input type="text" name="title" id="" class="form-control">
        <label for="">Text</label>
        <input type="text" name="text" id="" class="form-control">
        <label for="">Число</label>
        <input type="date" name="created_ad" id="" class="form-control">
        <label for="">Производитель</label>
        <input type="text" name="created_by" id="" class="form-control">
        <label for="">Изображение</label>
        <input type="file" name="image" id="" class="form-control"><br>
        <input  type="submit" value="Отправить" class="btn btn-success" name="btn" >
        </form> 
    </div>
  
</body>
</html>