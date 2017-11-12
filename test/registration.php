<?php
	$link = mysqli_connect ("test", "root", "", "test")
		or die("Ошибка");
        
    $result = mysqli_query($link, "SELECT login FROM users WHERE login = '".$_POST['login']."'")
        or die ('Не удалось подключиться к базе');
        
    if($result == null){
        
    $sql = mysqli_query($link, "INSERT INTO users (login, password)
                                VALUES ('".htmlspecialchars($_POST['login'])."', '".htmlspecialchars($_POST['password'])."')");	
            
    mysqli_close($link);
            
    }

    else {
            
        echo 'login занят';
                
    }

?>