<form action="/check_in.php" method="POST">
<p>
<img class="mb-2" src="img/1.jpg" alt="" width="255  " height="160">
</p>
<p>
<p><strong>Логин</strong>:</p>
<input type="text" name="login" placeholder="Login" class="form-control" value="<?php echo @$data['login'];?>">
</p>
<p>
<p><strong>Пароль</strong>:</p>
<input type="password" name="password" placeholder="Password" class="form-control">
</p>
<p>
<button type="submit" name ="do_login" class="btnbtn-success">Войти</button>
</p>
</form>

isset($_SESSION);
$data = $_POST;
if(isset($data['do_login']))
{
$errors = array();
$user  = R::findOne('users','login = ?', array($data['login']));
if(( $user ) && ($user->login == 'admin'))
{
if(password_verify($data['password'], $user->password))
{
$_SESSION['logged_user'] = $user;
echo '<meta http-equiv=Refresh content="1; admin.php">';
}
else
{
$errors[] = 'Неверный пароль!';
}
}
elseif ( $user )
{
{
if(password_verify($data['password'], $user->password))
{
$_SESSION['logged_user'] = $user;
echo '<meta http-equiv=Refresh content="1; card.php">';
}
else
{
$errors[] = 'Неверный пароль!';
}
}
}
else
{
$errors[] = 'Пользователь с таким логином не найден!';
}
if(!empty($errors))
{
echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
}}

echo '<meta http-equiv=Refresh content="1; card.php">';