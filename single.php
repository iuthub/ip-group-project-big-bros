<!DOCTYPE html>
<html>

<head>
    <title>Coliseum Grand Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="My Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- parallax -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //parallax -->
</head>

<body>
    <!-- banner -->
    <div class="banner about-bg">
         <div class="top-banner about-top-banner">
            <div class="container">
                <div class="top-banner-left">
                    <ul>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> +998 71 289-99-99</li>
                        <li><a href="mailto:info@inha.uz"><i class="fa fa-envelope" aria-hidden="true"></i>info@inha.uz</a></li>
                    </ul>
                </div>
                <div class="top-banner-right">
                    <ul>
                        <li><a class="facebook" href="https://fb.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a class="facebook" href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="facebook" href="https://dribbble.com"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a class="facebook" href="https://google.com/accounts/login"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="header">
            <div class="container">
                <div class="logo">
                    <h1>
                        <a href="index.html">Coliseum Grand</a>
                    </h1>
                </div>
                <div class="top-nav">
                    <nav class="navbar navbar-default">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="register.html"><button type="button" class="btn btn-danger">Book now!</button></a></li>
                                <div class="clearfix"> </div>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- blog -->
    <div class="blog">
        <!-- container -->


        <div class="container">
            <div class="col-md-8 blog-top-left-grid">
                <div class="left-blog left-single">
                    <div class="blog-left">
                        <div class="single-left-left">
                            <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on April 25, 2020 &nbsp;&nbsp; <a href="#">Comments (10)</a></p>
                            <img src="images/offer.jpg" alt="" />
                        </div>
                        <div class="blog-left-bottom">
                            <p>Tariff “For Participants” Colesium Grand
                                Get more benefits - and more fun - by booking wisely, only at hyatt.com.<br>

                                Save up to 10% with the “For Participants” rate: Book a standard or superior room at participating hotels. The standard cancellation policy applies to the rate.
                            </p>
                        </div>
                        <div class="blog-left-bottom left-bottom">
                            <p>Save up to 15% with the tariff Early purchase “For Participants” *: reservations at hotels participating in the program must be made no later than 14 days before the date of arrival.
                            </p>
                        </div>
                        <div class="blog-left-bottom left-bottom">
                            <p>If you require maximum flexibility, book a room at one of the participating Colesium Grand hotels no later than 7 days prior to arrival. The booking period may vary.</p>
                            <h6>* Non-refundable prepayment required.</h6>
                        </div>
                    </div>

                    <?php
                            $db = mysqli_connect("localhost","root","", "colosseum");
                            if( !empty($_POST[name]) and !empty($_POST[email]) and !empty($_POST[message]) ){
                                $date = date("Y-m-d");
                                mysqli_query($db, "INSERT INTO comments (name,email,message,date) VALUES ('$_POST[name]','$_POST[email]','$_POST[message]', '$date')");
                            }


                        ?>
                    <div class="response">
                        <h3>Responses</h3>


                    <?
                    $db = mysqli_connect("localhost","root","", "colosseum");
                    $comments = mysqli_fetch_all(mysqli_query($db,"SELECT * FROM comments ORDER BY date DESC"), MYSQLI_ASSOC);
                    foreach($comments as $comment){
                    ?>
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                    <img class="media-object" src="images/t1.jpg" alt="">
                                </a>
                            </div>
                            <div class="media-body response-text-right">
                                <p><?=$comment[message]?></p>
                                <ul>
                                    <li><?=$comment[date]?></li>
                                    <li><a href="single.html">Reply</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                    <?
                    }
                    ?>

                    <div class="opinion">
                        <h2>Leave Your Comment</h2>


                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Name" required="">
                            <input type="text" name="email" placeholder="Email" required="">
                            <textarea name="message" placeholder="Message" required=""></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //container -->
    </div>
    <!-- //blog -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid">
                    <div class="footer-grid-heading">
                        <h4>Address</h4>
                    </div>
                    <div class="footer-grid-info">
                        <p>INHA University in Uzbekistan
                            <span>St Ziyolilar 9</span>
                        </p>
                        <p class="phone">Phone : +998 71 289-99-99
                            <span>Email : <a href="mailto:info@inha.uz">info@inha.uz</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 footer-grid">
                    <div class="footer-grid-heading">
                        <h4>Navigation</h4>
                    </div>
                    <div class="footer-grid-info">
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-grid">
                    <div class="footer-grid-heading">
                        <h4>Follow</h4>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="https://fb.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://rss.com"><i class="fa fa-rss"></i></a></li>
                            <li><a href="https://vk.com"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-grid">
                    <div class="footer-grid-heading">
                        <h4>Newsletter</h4>
                    </div>
                    <div class="footer-grid-info">
                        <form action="#" method="post">
                            <input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="copyright">
                <p>© 2020 IP Project . All Rights Reserved | Design by Big Bros <img src="images/logo.png" alt="Big Bros" width="50px" height="50px"></p>
            </div>
        </div>
    </div>
    <!-- //footer -->
</body>

</html>