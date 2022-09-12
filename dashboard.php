<?php
session_start();
include_once("php-includes/dbh.inc.php");
include_once('php-includes/dashboard-controller.php');

//prevents user who is not signed in from typing /dashboard.php in the URL and accessing the page.
//if there is no current session redirect to login.php
if (!isset($_SESSION['userid'])) {
    header("location: login.php");
    exit();
}

//returning the user data from the DB for the specified user (this is later used to UPDATE the user data)
$returnuserData = "SELECT * FROM users WHERE usersId=".$_SESSION['userid'];
$result = $conn->query($returnuserData);
if ($result->num_rows > 0) {
    $userdata = $result->fetch_assoc();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the un-official dashboard page for Foals">
    <title>Foals | Dashboard</title>
    <!--Imported google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom css-->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body class="dashboard-body">
    <header>
        <div class="container">
            <div class="row p-2 d-flex align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                <!-- Foals logo from URL: https://www.foals.co.uk/sites/g/files/g2000007121/f/201801/FOALS_Logo.svg -->
                    <a href="index.php"><img src="imgs/global/foalslogo.svg" alt="Foals main logo image"></a>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-8 col-8">
                    <nav class="text-white float-right nav-bar">
                        <div class="inner-nav">
                            <a href="index.php">HOME</a>
                            <a href="news.php">NEWS</a>
                            <a href="index.php#shows">SHOWS</a>
                            <a href="index.php#music">MUSIC</a>
                            <a href="req.html" target="_blank">REQUIREMENTS</a>
                            <a href="logout.php" class="sign-out">Sign out<img src="imgs/index/login-icon.svg" alt="Sign out icon" class="img-responsive login-icon"></a>
                        </div>
                        <div class="float-right d-xl-none d-l-none d-md-none d-sm-block d-block" id="burger">☰</div>
                    </nav>
                </div>
            </div>
        </div>
        <nav id="mobile-nav">
            <a href="logout.php" class="sign-out">Sign out<img src="imgs/index/login-icon.svg" alt="Sign out icon" class="img-responsive login-icon"></a>
            <!-- White line top image URL: https://www.freepnglogos.com/images/line-40944.html -->
            <img src="imgs/global/whitelinetop.png" class="white-line-top" alt="nav top white line separator">
            <a href="index.php">H O M E</a>
            <a href="news.php">N E W S</a>
            <a href="index.php#shows">S H O W S</a>
            <a href="index.php#music">M U S I C</a>
            <a href="req.html" target="_blank">R E Q U I R E M E N T S</a>
            <!-- White line bottom image URL: https://www.freepnglogos.com/images/line-40944.html -->
            <img src="imgs/global/whitelinebottom.png" class="white-line-bottom" alt="nav bottom white line seperator">
        </nav>
    </header>
    <main>
       <section class="dashboard-wrapper">
           <div class="container">
               <div class="row p-2 d-flex align-items-center">
                    <div class="col-12 news text-center">
                        <h1>YOUR ACCOUNT INFORMATION</h1>
                    </div>
               </div>
               <div class="row d-flex text-center">
                    <div class="col-lg-5 col-12">
                        <div class="random-wrapper">
                            <h2 class="data-headers">UPDATE YOUR DATA</h2>
                            <p class="text-white">View your current stored data, also feel free to update it anytime!</p><br/>
                            <p class="text-white">Please update your email & username if updating your data</p>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <input type="hidden" name="usersId" value="<?php echo isset($userdata['usersId'])? $userdata['usersId']:''; ?>" />
                                <input type="hidden" name="action" value="update" />
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                    <input type="text" name="firstname" class="form-control my-1 p-1" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']:$userdata['usersFirstname']; ?>" placeholder="Firstname">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                    <input type="text" name="lastname" class="form-control my-2 p-1" value="<?php echo isset($_POST['lastname'])? $_POST['lastname']:$userdata['usersLastname']; ?>" placeholder="Lastname">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                    <input type="text" name="email" class="form-control my-2 p-1" value="<?php echo isset($_POST['email'])? $_POST['email']:$userdata['usersEmail']; ?>" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                    <input type="text" name="uid" class="form-control my-2 p-1" value="<?php echo isset($_POST['uid'])? $_POST['uid']:$userdata['usersUid']; ?>" placeholder="Username"><br />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                    <button style="cursor: pointer" type="submit" class="updateData mb-4" name="u">Update</button><br/>
                                    </div>
                                </div>
                                <hr class="new1">
                                <?php if(isset($_SESSION['error'])){ ?>
                                    <ul class="list-group">
                                        <?php foreach($_SESSION['error'] as $message){ ?>
                                        <li class="update-error"><?php echo $message; ?></li>
                                        <?php } ?>
                                    </ul>
                                <?php unset($_SESSION['error']); } 
                                ?>
                                <?php if(isset($_GET['success'])){ ?>
                                    <ul class="list-group">
                                    <li class="text-success"><?php echo $_GET['success']; ?></li>
                                    </ul>
                                <?php  } ?>
                            </form>
                        </div> 
                    </div>
                    <div class="d-flex col-lg-7 col-12">
                    <!-- Image origin https://mpng.subpng.com/20190305/ea/kisspng-graphic-design-web-design-landing-page-graphics-s-ha-ni-dung-e-learning-lms-s-h-5c7e166cdf2908.6950572015517671489141.jpg -->
                    <img src="imgs/dashboard/landing.png" class="img-fluid marketing-img p-2" alt="dashboard marketing image">
                    </div>
                </div>
                <div class="row d-flex text-center">
                    <div class="col-12">
                        <h2 class="data-headers">DELETE YOUR DATA</h2>
                        <p class="text-white">You can delete all of your data at any time.</p>
                        <p class="text-white"><strong>You can delete your entire data from our servers at any time. Please be aware by doing this your user account and email address will also be deleted.</strong><br />Lorem, ipsum dolor sit am ssimos sunt beet consectetur adipisicing elit. Unde pariatur ipsam voluptate adipisci, dolore prae ssimos sunt besentium, cumque, dolores neque fugiat consectetur quaerat enim nemo. Doloribus quibusdam illum perfesunt beatae facere commodi, ema deserunt officiis eveniet magnam alias expedita, repellendus, eligendi hic nihil nobis. Cupiditate delectus harum ducimus nihil quas eius velit rem perspiciatis incidlectus! Doloribus facere deserunt ssimos sunt be  fugit ipsum. Dolor excepturi delectus nulla aut porro consequatur placeat debitis repellat esse.</p>
                        <button style="cursor: pointer" class="delete-data mb-2" id="deleteData">Delete all stored data</button><br /><br />
                        <span class="delete-response"></span>
                        <hr class="new2">
                    </div>
               </div>
               <div class="row d-flex p-2 align-items-center text-center">
                    <div class="col-12 text-white box-around">
                        <h3 class="terms-text">OUR TERMS AND CONDITIONS ARE CONSTANTLY CHANGING.<br />
                        READ OUR UPDATED TERMS BELOW!</h3><br />
                        <button style="cursor: pointer" name="terms" class="terms-data mb-2" id="submit">View new terms</button>
                        <span id="view_terms"></span>
                    </div>
                </div>
           </div>
       </section>
    </main>
    <footer class="footer-socials text-center p-4">
    <!--php include for the footer was used on each page to provide better structure, keep code more clean and shorten code length-->    
    <?php include("footer.php");?>
    </footer>
    <!-- Jquery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <!--TERMS AND CONDITIONS JS-->
    <script src="js/terms.js"></script>
    <!--DELETE RECORDS JS -->
    <script src="js/delete.js"></script>
    <!-- Custom JQuery plugin to enable nice scrollbar at side of page -->
    <script src="js/jquery.nicescroll.min.js"></script>
</body>
</html>