<?php
namespace MVC\model;
use MVC\core\model;
class note extends model{
function getUserNotes($id){
     $query =  $this->query("select * from notes where user_id = ?",array($id));
     return $query->fetchAll(\PDO::FETCH_ASSOC);
   
}
function create($data){
   return $this->query("INSERT INTO `notes` (`title`, `note`, `user_id`, `created_at`, `updated_at`) VALUES (?, ?, ?, NOW(), NOW())",$data);
}

function delete($id){
    $id = @$id[0];
   return $this->query("DELETE FROM `notes` WHERE id = ?",array(@$id));
}
function update($data){
    return $this->query("UPDATE `notes` SET title=?,`note` = ? WHERE id = ?",$data);
 }

 function getById($id){
    $query =  $this->query("select * from notes where id = ?",array($id));
     return $query->fetch(\PDO::FETCH_ASSOC);
 }
}

?>