<?php
	$query = "SELECT * FROM rendelesek INNER JOIN users ON users.id = rendelesek.userid WHERE rendelesek.userid = :id";
    $params = [':id' => $_SESSION['userid']];
    $datas = getList($query,$params);
?>