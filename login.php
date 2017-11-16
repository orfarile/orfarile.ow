<?php
	$link = mysqli_connect ("orfarile.ow", "admin", "admin", "test")
		or die ("Ошибка подключения");
        
        $login = mysqli_query($link, "SELECT login FROM users WHERE login = '".$_POST['login']."'")
         or die ('Не удалось подключиться к базе');
        
        $login = mysqli_num_rows($login);
        
        $password = mysqli_query($link, "SELECT password FROM users WHERE login = '".$_POST['password']."'")
         or die ('Подключение не удалось');

        $password = mysqli_num_rows($password);

        if(isset($login) && isset($password)){
            header( 'Location: closed/office.html', true, 303);     
        }
        else {
            
            echo 'Ошибка введенные данных';
                
        }
	mysqli_close($link);
?>