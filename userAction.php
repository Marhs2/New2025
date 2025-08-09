<?php
require_once "db.php";
require_once "lib.php";

$type = $_POST["type"];


if ($type == "login") {
  $id = $_POST["id"];
  $psw = $_POST["psw"];
  $user = DB::fetch("select * from user where id = '$id'");

  if ($user) {
    $salt = $user->salt;
    $h_psw = $user->psw;

    $newH_psw = hash('sha256', $salt . $psw);

    if ($h_psw == $newH_psw) {
      alert("로그인 성공");
      $_SESSION["ss"] = $user;
    } else {
      alert("비밀번호가 틀렸습니다");
    }
  } else {
    alert("존재하지 않는 사용자입니다");
  }
  selectMove("./user/login.html");
} else if ($type == "reg") {
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
  selectMove("./user/reg.html");
}
