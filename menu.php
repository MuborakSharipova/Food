<?php
require_once('partials/post/db.php');
if(isset($_POST["btn"])){
$name = $_POST['name'];
$text = $_POST['text'];
$price = $_POST['price'];
$img = $_POST['img'];


$query = "INSERT INTO menu(`name`,`text`,
`price`,`img`,)VALUES('$name','$text','$price','$img');";
echo $query;

$result = mysqli_query($conn, $query);
}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Foodies - Restaurant Category Responsive Web Template - Menu : W3Layouts</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <?php
    require_once('partials/post/header.php')
    ?>
    <!--//header-->
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Foodies Меню</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Главная</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Меню</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
   
    <!-- menu -->
    <div class="menu-w3ls py-5" id="menu">
        <div class="container py-md-4 py-3">
            <h3 class="title-big mb-2">Завтрак</h3>
            <div class="row menu-body">
                <!-- Section starts: Breakfast -->
                <div class="col-lg-6 menu-section">
                    <!-- Item starts -->
                    <?php
                                $i=0;
                                require_once("partials/post/db.php");
                                                                
                                $query="Select * from menu";
                                $result = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($result)){
                                    $i++;
                               
                                ?>
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="assets/images/<?=$row['img'];?>" class="img-responsive" alt="">
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6><?=$row['name']?></h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6><?=$row['price']?></h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p><?=$row['text']?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <?php
                                }
                    ?>
                    <!-- Item starts -->
                            
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Breakfast -->
            </div>
           
            <h3 class="title-big mb-2">Обед</h3>
            <div class="row menu-body">
                <!-- Section starts: Breakfast -->
                <div class="col-lg-6 menu-section">
                    <!-- Item starts -->
                    <?php
                                $i=0;
                                require_once("partials/post/db.php");
                                                                
                                $query="Select * from lunch";
                                $result = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($result)){
                                    $i++;
                               
                                ?>
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="assets/images/<?=$row['img'];?>" class="img-responsive" alt="">
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6><?=$row['name']?></h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6><?=$row['price']?></h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p><?=$row['text']?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <?php
                                }
                    ?>
                    <!-- Item starts -->
                            
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Breakfast -->
            </div>
            <h3 class="title-big mb-2">Ужин</h3>
            <div class="row menu-body">
                <!-- Section starts: Breakfast -->
                <div class="col-lg-6 menu-section">
                    <!-- Item starts -->
                    <?php
                                $i=0;
                                require_once("partials/post/db.php");
                                                                
                                $query="Select * from dinner";
                                $result = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($result)){
                                    $i++;
                               
                                ?>
                    <div class="row menu-item">
                        <div class="col-3 p-0 position-relative">
                            <img src="assets/images/<?=$row['img'];?>" class="img-responsive" alt="">
                        </div>
                        <div class="col-9 pl-4">
                            <div class="row no-gutters">
                                <div class="col-9 menu-item-name">
                                    <h6><?=$row['name']?></h6>
                                </div>
                                <div class="col-3 menu-item-price text-right">
                                    <h6><?=$row['price']?></h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p><?=$row['text']?></p>
                            </div>
                        </div>
                    </div>
                    <!-- Item ends -->
                    <?php
                                }
                    ?>
                    <!-- Item starts -->
                            
                    <!-- Item ends -->
                </div>
                <!-- Section ends: Breakfast -->
            </div>
                    <!-- Section ends: Dinner -->
                </div>
            </div>
        </div>
    </div>
    <!-- //menu -->
    <!-- promocode section -->
   
    <!-- //promocode section -->
    <!-- footer -->
   <?php
   require_once('partials/post/footer.php')
   ?>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>