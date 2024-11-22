<?php
session_start();
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $result = mysqli_query($conn, "SELECT email, password FROM users WHERE email ='$email' AND password='$password'");
    
    // Count the number of users/rows returned by the query
    $user_matched = mysqli_num_rows($result);
    
    // Check if the user is matched/exists
    if ($user_matched > 0) {
        $_SESSION["email"] = $email;
        header("location: home.html");
    } else {
        // Display error message
        ?>

        <!DOCTYPE html>
        <html lang="en-US">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
             <title>BREW MATCHA</title>
            <link rel="stylesheet" href="css/components.css">
            <link rel="stylesheet" href="css/icons.css">
            <link rel="stylesheet" href="css/responsee.css">
            <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
            <link rel="stylesheet" href="owl-carousel/owl.theme.css">
            <!-- CUSTOM STYLE -->
            <link rel="stylesheet" href="css/cb-style.css">
            <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet">
            <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
            <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        </head>

        <body class="size-1280">
            <!-- HEADER -->
            <header role="banner" class="position-absolute">
                <!-- Top Navigation -->
                <nav class="background-transparent background-primary-dott full-width sticky">
                    <div class="top-nav">
                        <!-- mobile version logo -->
                        <div class="logo hide-l hide-xl hide-xxl text-center" style="width: 100%; margin: auto;">
                            <a href="#" class="logo">
                                <!-- Logo  -->
                                <img class="logo-white" src="img/Brew%20Matcha%20Logo.svg" alt="">
                            </a>
                        </div>
                        <p class="nav-text"></p>
                        <!-- logo -->
                        <ul class="logo-menu text-center" style="width: 100%; margin: auto;">
                            <a href="index.html" class="logo">
                                <!-- Logo -->
                                <img class="logo" src="img/Brew%20Matcha%20Logo.svg" alt="">
                            </a>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- MAIN -->
            <main role="main">
                <!-- Section 1 (Hero) -->
                <section class="section-top-padding background-white text-center">
                    <div class="line">
                        <h2 class="text-dark text-size-50 text-m-size-40">Login <b>Failed</b></h2>
                        <h2 class="text-dark text-size-30 text-m-size-40">User email or password is not matched</h2>
                    </div>
                </section>
            </main>

            <!-- Main Footer -->
            <section class="section background-darkgreen">
                <div class="line">
                    <div class="margin2x">
                        <!--Site map-->
                        <div class="s-12 m-6 l-3 xl-2">
                            <h4 class="text-gold margin-m-top-30">Site map</h4>
                            <a class="text-primary-hover" href="#">Home</a><br>
                            <a class="text-primary-hover" href="#">Menu</a><br>
                            <a class="text-primary-hover" href="#">Shop</a><br>
                            <a class="text-primary-hover" href="#">About us</a>
                        </div>
                        <!--Contact Us-->
                        <div class="s-12 m-6 l-3 xl-3">
                            <h4 class="text-gold text-bold margin-m-top-30">Contact Us</h4>
                            <pre class="footer-text"><i class="icon-sli-screen-smartphone icon-color"></i> <a class="text-primary-hover" href="Tel: 0555555555">0555555555</a></pre>
                            <pre class="footer-text"><i class="icon-mail icon-color"></i> <a class="text-primary-hover" href="mailto: info@brewmatcha.sa">info@brewmatcha.sa</a></pre>
                        </div>
                        <!--Get to us-->
                        <div class="s-12 m-6 l-3 xl-2">
                            <h4 class="text-gold margin-m-top-30">Get to Us</h4>
                            <p><i class="icon-sli-location-pin icon-color"></i> <a class="text-primary-hover" href="https://maps.app.goo.gl/AFxFVnmgRwUVGCyZA" target="_blank">Location</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </body>
        </html>

        <?php
    }
}
?>
