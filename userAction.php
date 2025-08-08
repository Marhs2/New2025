<?php
require_once "db.php";
require_once "lib.php";

$name = $_POST["name"];
$id = $_POST["id"];
$mail = $_POST["mail"];
$psw = $_POST["psw"];

[$salt, $h_psw] = p_Hash($psw);




if (DB::fetch("select * from user where id = '$id'")) {
  alert("이미 같은 아이디의 사용자가 있습니다");
} else {
  DB::exec("INSERT INTO user( id, name, psw, salt, mail) VALUES ('$id','$name','$h_psw','$salt','$mail')");
  alert("로그인 성공");
}
