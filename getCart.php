<?php
require_once "db.php";

$items = DB::fetchAll("select * from item order by cate desc");

echo json_encode($items);
