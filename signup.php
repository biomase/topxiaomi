<?php session_start();?>

<!DOCTYPE html>
<html Lang="RU">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Регистрация</title>
</head> 


<body>	
			<style>
body {
background: #7d866f	fixed url(img/road.jpg	)  0% 0%;;
background-size: cover; /* Цвет фона и путь к файлу */
color: #FA8E47; /* Цвет текста */
}
	<?php require "blocks/header.php";
	

		  $data = $_POST;
		  if (isset($data['do_signup']))
		  {
		  	$errors = array();
		  	if(trim($data['login']) == '')
		  	{
		  		$errors[] = 'Введите логин!';
		  	}
		  	if(trim($data['email']) == '')
		  	{
		  		$errors[] = 'Введите email!';
		  	}
		  	if($data['password'] == '')
		  	{
		  		$errors[] = 'Введите пароль!';
		  	}
		  	if($data['password_2'] != $data['password'])
		  	{
		  		$errors[] = 'Пароли не совпадают!';
		  	}
		  	if(R::count('users', "login = ?", array($data['login'])) > 0 )
		  	{
		  		$errors[] = 'Пользователь с таким именем уже существует!';
		  	}
		  	if(R::count('users', "email = ?", array($data['email'])) > 0 )
		  	{
		  		$errors[] = 'Пользователь с таким email уже существует!';
		  	}
		  	if(empty($errors))
		  	{
		  		$user = R::dispense('users');
		  		$user->login = $data['login'];
		  		$user->email = $data['email'];
		  		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		  		R::store($user);
		  		 echo '<meta http-equiv=Refresh content="1; card.php">';
		  	}else
		  	{
		  		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		  	}
		  } 
	?>
<div class="container-signup d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

<form action="/signup.php" method="POST">

<p>
	<p><strong>Логин</strong>:</p>
	<input type="text" name="login" placeholder="Login" class="form-control" value="<?php echo @$data['login'];?>">	
</p>

<p>
	<p><strong>Email</strong>:</p>
	<input type="email" name="email" placeholder="Email" class="form-control" value="<?php echo @$data['email'];?>">	
</p>

<p>
	<p><strong>Пароль</strong>:</p>
	<input type="password" name="password" placeholder="Password" class="form-control">	
</p>
	
<p>
	<p><strong>Введите пароль ещё раз</strong>:</p>
	<input type="password" name="password_2" placeholder="Password" class="form-control">	
</p>

<p>
	<button type="submit" name ="do_signup" class="btn btn-success">Зарегистрировать</button>	
</p>
</form>
</div>
<?php require "blocks/footer.php"?>
</body>