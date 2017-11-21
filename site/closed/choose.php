<?php
	session_start();
	include('../php/check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/choose.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<header class="header">
		
	</header>
	<div class="wrapper">
		<section class="content">
			<form class='select-form' action="">
				<h2 class='form__heading'>Выбор теста</h2>
				<select class='form__select' name="">
					<option value="">что-то</option>
					<option value="">что-то еще</option>
					<option value="">что-то помимо предыдущих двух вариантов</option>
					<option value="">следующее что-то</option>
					<option value="">и что-то напоследок</option>
				</select>
				<input class='form__submit' type="submit">
			</form>
		</section>
		<footer class="footer">
			<a href="#" class="footer__item">О нас</a>
			<a href="#" class="footer__item">Контакты</a>
			<a href="#" class="footer__item">Нашли баг?</a>
			<a href="#" class="footer__item">Отзывы</a>
			<form action='../php/logout.php'>
            <button type='submit'>LOGOUT</button>
       		</form>
		</footer>
	</div>
</body>
</html>