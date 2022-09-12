<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to the un-official website of Foals.">
    <title>Foals | Home</title>
    <!-- Imported fonts using google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Cookie consent -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css">
</head>
<body class="index-body">
    <header>
        <section id="video" class="main-video">
            <div class="main-content">
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
                                    <a href="#shows">SHOWS</a>
                                    <a href="#music">MUSIC</a>
                                    <a href="req.html" target="_blank">REQUIREMENTS</a>
                                    <!-- Login User Iconhttps://img.icons8.com/material-outlined/344/user.png -->
                                    <a href="login.php" class="sign-in">Sign in<img src="imgs/index/login-icon.svg" alt="Sign in icon" class="img-responsive login-icon"></a>
                                </div>
                                <div class="float-right d-xl-none d-l-none d-md-none d-sm-block d-block" id="burger">☰</div>
                            </nav>
                        </div>
                    </div>
                </div>
                <nav id="mobile-nav">
                    <!-- Login User Icon https://img.icons8.com/material-outlined/344/user.png -->
                    <a href="login.php" class="sign-in">Sign in<img src="imgs/index/login-icon.svg" alt="Sign in icon" class="img-responsive login-icon"></a>
                    <!-- White line top image URL: https://www.freepnglogos.com/images/line-40944.html -->
                    <img src="imgs/global/whitelinetop.png" class="white-line-top" alt="nav top white line separator">
                    <a href="index.php">H O M E</a>
                    <a href="news.php">N E W S</a>
                    <a href="#shows">S H O W S</a>
                    <a href="#music">M U S I C</a>
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
            </div>
            <!-- Video origin URL: https://www.youtube.com/watch?v=PXTmNLRfkGM, video was saved, cut apart and certain scenes joined -->
            <video src="video/foals.mp4" class="foals-vid" autoplay muted loop></video>
        </section>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="outer-arrow">
                        <img src="imgs/index/angle-down-solid.svg" width="65" height="65" id="down-arrow" alt="down arrow to pull page down">  
                    </div>
                </div>  
            </div>
        </div>   
        <section id="shows">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="yellow-head">Shows</h1>
                        <!-- Bands in town widget which imports the specified bands upcoming tour dates -->
                        <script charset="utf-8" src="https://widget.bandsintown.com/main.min.js"></script><a class="bit-widget-initializer" data-artist-name="alfie templeman" data-display-local-dates="false" data-display-past-dates="false" data-auto-style="false" data-text-color="#FFFFFF" data-link-color="#dda11d" data-background-color="rgba(0,0,0,0)" data-display-limit="5" data-display-start-time="false" data-link-text-color="#FFFFFF" data-display-lineup="false" data-display-play-my-city="false" data-separator-color="rgba(124,124,124,0.25)"></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="music">
            <div class="container">
              <div class="row">
                <div class="col-12 text-center">
                        <h1 class="yellow-head">Music</h1>
                        <!-- Spotify embed to play a list of songs at bottom -->
                        <iframe src="https://open.spotify.com/embed/artist/6FQqZYVfTNQ1pCqfkwVFEa" width="100%" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
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
    <!--JS for Down Arrow onclick-->
    <script src="js/down-arrow.js"></script> 
    <!-- Cookie Consent -->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <!-- Custom JQuery plugin to enable nice scrollbar at side of page -->
    <script src="js/jquery.nicescroll.min.js"></script>
</body>
</html>