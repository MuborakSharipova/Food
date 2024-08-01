<?php
require_once('db.php');
if(isset($_POST["btn"])){
$title = $_POST['title'];
$text = $_POST['text'];
$created_ad = $_POST['created_ad'];
$created_by = $_POST['created_by'];
$image = $_POST['image'];


$query = "INSERT INTO posts(`title`,`text`,
`created_ad`,`created_by`,`image`)VALUES('$title','$text','$created_ad','$created_by','$image');";
echo $query;

$result = mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style-starter.css">
</head>
    <body>
<section class="w3l-blog-sec py-5">
        <div class="services-layout py-md-4 py-3">
            <div class="container">
                <h3 class="title-big mb-4 pb-2">Сообщения в блоге</h3>
 
<?php
                                $i=0;
                                require_once("db.php");
                                                                
                                $query="Select * from posts";
                                $result = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($result)){
                                    $i++;
                               
                                ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                            <?=$i;?>
                                <h3 class="date"><?=$row['created_ad']?><sup></sup> </h3>
                                
                                    <figure>
                                        <img class="img-responsive" src="assets/images/post/<?=$row['image'];?>" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a class="vv-link"><?=$row['title']?> <?=$row['text'];?></a>
                                </h3>
                                
                </div>
                </div>
                </div>
                </div>
                <br><br>
                                
                                
                <?php
                                }
                ?>
             
                    
            </div>
        </div>
        
    </section>  
                           
   