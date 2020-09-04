<form action="admin.php" method="post">
<divclass='container'>
<h3>Добавить новую статью</h3>
<input class="form-control mt-3 mb-2" type="text" name="new_title" placeholder="Заголовокстатьи">
<input class="form-control" type="text" name="new_img" placeholder="img.формат">
<textarea class="form-control mt-2" id="exampleFormControlTextarea1" name="new_info" rows="3" placeholder="Текстстатьи"></textarea>
<p><center><button class="btnbtn-outline-primary ml-3"style="color: #0C0C0D;font-size:14px; font-weight: bold;" name="do_new" type="submit">Добавить</button></center><br></p>
<p><center><button class="btnbtn-outline-primary ml-3" name="do_out" href="/logout.php" style="color: #0C0C0D;font-size:15px; font-weight: bold;">Выйти</button><center><br></p>
</div>
</form>

$data = $_POST;
if(isset($data['do_new'])) {
	$errors = array();
	if(trim($data['new_title']) == '') {
		$errors[] = "Введитезаголовок!";
	}
	if(trim($data['new_info']) == '') {
		$errors[] = "Введитетексткарточки!";
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
echo '<center><divstyle="color: #B0C6D7; ">Статьяуспешнодобавлена! Она появится на главной странице</div><hr></center>';
	} else {
		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}
if (isset($data['do_out'])){
	echo '<meta http-equiv=Refresh content="1; card.php">';
}
