<?php
    session_start();
    
	$link = mysqli_connect ("orfarile.ow", "admin", "admin", "test")
		or die ("Ошибка подключения");
        
        $login = mysqli_query($link, "SELECT login FROM users WHERE login = '".$_POST['login']."'")
         or die ('Не удалось подключиться к базе');
        
        $login = mysqli_num_rows($login);
        
        $password = mysqli_query($link, "SELECT password FROM users WHERE login = '".$_POST['password']."'")
         or die ('Подключение не удалось');

        $password = mysqli_num_rows($password);

        if(isset($login) && isset($password)){
            $_SESSION['auth'] = 1;
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['time'] = time();
            $_SESSION['counter'] = 1;
            header( 'Location: /site/closed/choose.php', true, 303);     
        }
        else {
            echo 'Ошибка введенные данных';        
        }
	mysqli_close($link);
?>