<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/font/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/Index.css?<?php echo time(); ?>">

</head>

<body>



    <!--------------
        LOADER
    --------------->
    <!-- <section class="preloader">
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section> -->
    <!--------------------
        END OF LOADER
    ---------------------->


    <!-------------
        NAVBAR
        --------------->
    <div class="scroll-up-btn">
        <i class="fas fa-caret-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="Index.php"><img src="assets/img/logo-light.png" alt=""></a>
            </div>
            <ul class="menu-2">
                <li><a href="include/Login.php" class="menu-btn">Login</i></a></li>
                <li><a href="include/Register.php" class="menu-btn bg-color">Sign up</i></a></li>
            </ul>
        </div>
    </nav>
    <!--------------------
            END OF NAVBAR
        ---------------------->


    <!--------------
            HOME
        --------------->
    <section class="home">
        <div class="max-width">
            <div class="grid">
                <div class="home-box-1">
                    <h2>Web Development</h2>
                    <p>Our custom web development services include both front-end and back-end development. Whether it is enhancing an existing application or architectind an enterprise application.</p>
                    <a href="include/Contact.php">Contact</a>
                </div>
                <div class="about-icon">
                    <div class="circle-shape"></div>
                    <img src="assets/img/pose-1.png" class="img-fluid" width="" height="" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--------------
            END OF HOME
        --------------->


    <!--------------
            ABOUT
        --------------->
    <section class="about" id="about">
        <div class="effect-2"></div>
        <div class="max-width">
            <div class="about-grid">
                <div class="about-icon-1">
                    <div class="circle-shape-1"></div>
                    <img src="assets/img/pose-2.png" class="img-fluid" width="" height="" alt="">
                </div>
                <div class="about-box-2">
                    <h1>Hi I'm <span>Vishwanath</span></h1>
                    <h3>Full-Stack Developer</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa mollitia pariatur error modi eaque, maxime, soluta dignissimos molestias sequi adipisci, nulla saepe eligendi non autem tenetur recusandae illum sed vel.</p>
                    <div class="s-media">
                        <i class="fab fa-facebook-f" style="padding-left: 0px;"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-github"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-dribbble"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------
            END OF ABOUT
        -------------------->


    <!--------------
            SERVICES
        --------------->
    <section class="service">
        <div class="effect-3">
            <div class="circle-shape-2"></div>
            <img src="assets/img/pose-5.png" alt="">
        </div>
        <div class="max-width">
            <div class="ser-grid">
                <div class="ser-box-1 ser-box-1_top">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Responsive Design</h3>
                    <p>Lorem ipsum, sit amet consectetur adipisicing elit. Nam, incidunt quia. Eveniet consequuntur deleniti nihil.</p>
                </div>
                <div class="ser-box-1 ser-active">
                    <i class="fas fa-code"></i>
                    <h3>Clean Code</h3>
                    <p>Lorem ipsum, sit amet consectetur adipisicing elit. Nam, incidunt quia. Eveniet consequuntur deleniti nihil.</p>
                </div>
                <div class="ser-box-1">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Great Support</h3>
                    <p>Lorem ipsum, sit amet consectetur adipisicing elit. Nam, incidunt quia. Eveniet consequuntur deleniti nihil.</p>
                </div>
            </div>
        </div>
    </section>
    <!---------------------
            END OF SERVICES
        ---------------------->

    <!--------------
            CARD
        --------------->
    <section class="card">
        <div class="effect-4"></div>
        <div class="max-width">
            <div class="card-grid">
                <div class="card-box-1">
                    <h2>Boost your</h2>
                    <h2>productivity.</h2>
                    <p>Stop chasing your mouse and save up to 8 days a year. Surely, you'll find something bettert to do with your time.</p>
                </div>
                <div class="card-box-2">
                    <video src="assets/img/coffee.mp4" autoplay muted loop></video>
                </div>
                <div class="slider">
                    <div class="slider-track">
                        <div class="slide">
                            <img src="assets/img/icon/adobe-ai.png" alt="" class="img_effect-1">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/adobe-ps.png" alt="" class="img_effect-2">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/adobe-xd.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/chrome.png" alt="">
                        </div>
                    </div>
                    <div class="slider-track">
                        <div class="slide">
                            <img src="assets/img/icon/css.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/github.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/html-5.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/javascript.png" alt="">
                        </div>
                    </div>
                    <div class="slider-track">
                        <div class="slide">
                            <img src="assets/img/icon/mysql.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/php.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/visual-studio.png" alt="">
                        </div>
                        <div class="slide">
                            <img src="assets/img/icon/youtube.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card-box-3">
                    <h2>Coding Journey.</h2>
                    <p>Cover all the basic concept of Full-Stack Development. I really enjoy coding life. I will sure in 2022 i complete all concept and become a Pro developer.</p>
                </div>
            </div>
        </div>
    </section>
    <!------------------
            END OF CARD
        ------------------->


    <!---------------------
            BASIC CONTACT
        ---------------------->
    <section class="basic-contact">
        <div class="max-width">
            <div class="basic-grid">
                <div class="about-icon-3">
                    <div class="circle-shape-3"></div>
                    <img src="assets/img/pose-6.png" class="img-fluid">
                </div>
                <div class="b_box-1">
                    <p>If You Have Any Project in Your Mind ?</p>
                    <a href="include/Contact.php">Contact Me</a>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------
            END OF BASIC CONTACT
        ---------------------------->


    <!------------------
            SUBSCRIBE
        -------------------->
    <section class="sub">
        <div class="effect-7"></div>
        <div class="max-width">
            <div class="sub-content">
                <h2>Subscribe To Get Update</h2>
                <div>
                    <form action="controller/controller.php" method="POST">
                        <input type="email" name="email" placeholder="Email" required>
                        <button type="submit" name="subscribe">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <img src="assets/img/logo-light.png" alt=""><br>
            <a href="#">vishwanath.official@gmail.com</a>
            <p>Create by <a href="index.php" class="f-color">vishwanth</a> | &copy; 2021 All rights reserved</p>
        </footer>
    </section>
    <!------------------------
        END OF SUBSCRIBE
    -------------------------->





    <script src="assets/js/plugin/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
        window.history.forward();
    </script>

    <?php
    if (isset($_SESSION['message'])) { ?>

        <script>
            alert("Thanks for subscribe");
        </script>

    <?php
        unset($_SESSION['message']);
    }
    if (isset($_SESSION['contactMsg'])) { ?>

        <script>
            alert("Message Sended");
        </script>

    <?php
        unset($_SESSION['contactMsg']);
    }
    ?>



</body>

</html>