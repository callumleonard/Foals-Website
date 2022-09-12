<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the un-official news page for Foals">
    <title>Foals | News</title>
    <!--Imported google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom css-->
    <link rel="stylesheet" href="css/main.css">
    <!--Cookie consent-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css">
</head>
<body class="news-body">
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
                            <a href="login.php" class="sign-in">Sign in<img src="imgs/index/login-icon.svg" alt="Sign in icon" class="img-responsive login-icon"></a>
                        </div>
                        <div class="float-right d-xl-none d-l-none d-md-none d-sm-block d-block" id="burger">☰</div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row background-remove">
            <!--Background image origin https://mobillegends.net/?arsae=http%3A%2F%2Fstatic1.squarespace.com%2Fstatic%2F5b00d89255b02c07ff806f41%2F5b1fb20e70a6adf11592bc17%2F5d2fcc4d52a079000172c8a3%2F1563612213379%2F23_Foals_MCA_LucasPackett-%2B6G6A5194.jpg%3Fformat%3D1500w-->
                <img src="imgs/news/news-background.jpg" class="foals-background" alt="page background of Foals">
                <div class="d-xl-none d-l-none d-md-none d-sm-block d-block"></div>
            </div> 
        </div>
        <nav id="mobile-nav">
            <a href="login.php" class="sign-in">Sign in<img src="imgs/index/login-icon.svg" alt="Sign in icon" class="img-responsive login-icon"></a>
            <!-- White line top image URL: https://www.freepnglogos.com/images/line-40944.html -->
            <img src="imgs/global/whitelinetop.png" class="white-line-top" alt="nav top white line separator">
            <a href="index.php">H O M E</a>
            <a href="news.php">N E W S</a>
            <a href="index.php#shows">S H O W S</a>
            <a href="index.php#music">M U S I C</a>
            <a href="req.html" target="_blank">R E Q U I R E M E N T S</a>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="socials text-center">
                            <a href="https://twitter.com/foals" target="_blank"><img src="imgs/social_icons/twitter.svg" width="45" height="45" alt="Twitter social icon & link"></a>
                            <a href="https://www.instagram.com/foals" target="_blank"><img src="imgs/social_icons/instagram.svg" width="45" height="45" alt="Instagram social icon & link"></a>
                            <a href="https://www.facebook.com/Foals" target="_blank"><img src="imgs/social_icons/facebook.svg" width="45" height="45" alt="Facebook social icon & link"></a>
                            <a href="https://www.youtube.com/user/wearefoals" target="_blank"><img src="imgs/social_icons/youtube.svg" width="45" height="45" alt="Youtube social icon & link"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- White line bottom image URL: https://www.freepnglogos.com/images/line-40944.html -->
            <img src="imgs/global/whitelinebottom.png" class="white-line-bottom" alt="nav bottom white line seperator">
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="news text-center p-3 col-12">
                    <h1>NEWS</h1>
                </div>
            </div>
        </div>
        <section class="vinyl-wrapper">
            <div class="container">
                <div class="row vinyls-info text-center">
                    <div class="col-12 text-center" id="collection">
                        <h2>THE COLLECTION</h2>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="row button1">
                            <!--vinyl image origin https://www.foals.co.uk/sites/g/files/g2000007121/f/202006/FOALS_Remix_Vol.I_V2.jpg-->
                            <a href="https://www.foals.co.uk/news/collected-reworks-vol-i-28851" target="_blank"><h1>COLLECTED REWORKS VOL. I</h1><img src="imgs/news/FOALS_Remix_Vol.I_V2.jpg" width="245" height="245" alt="Foals collected reworks vinyl Vol. 1"></a>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm openclose1 ">MORE INFO</button>
                                    <div id="btncontent1" class="alert alert-success d-none">INITIAL RELEASE: 12 JUN 2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="row button2">
                            <!--vinyl image origin https://www.foals.co.uk/sites/g/files/g2000007121/f/202007/FOALS_Remix_Vol.II_v2.jpg-->
                            <a href="https://www.foals.co.uk/news/collected-reworks-vol-ii-28976" target="_blank"><h1>COLLECTED REWORKS VOL. II</h1><img src="imgs/news/FOALS_Remix_Vol.II_v2.jpg" width="245" height="245" alt="Foals collected reworks vinyl Vol. 2"></a>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm openclose2">MORE INFO</button>
                                    <div id="btncontent2" class="alert alert-success d-none">INITIAL RELEASE: 31 JUL 2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="row button3">
                            <!--vinyl image origin https://www.foals.co.uk/sites/g/files/g2000007121/f/202010/FOALS_Remix_Vol.III_.jpg-->
                            <a href="https://www.foals.co.uk/news/collected-reworks-vol-iii-listen-now-29021" target="_blank"><h1>COLLECTED REWORKS VOL. III</h1><img src="imgs/news/FOALS_Remix_Vol.III_.jpg" width="245" height="245" alt="Foals collected rework vinyl Vol. 3"></a>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm openclose3">MORE INFO</button>
                                    <div id="btncontent3" class="alert alert-success d-none">INITIAL RELEASE: 09 OCT 2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="row button4">
                            <!--vinyl image origin https://www.foals.co.uk/sites/g/files/g2000007121/f/202006/FOALS_Remix_Vol.I_V2.jpg-->
                            <a href="https://www.foals.co.uk/news/collected-reworks-vol-i-28851" target="_blank"><h1>COLLECTED REWORKS VOL. IV</h1><img src="imgs/news/FOALS_Remix_Vol.IV_v2.JPG" width="245" height="245" alt="Foals collected reworks vinyl Vol. 4"></a>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm openclose4 ">MORE INFO</button>
                                    <div id="btncontent4" class="alert alert-success d-none">INITIAL RELEASE: 23 NOV 2020</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row vinyls-info2 text-center">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="row button5">
                            <!--album image origin https://www.foals.co.uk/sites/g/files/g2000007121/f/201901/Foals_Standard_pk3000x3000_0.jpg-->
                            <a href="https://www.foals.co.uk/news/everything-not-saved-will-be-lost-part-1-26171" target="_blank"><h1>ENSWBL PART. I</h1><img src="imgs/news/ENSWBLPT1.jpg" width="240" height="240" alt="Foals album everything not saved will be lost part 1."></a>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm openclose5">MORE INFO</button>
                                    <div id="btncontent5" class="alert alert-success d-none">INITIAL RELEASE: 21 JAN 2019</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="row button6">
                            <!--album image origin https://www.foals.co.uk/sites/g/files/g2000007121/f/201910/Foals_12_Front.jpg-->
                            <a href="https://www.foals.co.uk/news/enswbl-pt-2-out-now-27636" target="_blank"><h1>ENSWBL PART. II</h1><img src="imgs/news/ENSWBLPT2.jpg" width="235" height="235" alt="Foals album everything not saved will be lost part 2."></a>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm openclose6">MORE INFO</button>
                                    <div id="btncontent6" class="alert alert-success d-none">INITIAL RELEASE: 18 OCT 2013</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="row button7">
                            <!--foals remix image origin https://www.foals.co.uk/sites/g/files/g2000007121/f/201909/Remixes_PT.1_web.png-->
                            <a href="https://www.foals.co.uk/news/everything-not-saved-will-be-lost-part-1-remixes-27471" target="_blank"><h1>ENSWBL PART. I REMIX</h1><img src="imgs/news/ENSWBLPT1. REMIX.png" width="235" height="235" alt="Foals album everything not saved will be lost remix."></a>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm openclose7">MORE INFO</button>
                                    <div id="btncontent7" class="alert alert-success d-none">INITIAL RELEASE: 18 OCT 2019</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                        <div class="row button8">
                            <!--foals remix image origin https://www.foals.co.uk/sites/g/files/g2000007121/f/201910/Foals_12_Front.jpg -->
                            <a href="https://www.foals.co.uk/news/enswbl-pt-2-out-now-27636" target="_blank"><h1>ENSWBL PART. II REMIX</h1><img src="imgs/news/FOALS_THE_RUNNER REMIX.jpg" width="235" height="235" alt="Foals song the runner remixed."></a>
                            <div class="text-center">
                                <button class="btn btn-primary btn-sm openclose8">MORE INFO</button>
                                    <div id="btncontent8" class="alert alert-success d-none">INITIAL RELEASE: 04 FEB 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row push-down"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center text-center">
                    <h1 class="infamous-pidge">PIDGE</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center align-items-center p-1">
                    <!--Pidge origin https://www.redbubble.com/i/art-print/Black-Cat-Foals-by-DANIEL-KHATCHA/46563912.1G4ZT-->
                    <img src="imgs/news/pidge.PNG" class="img-responsive" alt="Pidge the cat photo">
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-center align-items-center text-white">
                    <p class="pidge-text">Without a doubt the main character who pulls all the strings behind the band Foals, meet Pidge! Pidge has been part of the band for 12 years and plays a variety of instruments from the sax to the on magnam, aliquid ducimus. Accusantium pariatur quisquam nisi, unde esse minima aspernatur labore ea molum pariatur quisquam nisi, unde esse minima aspernatur labore ea mollitia tempora exerclolitia tempora exercitationem ipsum veritatis! Fugiat maiorelique porro, quidem dolorem sit ea facilis odio aut apeim vel veritatis. Qui iure quae explicabo quasi, ex velit quo ducimus? Possimus, veniam? Explicabo illum voluptatibus aperiam, molestiae incidunt, enim in repellat dolore saepe eon!</p>
                    <p id="pidge-button">SEE PIDGE'S FAVOURITE SECRET WORD!<button id="btn-pidge">View my favourite word</button></p> 
                    <p class="pidgey-colour"><strong>HOVER YOUR MOUSE OVER THIS TEXT TO SEE MY FAVOURITE COLOUR!</strong></p> 
                </div>
            </div>
        </div>
        <section class="album-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <hr class="pidge-top">
                        <h1 class="album-text">ALBUM COUNTDOWN</h1>
                        <div class="album-countdown">
                            <div class="container-days">
                                <h3 class="day"></h3>
                                <h3>DAYS</h3>
                            </div>
                            <div class="container-hours">
                                <h3 class="hour"></h3>
                                <h3>HOURS</h3>
                            </div>
                            <div class="container-minutes">
                                <h3 class="minute"></h3>
                                <h3>MINUTES</h3>
                            </div>
                            <div class="container-seconds">
                                <h3 class="second"></h3>
                                <h3>SECONDS</h3>
                            </div>
                        </div>
                        <hr class="pidge-top">
                    </div>
                </div> 
            </div>
        </section>
        <div class="d-xl-none d-l-none d-md-none d-sm-block d-block"></div>  
    </main>
    <footer class="footer-socials p-4 text-center">
    <!--php include for the footer was used on each page to provide better structure, keep code more clean and shorten code length-->    
    <?php include("footer.php");?>
    </footer>
    <!-- Jquery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <!--AJAX Pidge JS-->
    <script src="js/pidge.js"></script>
    <script src="js/colour.js"></script>
    <!--Album Countdown JS-->
    <script src="js/countdown.js"></script>
    <!-- Cookie Consent -->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <!-- Custom JQuery plugin to enable nice scrollbar at side of page -->
    <script src="js/jquery.nicescroll.min.js"></script>
</body>
</html>