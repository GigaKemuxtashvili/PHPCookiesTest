<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table>
        <h3>Login Form using session and cookies</h3>
        <form method="post" action="validate.php">
            <tr><th>Email</th><td><input type="text" id="email" name="email"></td></tr>
            <tr><th>Password</th><td><input type="password" id="pass" name="password"></td></tr>
            <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
            <tr><td colspan="2" align="right"><input type="submit" value="Login" name="login"></td></tr>    
        </form>   
    </table>
</body>
</html>

<?php 

    if( isset($_COOKIE['email']) and isset($_COOKIE['pass']) ) {
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        echo "<script>
            document.getElementById('email').value = '$email';
            document.getElementById('pass').value = '$pass';
        </script>";
    }

?>