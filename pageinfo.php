<!DOCTYPE html>
<htmlLang="RU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<title>Контакты</title>
</head>


<body>
	<style>
body {
background: #7d866f fixed url(img/road.jpg)  0% 0%;
background-size: cover; /* Цвет фона и путь к файлу */
color: #FA8E47; /* Цветтекста */
}
	<?php require "blocks/header.php"?>
	<div class="container mt-5">
		<h3 >Контакты</h3>
		<label  class="container mt-3" style=" font-size:16px; font-weight: bold" >
			Телефон (круглосуточно):<br> 8-(916)-400-15-00<hr>
			Email:<br> dmitry1303@bk.ru<br>fanic12@bk.ru<hr>
			Адрес: Центральная улица, 30
деревня Кострово, городской округ Истра, Московская область, Россия<br>(55.892882, 36.700517)<br>	
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A30ac442ceff22abe5bec5e0abbd51ea60b015c78752b8d0d5cea1a650c26fec8&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
		</label>
		<p>		
		</p>
		<input type="email" name="email" placeholder="Введите email" class="form-control"><br>
		<textarea name="message" class="form-control" placeholder="Введитесообщение"></textarea><br>
		<button type="submit" name="send" class="btnbtn-success">Отправить</button>
	</form>
	</div>
	<?php require "blocks/footer.php"?>
</body>
</html>
