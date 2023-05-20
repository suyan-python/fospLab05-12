<?php 
    print "Welcome to the World of Cookies";

    setcookie("category", "books",time()+ 86400,"/");

    echo "<br>The cookie is set";

?>