<?php
namespace MVC\model;
use MVC\core\model;
use MVC\core\session;
class users extends model{
  
 
    function getUserByEmail($email){
     $query =  $this->query("select * from users where email = ?",[$email]);
     return $query->fetch(\PDO::FETCH_ASSOC);
    }

    function create($data){
      return $this->query("INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES (NULL, ?, ?, ?, NOW(), NOW())",$data);
    }
    
}

?>