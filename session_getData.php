<?php 

    session_start();
    print "Welcome " .$_SESSION['username'];

    print "<br>Your Favorite Category is " .$_SESSION['favCat'];

    print "<br>";

?>