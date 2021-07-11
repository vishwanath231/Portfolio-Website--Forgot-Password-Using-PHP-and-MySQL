<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/css/Form.css?<?php echo time(); ?>">


</head>

<body>

    <section class="container">
        <a href="../Index.php" class="homeBtn"><i class="fas fa-home"></i> </a>
        <div class="flex">
            <div class="box-1">
                <div class="Bx">
                    <div class="circle-shape" style="right: 250px;"></div>
                    <img src="../assets/img/pose-7.png" alt="">
                </div>
            </div>
            <div class="box-2">
                <section class="formBox">
                    <h1 class="form_title">New Password</h1>

                    <div class="success">
                        <div>Please create a new password that you <br> don't use on any other site</div>
                    </div>

                    <!-- ERROR MSG -->
                    <?php
                    if (isset($_SESSION['errorMsg'])) {
                    ?>

                        <div class="error" id="closeMsg">
                            <div><?php echo $_SESSION['errorMsg']; ?></div>
                            <i class="fas fa-times-circle"></i>
                        </div>

                    <?php
                        unset($_SESSION['errorMsg']);
                    }
                    ?>

                    <?php
                    if (isset($_SESSION['successMsg'])) {
                    ?>

                        <div class="success" id="closeMsg">
                            <div><?php echo $_SESSION['successMsg']; ?></div>
                            <i class="fas fa-times-circle"></i>
                        </div>

                    <?php
                        unset($_SESSION['successMsg']);
                    }
                    ?>
                    <!-- END OF ERROR MSG -->


                    <form action="../controller/controller.php" method="POST" class="form">

                        <div class="form_div" style="display: none;">
                            <input type="email" class="form_input" value="<?php echo $_SESSION['email']; ?>" name="email" placeholder=" " required>
                            <label for="" class="form_label">Email</label>
                        </div>
                        <div class="form_div">
                            <input type="password" class="form_input" name="password" id="pass" placeholder=" " required>
                            <label for="" class="form_label">Password</label>
                            <i class="far fa-eye pass" onclick="show()"></i>
                        </div>
                        <div class="form_div">
                            <i class="far fa-eye cpass" onclick="show2();"></i>
                            <input type="password" class="form_input" name="cpassword" id="cpass" placeholder=" " required>
                            <label for="" class="form_label">Confirm Password</label>
                        </div>
                        <button type="submit" name="change" class="submitBtn">Change</button>
                    </form>
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