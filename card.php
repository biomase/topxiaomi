<?php 
	$connect = mysqli_connect("test.ru","root","","test");
	$sql = mysqli_query($connect,"SELECT * FROM `card`");
	$row = mysqli_fetch_assoc($sql);
?>

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
background: #7d866f	fixed url(img/road.jpg)  0% 0%;;
background-size: cover; /* Цвет фона и путь к файлу */
color: #FA8E47; /* Цвет текста */
}
<?php require "blocks/header.php"?>	
<div class="container mt-5" >
	<h3 class="mb-5" style="color: #56483F">Информация о водителях</h3>
		<div class="d-flex flex-wrap">
			<?php while ($row = mysqli_fetch_assoc($sql)){
		?>
				<div class="card mb-4 shadow-sm" style="background: #B0C6D7">
			      <div class="card-header">
			        <h4 class="my-0 font-weight-normal"style="color: #56483F"><?php echo $row['title']?> </h4>
			      </div>
			    	<div class="card-body">
			      		<img src="img/<?php echo $row['image'] ?>" class="img-thumbnail">
			        	<div class="list-unstyled mt-3 mb-4" >
			        	<div class="info"style="color: #56483F"><?php echo $row['info']?></div>	
			       	 	</div>
			    	</div>
			    </div>
			<?php
			}
			?>
    	</div>
 	</div>	
<?php require "blocks/footer.php"?>
</style>
</body>
</html>