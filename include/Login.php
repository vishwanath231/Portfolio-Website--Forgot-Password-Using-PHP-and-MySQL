<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/css/Form.css?<?php echo time();?>">


</head>

<body>

    <section class="container">
        <a href="../Index.php" class="homeBtn"><i class="fas fa-home"></i> </a>
        <div class="flex">
            <div class="box-1">
                <div class="Bx">
                    <div class="circle-shape"></div>
                    <img src="../assets/img/pose-6.png" alt="">
                </div>
            </div>
            <div class="box-2">
                <section class="formBox">
                    <h1 class="form_title">Login</h1>

                    <div class="social-media_icon">
                        <div class="facebook">
                            <a href="#"><img src="../assets/img/facebook.png" alt="">Facebook</a>
                        </div>
                        <div class="google">
                            <a href="#"><img src="../assets/img/google.png" alt="">Google</a>
                        </div>
                    </div>

                    <!-- ERROR MSG -->

                    <?php
                    if (isset($_SESSION['loginErrorMsg'])) {
                    ?>

                        <div class="error" id="closeMsg">
                            <div><?php echo $_SESSION['loginErrorMsg']; ?></div>
                            <i class="fas fa-times-circle"></i>
                        </div>

                    <?php
                        unset($_SESSION['loginErrorMsg']);
                    }
                    ?>


                    <?php
                    if (isset($_SESSION['loginSuccessMsg'])) {
                    ?>

                        <div class="success" id="closeMsg">
                            <div><?php echo $_SESSION['loginSuccessMsg']; ?></div>
                            <i class="fas fa-times-circle"></i>
                        </div>

                    <?php
                        unset($_SESSION['loginSuccessMsg']);
                    }
                    ?>

                    <!-- END OF ERROR MSG -->
                    <form action="../controller/controller.php" method="POST" class="form">

                        <div class="form_div">
                            <input type="email" class="form_input" name="email" placeholder=" " required>
                            <label for="" class="form_label">Email</label>
                        </div>
                        <div class="form_div" style="margin-bottom: .8rem;">
                            <input type="password" class="form_input" name="password" id="pass" placeholder=" " required>
                            <label for="" class="form_label">Password</label>
                            <i class="far fa-eye pass" onclick="show()"></i>
                        </div>

                        <a href="../include/Email.php" class="forgotPass">Forgot Password?</a><br><br>
                        <button type="submit" name="login" class="submitBtn">LogIn</button>
                    </form>

                    <p>Not yet a member? <a href="../include/Register.php">SignUp Here</a></p>

                </section>

            </div>
        </div>
    </section>


    <script src="../assets/js/script.js?<?php echo time(); ?>"></script>
    <script>
        // when you click msg was hidden

        document.addEventListener("click", function() {
            document.getElementById("closeMsg").style.display = "none";
        })

        // automatic hidden the msg
        function showTime() {
            setTimeout(() => {
                document.getElementById("closeMsg").style.display = "none";
            }, 15000);
        }
        showTime();
    </script>



</body>

</html>