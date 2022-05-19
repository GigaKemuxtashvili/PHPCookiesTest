<?php

    session_start();
    session_destroy();
    if( isset($_COOKIE['email']) and isset($_COOKIE['pass']) ) {
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        setcookie('email', $email, time() - 1);
        setcookie('pass', $email, time() - 1);
    }
    echo "You successfully logout. click here to
    <a href='index.php'> Try Again </a> "

?>