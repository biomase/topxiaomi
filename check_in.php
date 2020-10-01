<?php session_start();?>

<!DOCTYPE html>
<html Lang="RU">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Вход</title>
</head> 



<body>
    <style>
body {
background: #7d866f fixed url(img/road.jpg  )  0% 0%;
background-size: cover; /* Цвет фона и путь к файлу */
color: #FA8E47; /* Цвет текста */
}
  <?php require "blocks/header.php";
    isset($_SESSION);
    $data = $_POST;
    if(isset($data['do_login']))
    {
      $errors = array();
        $user  = R::findOne('users','login = ?', array($data['login']));
        
          if(( $user ) && ($user->login == 'admin'))
          {  
              if( password_verify($data['password'], $user->password))
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
            if( password_verify($data['password'], $user->password))
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
            }
    }
  ?>

  <div class="container-signup d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

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
  <button type="submit" name ="do_login" class="btn btn-success">Войти</button> 
</p>
</form>
</div>
<?php require "blocks/footer.php"?>
</body>