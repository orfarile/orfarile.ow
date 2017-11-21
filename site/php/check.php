<?php
    session_start();

        if($_SESSION['auth'] != 0){

            $_SESSION['time'] = time ();   
            $_SESSION['counter'] += 1;
            
            $link = mysqli_connect("orfarile.ow", "admin", "admin", "test") or die ("DB is down, try later");

            
        }
        else {

            echo ("Попробуйте выполнить вход заново");
            header( 'Location: ../index.php', true, 303); 
            
        }
?>