<?php
	session_start();
	include('../php/check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/test.css">
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="../js/test.js"></script>
</head>
<body>
	<header class="header">
		
	</header>
	<div class="navbar">
		
	</div>
	<div class="wrapper">
		<form class="test">
		</form>
	</div>
	<footer class="footer">
		<a href="#" class="footer__item">Контакты</a>
		<a href="#" class="footer__item">О нас</a>
		<a href="#" class="footer__item">Нашли баг?</a>
		<a href="#" class="footer__item">Отзывы</a>
		<form action='../php/logout.php'>
            <button type='submit'>LOGOUT</button>
        </form>
	</footer>
</body>
</html>