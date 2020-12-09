<?php
require_once DATABASE_CONTROLLER;

if(isset($_POST['addCity'])):
	$query = "INSERT INTO cities (Name) VALUES (:Name)";
	$params = [':Name' => $_POST['name']];
	if(!executeDML($query,$params)):
		print_r($_POST);
		echo '<br>';
		print_r($params);
	else:
		header('Location: index.php?P=admin');
	endif;

else:
	?>
	<div class="container-fluid p-4">
		<form method="POST">
			<input type="hidden" name="id">
			<div class="form-group">
				<label >Város neve</label>
				<input name="name" type="text" class="form-control">
			</div>
			<button name="addCity" type="submit" class="btn btn-primary">Hozzáadás</button>
		</form>
	</div>
<?php endif;?>