<?php
	$link = mysqli_connect ("test", "root", "", "test")
		or die ("Ошибка");
        
        $result = mysqli_query($link, "SELECT login FROM users WHERE login = '".$_POST['login']."'")
            or die ('Не удалось подключиться к базе');
        
        $result = mysqli_num_rows($result);
        
        if($result == null){
            
		$sql = mysqli_query($link, "INSERT INTO users (login, password)
                                    VALUES ('".htmlspecialchars($_POST['login'])."', '".htmlspecialchars($_POST['password'])."')");	
            
		mysqli_close($link);
            
        header( 'Location: test/private-office.htm', true, 303);
            
        }
        else {
            
            echo 'login занят';
                
        }

?>