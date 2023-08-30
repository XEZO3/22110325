<?php
namespace MVC\controller;

use MVC\core\controller;
use MVC\model\note;

class homecontroller extends controller{

    function index(){
        $notes = new note;
        $data = $notes->getUserNotes(1);       
        $this->view("home/homepage",["data"=>$data,'title'=>"homepage"]);
    }
    function notedelete($id){
        $notes = new note;
        $notes->delete($id);
        header("location:".PATH."/");
        exit(); 
    }

}


?>