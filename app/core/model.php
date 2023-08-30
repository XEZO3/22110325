<?php
namespace MVC\core;

class model{
   protected static $dbs;

  public function __construct(){
    self::$dbs = $this->connect();
  }

protected function connect(){
  $dsn = "mysql:host =localhost;dbname=usernote";
  $conn= new \PDO($dsn,"root","");
  return $conn;
}
  function query($sql,$parm){
   $query = self::$dbs->prepare($sql);
   $query->execute($parm);
   return $query;
}


}
?>