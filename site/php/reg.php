<?php
	$link = mysqli_connect ("orfarile.ow", "admin", "admin", "test")
		or die ("Ошибка");
        
        $result = mysqli_query($link, "SELECT login FROM users WHERE login = '".$_POST['login']."'")
            or die ('Не удалось подключиться к базе');
        
        $result = mysqli_num_rows($result);
        
        if(isset($result)){            
            $sql = mysqli_query($link, "INSERT INTO users (login, password)
                                        VALUES ('".htmlspecialchars($_POST['login'])."', '".htmlspecialchars($_POST['password'])."')");	
            mysqli_close($link);
                
            header( 'Location: ../demo/test.html', true, 303);            
        }
        else {
            header( 'Location: index.php', true, 303);    
            echo '<p>login занят</p>';  
        }
    include 'login.php';
?>