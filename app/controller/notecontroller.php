<?php
namespace MVC\controller;

use MVC\core\controller;
use MVC\core\session;
use MVC\model\note;

class notecontroller extends controller{
    function __construct(){
        if(!isset($_SESSION['id'])||empty($_SESSION['id'])){
            header("location:".PATH."/user");
            exit();
        }
    }

    function index(){
        $notes = new note;
        $data = $notes->getUserNotes(session::get('id'));       
        $this->view("home/homepage",["data"=>$data,'title'=>"homepage"]);
        
    }
    function notedelete($id){
        $notes = new note;
        $notes->delete($id);
        header("location:".PATH."/");
        exit(); 
    }
    function create(){
        return $this->view("home/create",['title'=>"Create"]);
    }
    function store(){

        $error = "";
       if(empty($_POST['title'])){
        $error.="title is required";
       }
       if(empty($_POST['note'])){
        $error.="note is required";
       }
       if($error !=null){
        session::set('error',$error);
        header("location:/note/create");
        exit();
       }else{
        $data = [htmlspecialchars($_POST['title']),htmlspecialchars($_POST['note']),session::get('id')];
        $notes = new note();
        $result = $notes->create($data);
        if(!$result){
            session::set('error',"something went wrong");
            header("location:/note/create");
            exit();
        }else{
            header("location:/");
            exit();
        }
       }
        
    }
    function edit($id){
        $notes = new note;
        $id = @$id[0];
        $data = $notes->getById($id);
        if(@$data['user_id']!=session::get("id")){
        $data = [];
        }
        return $this->view("home/edit",['note'=>$data,'title'=>"update"]);

    }
    function update($id){
        $id = @$id[0];
        $error = "";
        if(empty($_POST['title'])){
         $error.="title is required";
        }
        if(empty($_POST['note'])){
         $error.="note is required";
        }
        if($error !=null){
            session::set('error',$error);
        header("location:/note/edit/".$id);
         exit();
        }else{
         $data = [htmlspecialchars($_POST['title']),htmlspecialchars($_POST['note']),$id];
         $notes = new note;
         $result = $notes->update($data);
         if(!$result){
            session::set('error',$error);
            header("location:/note/edit/".$id);
             exit();
         }else{
             header("location:/");
             exit();
         }
    }
}

    

}


?>