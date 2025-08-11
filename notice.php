<?php
require_once "db.php";

header("Content-Type: application/json");

$type = $_GET["type"];
$date = $_GET["date"];



if ($type == "all") {
  echo json_encode(DB::fetchAll("select * from notice order by date $date"));
} else {
  echo json_encode(DB::fetchAll("select * from notice where type = '$type' order by date $date"));
}
