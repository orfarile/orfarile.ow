<?php
	print_r($_SESSION);
	if($_SESSION['auth'] != 0){

		$_SESSION['time'] = time ();   
		$_SESSION['counter'] += 1;
		
		$link = mysqli_connect("orfarile.ow", "admin", "admin", "test") or die ("DB is down, try later");
	  
		$sql = mysqli_query($link, "INSERT INTO logs (login, time, auth, counter) VALUES ('".$_SESSION['login']."','".$_SESSION['time']."', '".$_SESSION['auth']."', '".$_SESSION['counter']."')");	
        mysqli_close($link);
        echo ('<p>WTF???</p>');
	}
	else {
		$_SESSION['auth'] = 0;
		$_SESSION['login'] = guest;
		$_SESSION['time'] = time ();   
		$_SESSION['counter'] += 1;
		$link = mysqli_connect("orfarile.ow", "admin", "admin", "test") or die ("DB is down, try later");
		
		  $sql = mysqli_query($link, "INSERT INTO logs (login, time, auth, counter) VALUES ('".$_SESSION['login']."','".$_SESSION['time']."', '".$_SESSION['auth']."', '".$_SESSION['counter']."')");	
		  mysqli_close($link);

		echo ("<p>Попробуйте выполнить вход заново</p>");
		header( 'Location: http://orfarile.ow/site/index.php', true, 302);
		exit;
	}
?>