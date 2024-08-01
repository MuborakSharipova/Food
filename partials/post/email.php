<?php
require_once('db.php');

if(isset($_POST['email']) && !empty($_POST['email'])){
$email = $_POST['email'];


$query = "INSERT INTO email(`email`)VALUES('$email');";
echo $query;

$result = mysqli_query($conn, $query);
header ("Location: email.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
    
    <table class="table col-sm-9">
     <tr>
        <th>#</th>
        <th>Email</th>
     </tr>
     <?php
        $i=0;
        require_once("db.php");
        $query = "Select * from email";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result))
        {
            
        $i++;
        ?>
        <tr >
            <td><?=$i;?></td>
            <td><?=$row['email'];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            padding: 8px;
            text-align: center;
        }
        
    </style>
    <a href="../../index.php">
    <input type="button" value="Выход" class="btn btn-primary" >
    </a>
</body>
</html>