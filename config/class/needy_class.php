<?php

  class N{

    public static $e;
    public static $database;
    public static $DIR = "/ParekaFox/Instagram-clone";
    public static $GMAIL = "shuttler2000@gmail.com";
    public static $GMAIL_PASSWORD = "Badminton2000<3";

    public static function _DB(){
      try {
        self::$database = new PDO('mysql:host=localhost:8111;dbname=myinstagram;charset=utf8mb4', 'root', 'hdg');
        self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $e = self::$e;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return self::$database;
    }

  }

?>
