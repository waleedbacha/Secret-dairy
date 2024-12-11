<?php

    $link = mysqli_connect("localhost", "root", "", "secret dairy");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>