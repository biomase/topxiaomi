<?php require_once"db.php"; ?>


<!DOCTYPE html>
<html Lang="RU">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <title>Админ</title>
</head> 

<body>

		<style>
body {
background: #7d866f	fixed url(img/road.jpg)  0% 0%;;
background-size: cover; /* Цвет фона и путь к файлу */
color: #FA8E47; /* Цвет текста */
}
</style>
<center>
<h1>Редактирование главной страницы</h1><br>
</center>
</div>

<?php
$data = $_POST;
if(isset($data['do_new'])) {
	$errors = array();
	if(trim($data['new_title']) == '') {

		$errors[] = "Введите заголовок!";
	}

	if(trim($data['new_info']) == '') {

		$errors[] = "Введите текст карточки!";
    }
    
    if (mb_strlen($data['new_title']) < 1 || mb_strlen($data['new_title']) > 100){
	
	    $errors[] = "Недопустимая длина заголовка (от 1 до 100 символов)";
    }

    

    if(empty($errors)) {
        $new = R::dispense('card');
		$new->title = $data['new_title'];
        $new->image = $data['new_img'];
        $new->info = $data['new_info'];
		R::store($new);
		
        echo '<center><div style="color: #B0C6D7; ">Статья успешно добавлена! Она появится на главной странице</div><hr></center>';

        

	} else {
		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}
if (isset($data['do_out'])){
	echo '<meta http-equiv=Refresh content="1; card.php">';
}
?>
</div>

<form action="admin.php" method="post">
    <div class='container'>
    <h3>Добавить новую статью</h3>
    <input class="form-control mt-3 mb-2" type="text" name="new_title" placeholder="Заголовок статьи">
    <input class="form-control" type="text" name="new_img" placeholder="img.формат">
    <textarea class="form-control mt-2" id="exampleFormControlTextarea1" name="new_info" rows="3" placeholder="Текст статьи"></textarea>
   <p><center><button class="btn btn-outline-primary ml-3"style="color: #0C0C0D;font-size:14px; font-weight: bold;" name="do_new" type="submit">Добавить</button></center><br></p>
   <p><center><button class="btn btn-outline-primary ml-3" name="do_out" href="/logout.php" style="color: #0C0C0D;font-size:15px; font-weight: bold;">Выйти</button><center><br></p>
    </div>
</form>


</body>