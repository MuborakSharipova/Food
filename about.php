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
    <title>Foodies - Restaurant Category Responsive Web Template - About : W3Layouts</title>
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
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">О нас</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Главная</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>About Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- about2 section -->
    <section class="w3l-about2">
        <div class="content-with-photo4-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-2-secs-right">
                        <img src="assets/images/about2.png" alt="" class="img-fluid img-responsive" />
                    </div>
                    <div class="col-lg-6 about-2-secs py-lg-5 pt-lg-0 pt-5">
                        <h3 class="title-big">Только свежие и здоровые продукты для вас!</h3>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about2 section -->
    <!-- stats -->
    <section class="w3_stats py-5" id="stats">
        <div class="container py-md-4 py-3">
            <div class="w3-stats">
                <div class="row text-center">
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="5100" data-speed="1500"></div>
                            <p class="count-text ">счастливые клиенты</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="971" data-speed="1500"></div>
                            <p class="count-text ">мастер шефы</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="7600" data-speed="1500"></div>
                            <p class="count-text ">Оредера каждый день</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-md-0 mt-4">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="36" data-speed="1500"></div>
                            <p class="count-text ">Лет опыта</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- team with grids section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 py-5">
            <div class="container py-md-4 py-3">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3 class="title-main-2 text-center p-lg-4">Привет. Наша строение в текущий момент
                            около 20 лет. Мы лучше всех !</h3>
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-sm-5 mt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="position-relative">
                                    <img src="assets/images/team1.jpg" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a href="about.php">Джимик Насим</a></h4>
                                        <p>Лучший шеф</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <div class="position-relative">
                                    <img src="assets/images/team2.jpg" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a href="about.php">Генри Итондо</a></h4>
                                        <p>Експерт еды</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team with grids section -->
    <!-- big video about -->
    <section class="w3l-big-video-about video-section pb-md-5 pb-2 pt-md-4 pt-2">
        <div class="container pb-md-5 pb-3">
            <div class="position-relative">
                <img src="assets/images/video2.jpg" alt="" class="img-fluid radius-image-full">
                <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                    <span class="video-play-icon">
                        <span class="fa fa-play"></span>
                    </span>
                </a>
                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://www.youtube.com/embed/3lL8Szf0ytc" frameborder="0" allow="autoplay; fullscreen"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- big video about -->
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

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

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

    <!-- counter for stats -->
    <script src="assets/js/counter.js"></script>
    <!-- //counter for stats -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>