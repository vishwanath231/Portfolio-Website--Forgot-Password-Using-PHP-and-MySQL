// register

<?php

session_start();
include "../Database/config.php";

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $code = 0;
    $status = "Verified";

    $sql = "SELECT * FROM  register WHERE Email = '$email'";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        $_SESSION['signupMsg'] = "<strong>Email</strong> alreay taken";
        header("location:../include/Register.php");

    } elseif (strlen($pass) < 6 || strlen($pass) > 15) {
        $_SESSION['signupMsg'] = "<strong>Password</strong> at least 6 characters long";
        header("location:../include/Register.php");

    } elseif (!preg_match("/\d/", $pass)) {
        $_SESSION['signupMsg'] = " <strong>Password</strong> at least 1 digit";
        header("location:../include/Register.php");

    } elseif (!preg_match("/\W/", $pass)) {
        $_SESSION['signupMsg'] = "<strong>Password</strong> at least 1 special character";
        header("location:../include/Register.php");

    } elseif ($pass != $cpass) {
        $_SESSION['signupMsg'] = "<strong>Password</strong> doesn't match";
        header("location:../include/Register.php");

    } else {

        $query = "INSERT INTO register(Username, Email, password, Code, Status) VALUES ('$username','$email','$pass','$code','$status')";
        $result = mysqli_query($con, $query);

        //success msg
        $_SESSION['loginSuccessMsg'] = "Registered Successful!. Please Login";
        header("location:../include/Login.php");
    }

}


// login

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];


    $query = "SELECT * FROM  register WHERE Email = '$email' and password = '$pass'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        //success msg
        header("location:../Index.php");
    } else {
        //success msg
        $_SESSION['loginErrorMsg'] = "Invalid <strong>Email</strong> or <strong>Password</strong>";
        header("location:../include/Login.php");
    }
}



// check Email and code generator

if (isset($_POST['checkEmail'])) {

    $email = $_POST['email'];


    $query = "SELECT * FROM  register WHERE Email = '$email'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {

        $code = rand(11111,99999);
        $status = "Unproven";

        $sql = "UPDATE register SET Code = '$code',Status ='$status' WHERE Email = '$email'";
        $query = mysqli_query($con,$sql);

        if ($query) {

            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From:vishwanathvishwabai@gmail.com";

            if (mail($email,$subject,$message,$sender)) {
                $_SESSION['email'] = $email;
                header("location:../include/CodeVerification.php");

            }else {
                $_SESSION['errorMsg'] = "Failed while sending code!";
                header("location:../include/Email.php");
            }

        }else {
            //success msg
            $_SESSION['errorMsg'] = "Something went wrong!";
            header("location:../include/Email.php");
        }
    } else {
        //success msg
        $_SESSION['errorMsg'] = "This <strong>email</strong> address does not exist!";
        header("location:../include/Email.php");
    }
}


// code verification


if (isset($_POST['codeVerfiy'])) {

    $code = $_POST['code'];

    $query = "SELECT * FROM  register WHERE Code = '$code'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        //success msg
        header("location:../include/NewPassword.php");
    } else {
        //success msg
        $_SESSION['errorMsg'] = "Invalid <strong>Code</strong>";
        header("location:../include/CodeVerification.php");
    }
}

// new password

if (isset($_POST['change'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $code = 0;
    $status = "Verified";


    if (strlen($pass) < 6 || strlen($pass) > 15) {
        $_SESSION['errorMsg'] = "<strong>Password</strong> at least 6 characters long";
        header("location:../include/NewPassword.php");

    } elseif (!preg_match("/\d/", $pass)) {
        $_SESSION['errorMsg'] = " <strong>Password</strong> at least 1 digit";
        header("location:../include/NewPassword.php");

    } elseif (!preg_match("/\W/", $pass)) {
        $_SESSION['errorMsg'] = "<strong>Password</strong> at least 1 special character";
        header("location:../include/NewPassword.php");

    } elseif ($pass != $cpass) {
        $_SESSION['errorMsg'] = "<strong>Password</strong> doesn't match";
        header("location:../include/NewPassword.php");
    } else {

        $sql = "UPDATE register SET password ='$pass', Code ='$code', Status ='$status' WHERE Email = '$email'";

        $result = mysqli_query($con, $sql);

        //success msg
        $_SESSION['loginSuccessMsg'] = "<strong>Password</strong> changed";
        header("location:../include/Login.php");
    }
}



// message

if (isset($_POST['message'])) {


    $email = $_POST['email'];
    $message = $_POST['msgBx'];

    $sql = "SELECT * FROM  register WHERE Email = '$email'";
    $query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($query);


    if ($count > 0) {
        $query = "INSERT INTO message(Email,Msg) VALUES('$email','$message')";
        $result = mysqli_query($con, $query);

        //success msg
        $_SESSION['contactMsg'] = "Message sended";
        header("location:../index.php");
    } else {
        //select msg
        $_SESSION['errorMsg'] = "Please <strong><a href='../include/Register.php'>Register Here</a></strong>";
        header("location:../include/Contact.php");
    }
}



//subscribe

if (isset($_POST['subscribe'])) {

    $email = $_POST['email'];

    $query = "INSERT INTO subscribe (Email) VALUES('$email')";
    $result = mysqli_query($con, $query);

    //success msg
    $_SESSION['message'] = "Thanks for subscribe";
    header("location:../Index.php");
}


?>