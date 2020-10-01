<?php require "db.php"?> 
<!DOCTYPE html>
<html Lang="RU">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Информация</title>
</head> 	

<body>
	<style>
body {
background: #7d866f	fixed url(img/road.jpg	)  0% 0%;;
background-size: cover; /* Цвет фона и путь к файлу */
color: #FA8E47; /* Цвет текста */
}
	<?php require "blocks/header.php";
	
	    
	?>	

	<div class="container-pro">
		<h3 class="my-0 font-weight-normal">Личные данные</h3>
		

<form action="/profile.php" method="POST">

	<p>
		<p><strong >Логин</strong>:</p>
		<input type="text" name="login" style=" width:300px; font-size:14px; font-weight: bold; color: #FF0000"   placeholder="Login" class="form-control" value="<?php echo $_SESSION['logged_user']->login;?>" disabled>	
	</p>

	<p>
		<p><strong>Email</strong>:</p>
		<input type="text" name="email" style=" width:300px; font-size:14px; font-weight: bold; color: #FF0000 " placeholder="Email" class="form-control" value="<?php echo $_SESSION['logged_user']->email?>" >
	</p>
	

</div>
</form>
</div>
<?php require "blocks/footer.php"?>
</body>
