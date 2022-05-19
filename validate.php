<?php 

    $myemail = "gigakemukhtashvili@gmail.com";
    $mypass = "12345";

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        if( $email == $myemail and $pass == $mypass ) {
            if( isset($_POST['remember']) ) {
                setcookie('email', $email, time() + 60 * 60 * 7);
                setcookie('pass', $email, time() + 60 * 60 * 7);
            }
            session_start();
            $_SESSION['email'] = $email;
            header("location: welcome.php");
        } else {
            echo "Email or Password is Invalid.
            <br> Click here to <a href='index.php'>
            Try Again </a>";
        }
    } else {
        header("location: index.php");
    } 

?>