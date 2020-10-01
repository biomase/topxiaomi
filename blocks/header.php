<?php require_once"db.php"; ?>

<!DOCTYPE html>
<html>
<style>
{

}
</style>
<div class="container-head d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" style="background: #777777"	>
<h1 class="my-0 mr-md-auto font-weight-normal" style="color: #FFA53E" >Такси Кострово</h1>
<nav class="my-2 my-md-0 mr-md-3" >
<a class="p-2 text-#FF0000" href="/card.php" style="color: #B0C6D7">Информация о компании</a>
<a class="fa fa-contact p-2 text-#FF0000" href="/about.php" style="color: #B0C6D7">Контакты</a>
</nav>
<?php if(isset($_SESSION['logged_user'])):?>
<a class="text" style="color: #FF0000">Вы вошли, как: </a>
 <?php echo $_SESSION['logged_user']->login;?>

<hr>
<a class="btn btn-outline-primary " href="/order.php" style="color: #B0C6D7">Заказ</a>
<a class="btn btn-outline-primary ml-3" href="/profile.php" style="color: #B0C6D7">Профиль</a>
<a class="btn btn-outline-primary ml-3" href="/logout.php" style="color: #B0C6D7">Выйти</a><br>



<?php else : ?>
<a class="btn btn-outline-primary" href="/check_in.php" style="color: #B0C6D7">Войти</a><br>
<a class="btn btn-outline-primary ml-3" href="/signup.php " style="color: #B0C6D7">Регистрация</a>

<?php endif ; ?>
</div>
</html>	