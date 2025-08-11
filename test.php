<?php
require_once "db.php";


$json = file_get_contents("data.json");
$data = json_decode($json, true);

foreach ($data as $key => $value) {
  foreach ($value as $key2 => $value2) {
    $title = $value2["title"];
    $price = $value2["price"];
    $discount = $value2["discount"];
    $des = $value2["des"];

    DB::exec("INSERT INTO `item`( `title`, `price`, `discount`, `des`, `cate`,`img`) VALUES ('$title','$price','$discount','$des','$key','./asset/images/$key/$key2.PNG')");
  }
}
