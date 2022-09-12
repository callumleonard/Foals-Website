<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the un-official register page for Foals">
    <title>Foals | Create an acocunt</title>
    <!--Imported google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<header>
<!-- The below cookie consent script tag requested to be placed directly in the header tag by the cookie consent developer themselves -->    
<script src="https://cdn.websitepolicies.io/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#000000","text":"#ffffff","border":"#dda11d"},"button":{"background":"#dda11d","text":"#000000"}},"content":{"link":"Learn more","message":"By signing up to this website, we may retain personal information about you, such as your name, home address, email, and phone number.","href":"privacy.php"},"position":"bottom-right","margin":"large"})});</script>
</header>
<body class="login-wrapper">
    <main>
        <section class="my-4 mx-5">
            <div class="container">
                <div class="row d-flex no-gutters">
                    <div class="col-lg-7 pt-4 px-5">
                        <a href="index.php"><img src="imgs/global/foalslogo.svg" class="py-0 img-fluid login-foals" alt="Foals main logo image"></a>
                        <h4 class="text-white">Create your Foals account</h4>
                        <form action="php-includes/register.inc.php" method="post" class="register-form">
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" name="firstname" placeholder="Firstname" class="form-control my-1 p-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" name="lastname" placeholder="Lastname" class="form-control my-1 p-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" name="email" placeholder="Email" class="form-control my-1 p-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" name="uid" placeholder="Username" class="form-control my-1 p-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="password" name="password" placeholder="Password" class="form-control my-1 p-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                <input type="password" name="passwordrepeat" placeholder="Repeat password" class="form-control my-1 p-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="submit" style="cursor: pointer" name="submit" class="btn1 mt-1 mb-3">Create account</button>
                                </div>
                            </div>
                            <?php
                            //Displays error messages to the user based on the form "error"
                            if (isset($_GET["error"])) 
                            {
                                if ($_GET["error"] == "inputempty") {
                                    echo '<p class="errormsg">Please fill in all form fields.</p>';
                                }
                                else if ($_GET["error"] == "invaliduid") {
                                    echo '<p class="errormsg">Please choose a username with only letters and numbers.</p>';
                                }
                                else if ($_GET["error"] == "invalidemail") {
                                    echo '<p class="errormsg">Please enter a correct email address.</p>';
                                }
                                else if ($_GET["error"] == "passwordmismatch") {
                                    echo '<p class="errormsg">Both passwords provided do not match.</p>';
                                }
                                else if ($_GET["error"] == "passwordnotsecure") {
                                    echo '<p class="errormsg">Password failed to meet complexity requirements.<br/> Greater than 8 characters, mix of uppercase, lowercase and numbers required.</p>';
                                }
                                else if ($_GET["error"] == "stmtfailed") {
                                    echo '<p class="errormsg">Something went wrong.</p>';
                                }
                                else if ($_GET["error"] == "usernameORemailtaken") {
                                    echo '<p class="errormsg">Username or Email is already registered.</p>';
                                }
                                else if ($_GET["error"] == "invalidcharacter") {
                                    echo '<p class="errormsg">Please use only letters in your name.</p>';
                                }
                                else if ($_GET["error"] == "invalidsymbol") {
                                    echo '<p class="errormsg">Please use only letters and numbers in your username.</p>';
                                }
                                else if ($_GET["error"] == "none") {
                                    echo '<p>Account Created.</p>';
                                }
                            }
                            ?>
                            <p class="text-white">Have a Foals account? <a href="login.php">Login here</a></p>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <!-- Register photo https://www.nme.com/wp-content/uploads/2021/11/DSP-Excl-Elliot-Cooke-1.jpg -->
                        <img src="imgs/login-register/album.jfif" class="img-fluid no-gutters" alt="Album cover II">
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

