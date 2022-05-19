<?php 

    session_start();
    echo "Welcom " . $_SESSION['email'];
    echo "<a href='logout.php'>Log Out</a>";
    

?>