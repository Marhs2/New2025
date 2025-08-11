<?php


require_once "db.php";


$userId = $_SESSION["ss"]->id;
$itemId = $_GET["id"];


if (DB::fetch("select * from cart where userId = '$userId' and itemId = '$itemId'")) {
  echo DB::exec("UPDATE cart SET count= count+1 where userId = '$userId' and itemId = '$itemId'");
} else {
  echo DB::exec("INSERT INTO cart(userId, itemId) VALUES ('$userId','$itemId')");
}
