<?php
class DB
{
  static $db = null;
  static function __callStatic($name, $args)
  {
    self::$db ??= new PDO("mysql:host=localhost;dbname=c;charset=utf8mb4","root",'',[19=>5,3=>2]);

    return match ($name) {
      "exec" => self::$db->exec($args[0]),
      "fetch" => self::$db->query($args[0])->fetch(),
      "fetchAll" => self::$db->query($args[0])->fetchAll(),
    };
  }
}
