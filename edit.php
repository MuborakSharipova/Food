<?php
if (!isset($_GET['id']) || empty($_GET['id']))
{
    header('Location:select.php');
}
require_once('config.php');
$id = $_GET['id'];
$query = "Select * from contacts where id = $id";
$result = mysqli_query($conn, $query);
$rows = mysqli_num_rows($result);
if($rows <= 0){
    header('Localtion:select.php');
}
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <h1 align="center">Изменить</h1>
</head>
<body>
<form method="get" class="w3layouts-contact-fm" action="update.php">
                        <div class="row main-cont-sec">
                            <div class="col-md-6 left-cont-contact">
                                <div class="form-group">
                                    <label for="w3lName">Имя</label>
                                    <input class="form-control" type="text" name="name" value="<?=$row['name'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="w3lName">Фамилия</label>
                                    <input class="form-control" type="text" name="surname" value="<?=$row['surname'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="w3lSender">Email</label>
                                    <input class="form-control" type="email" name="email" value="<?=$row['email'];?>">
                                </div>
                            </div>
                            <div class="col-md-6 right-cont-contact mt-md-0 mt-1">
                                <div class="form-group"  value="<?=$row['text'];?>">
                                    <label for="message">Письмо</label>
                                    <textarea  class="form-control" name="text" ></textarea>
                                </div>
                            </div>
        <input type="hidden" name="id" value="<?=$id;?>">

                        </div>
                        <div class="form-group-2 mt-4">
                            <button type="submit"  name="edit" class="btn btn-success">Изменить</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
</body>
</html>