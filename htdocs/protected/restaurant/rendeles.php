<?php 
require_once DATABASE_CONTROLLER;
if(getConnection() && $_SESSION["logged"] ){

    $id = $_GET['id'];

    $query = "SELECT * FROM foods WHERE fid = :id";
    $params = [":id" => $id];

    $food = getRecord($query,$params);

    $query = "INSERT INTO rendelesek(userid, restaurantid, rendelesek, status, rendelesLeadas, rendelesElkeszult) VALUES (:userid, :restaurantid, :rendelesek, :status, :rendelesLeadas, :rendelesElkeszult)";
    $params = [
        ":userid" => $_SESSION["userid"],
        ":restaurantid" => $food["restid"],
        ":rendelesek" => $food["fname"],
        ":status" => 0,
        ":rendelesLeadas" => date('Y-m-d H:i:s'),
        ":rendelesElkeszult" => date('Y-m-d H:i:s', 0),
    ];

    if(!executeDML($query, $params)){
        echo 'Hiba történt a rendelés során!';
    }
    else {
        header('Location: index.php?P=rendallapot');
    }
}



?>