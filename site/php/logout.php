<?php
    print_r($_SESSION);
    if ($_SESSION['auth'] != 0){
        $_SESSION['auth'] = 0;
        $_SESSION['login'] = 'guest';
        $_SESSION['time'] = time();
        print_r ($_SESSION);
        session_destroy();
        echo ("<p>Недостачно прав для просмотра\n</p>");
		echo ("<p>Попробуйте выполнить вход заново\n</p>");
		echo ("<p>Для перехода на главную страницу нажмите сюда -><a href='http://orfarile.ow/site/'>Главная</a></p>");
		exit;
    }else{
        print_r ($_SESSION);
        echo ("<p>Недостачно прав для просмотра\n</p>");
		echo ("<p>Попробуйте выполнить вход заново\n</p>");
		echo ("<p>Для перехода на главную страницу нажмите сюда -><a href='http://orfarile.ow/site/'>Главная</a></p>");
		exit;
    }
?>