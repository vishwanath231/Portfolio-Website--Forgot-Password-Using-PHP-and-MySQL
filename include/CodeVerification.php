<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/css/Form.css">


</head>

<body>

    <section class="container">
        <a href="../Index.php" class="homeBtn"><i class="fas fa-home"></i> </a>
        <div class="flex">
            <div class="box-1">
                <div class="Bx">
                    <div class="circle-shape"></div>
                    <img src="../assets/img/pose-3.png" alt="">
                </div>
            </div>
            <div class="box-2">
                <section class="formBox">
                    <h1 class="form_title" style="margin-bottom: 2rem;">Code Verification</h1>


                    <div class="success">
                        <div>We've sent a password reset opt to your <br> email - <strong><?php echo $_SESSION['email']; ?></strong> </div>
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
                    <!-- END OF ERROR MSG -->


                    <form action="../controller/controller.php" method="POST" class="form">

                        <div class="form_div">
                            <input type="text" class="form_input" name="code" placeholder=" " required>
                            <label for="" class="form_label">Code</label>
                        </div>

                        <button type="submit" name="codeVerfiy" class="submitBtn">Submit</button>
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