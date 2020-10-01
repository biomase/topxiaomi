<?php require_once "db.php"?> 
<!DOCTYPE html>
<html Lang="RU">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Заказ</title>
</head> 


<body>
	  <style>
body {
background: #7d866f fixed url(img/road.jpg)  0% 0%;
background-size: cover; /* Цвет фона и путь к файлу */
color: #FA8E47; /* Цвет текста */
}
<?php require_once "blocks/header.php";
		$data = $_POST;
		  if (isset($data['send']))
		  {
		  		$order = R::dispense('booking');
		  		$order->login = $data['ФИО'];
		  		$order->adfrom = $data['from'];
		  		$order->adto = $data['to'];
		  		$order->comment = $data['message'];
		  		R::store($order);
		  		echo '<div style="color: red;">Заказ сформирован!</div><hr>';
		  	}else{
		  		echo '<div style="color: red;">no</div><hr>';
			  	}
		   
	
?>
	<form action="/order.php" method="POST">
	<div class="container mt-5">
		<h3 >Детали заказа</h3>
	
		<label  class="container mt-3" >
		
		<p><strong >Логин</strong>:</p>
		<input type="text" name="ФИО" placeholder="ФИО" class="form-control" value="<?php echo $_SESSION['logged_user']->login;?>"><br>	
		<input type="text" name="from" placeholder="Откуда" class="form-control"><br>
		<input type="text" name="to" placeholder="Куда" class="form-control"><br>
		<textarea name="message" class="form-control" placeholder="Пожелания"></textarea><br>
		<button type="submit" name="send" class="btn btn-success">Отправить </button>
	</form>
	</div>
	<?php require_once "blocks/footer.php"?>
</body>
</html>





