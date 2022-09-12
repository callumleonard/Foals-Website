<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the un-official login page for Foals">
    <title>Foals | Sign In</title>
    <!--Imported google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/signin.css">
</head>
<header>
<!-- The below cookie consent script tag requested to be placed directly in the header tag by the cookie consent developer themselves -->
<script src="https://cdn.websitepolicies.io/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#000000","text":"#ffffff","border":"#dda11d"},"button":{"background":"#dda11d","text":"#000000"}},"content":{"link":"Learn more","message":"By signing up to this website, we may retain personal information about you, such as your firstname, lastname and email address.","href":"privacy.php"},"position":"bottom-right","margin":"large"})});</script>
</header>
<body class="login-wrapper">
    <main>
        <section class="my-4 mx-5">
            <div class="container">
                <div class="row d-flex no-gutters">
                    <div class="col-lg-5">
                        <!-- Login Image https://static01.nyt.com/images/2019/10/24/arts/23foals4/merlin_162715545_bdecf7ad-c27a-403c-8aff-9195fa390b27-superJumbo.jpg?quality=75&auto=webp -->
                        <img src="imgs/login-register/yan.jpg" class="img-fluid" alt="yannis singing live at show">
                    </div>
                    <div class="col-lg-7 pt-5 px-5">
                         <!-- Foals logo from URL: https://www.foals.co.uk/sites/g/files/g2000007121/f/201801/FOALS_Logo.svg -->
                        <a href="index.php"><img src="imgs/global/foalslogo.svg" class="py-3 img-fluid login-foals" alt="Foals main logo image"></a>
                        <h4 class="text-white">Sign into your Foals account</h4>
                        <form action="php-includes/login.inc.php" method="post" class="signin-form">
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" name="username" placeholder="Username" class="form-control my-3 p-4">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="password" name="password" placeholder="Password" class="form-control my-3 p-4">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="submit" style="cursor: pointer" name="submit" class="btn1 mt-3 mb-4">Sign in</button>
                                </div>
                            </div>
                            <?php
                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "incorrectcredentials") {
                                echo '<p class="errormsg">Email or Password incorrect.</p>';
                                }
                                if ($_GET["error"] == "inputempty") {
                                    echo '<p class="errormsg">Please fill in all form fields.</p>';
                                }
                                if ($_GET["error"] == "stmtfailed") {
                                    echo '<p class="errormsg">Something went wrong.</p>';
                                }
                            }
                            ?>
                            <p class="text-white">Don't have a Foals account? <a href="register.php">Register here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Jquery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <!-- Custom JQuery plugin to enable nice scrollbar at side of page -->
    <script src="js/jquery.nicescroll.min.js"></script>
</body>
</html>