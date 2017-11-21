<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>test</title>
	<script src='js/forIndex.js'></script>
</head>
<body>
	<div class="background">
		<div class="form">
			<button class="form__close-btn" onClick='closeForm()'>
				X
			</button>
			<form action='php/reg.php' method='POST' id="registration-form" class="form">
				<h2 class='form__heading'>Регистрация</h2>
				<p>Придумайте логин:</p>
				<input type="text" maxlength="20" name='login' required>
				<p>Придумайте пароль:</p>
				<input class='password' type="password" maxlength="20" name='password' required>
				<p>Повторите пароль:</p>
				<input class='password' type="password" maxlength="20" name='repeat-password' required>
				<p class='error'> </p>
				<button type='submit' onclick='validate()' class='form__accept-btn'>Подтвердить</button>
			</form>
            <form action='php/login.php' method='POST' id="login-form" class="form">
				<h2 class='form__heading'>Вход</h2>
				<p>Введите логин:</p>
				<input type="text" maxlength="20" name='login' required>
				<p>Введите пароль:</p>
				<input class='password' type="password" maxlength="20" name='password' required>
				<p class='error'> </p>
				<button type='submit' onclick='validate()' class='form__accept-btn'>Подтвердить</button>
			</form>
		</div>
	</div>
	<header class="header">
			<div class="header__logo">orfarile</div>
			<div class="header__buttons">
				<a href='#' class="header__btn" onClick='showLoginForm()'>Вход</a>
				<a href='#' class="header__btn" onClick='showRegForm()'>Регистрация</a>
			</div>
	</header>
	<section class="content">
		<div class="content__slider">
			
		</div>
		<div class="slider__circles">
			<div class="slider__circle"></div>
			<div class="slider__circle"></div>
			<div class="slider__circle"></div>
		</div>
		<a href="/opened/demo/test.html" class="content__demo-test-btn">Демо-тест</a>
	</section>
	<footer class="footer">
		<a href="#" class="footer__item">Контакты</a>
		<a href="#" class="footer__item">О нас</a>
		<a href="#" class="footer__item">Нашли баг?</a>
		<a href="#" class="footer__item">Отзывы</a>
	</footer>
</body>
</html>