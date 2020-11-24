
<!--

Aktuális-Rendelések:
    id
    userid
    restaurantid
    rendelesek
    status



-->

<?php
require_once DATABASE_CONTROLLER;

if (getConnection()):
    $query = "SELECT * FROM aktualis_rendelesek WHERE restaurantid = :restaurantid";
    $params = [ ':restaurantid' => $_SESSION['userid']];
    $datas = getList($query,$params);
    var_dump($datas);
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ügyfél</th>
      <th scope="col">Rendelés(ek)</th>
      <th scope="col">&nbsp; </th>
      <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php for ($i=0; $i < count($datas); $i++):?>
    <tr>
      <th scope="row"><?=$i+1?></th>
      <td><?=$datas[$i]['userid']?></td>
      <td><?=$datas[$i]['rendelesek']?></td>
      <td><button class="btn btn-success" href="#" >Elkészült</button></td>
      <td><button class="btn btn-danger" href="#" >Rendelés törlése</button></td>
    </tr>
    <?php endfor;endif;?>
  </tbody>
</table>