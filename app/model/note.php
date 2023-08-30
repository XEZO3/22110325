<?php
namespace MVC\model;
use MVC\core\model;
class note extends model{
function getUserNotes($id){
     $query =  $this->query("select * from notes where user_id = ?",array($id));
     return $query->fetchAll(\PDO::FETCH_ASSOC);
   
}
function create($data){
    self::$db->insert('notes',$data);
}
function lastId(){
    return self::$db->lastInsertId();
}
function delete($id){
    $id = @$id[0];
    $this->query("DELETE FROM `notes` WHERE id = ?",array(@$id));
}
}

?>