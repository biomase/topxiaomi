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
	<p><strong>Введитепарольещёраз</strong>:</p>
	<input type="password" name="password_2" placeholder="Password" class="form-control">	
</p>
<p>
	<button type="submit" name ="do_signup" class="btnbtn-success">Зарегистрировать</button>	
</p>
</form>

$data = $_POST;
if (isset($data['do_signup']))
{
$errors = array();
if(trim($data['login']) == '')
{
$errors[] = 'Введителогин!';
}
if(trim($data['email']) == '')
{
$errors[] = 'Введите email!';
}
if($data['password'] == '')
{
$errors[] = 'Введитепароль!';
}
if($data['password_2'] != $data['password'])
{
$errors[] = 'Паролинесовпадают!';
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

echo '<meta http-equiv=Refresh content="1; card.php">';

<?php
	$connect = mysqli_connect("test.ru","root","","test");
	$sql = mysqli_query($connect,"SELECT * FROM `users`");
	$row = mysqli_fetch_assoc($sql);
?>