<?php
namespace MVC\controller;

use MVC\core\controller;
use MVC\model\note;

class homecontroller extends controller{

    function index(){
        $notes = new note;
        $data = $notes->getUserNotes(1);       
        return $this->view("home/homepage",["data"=>$data,'title'=>"homepage"]);
    }
    function notedelete($id){
        $notes = new note;
        $notes->delete($id);
        header("location:".PATH."/");
        exit(); 
    }
    function create(){
        return $this->view("home/create",[]);
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
        $_SESSION['error'] = $error;
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
       }else{
        $data = [htmlspecialchars($_POST['title']),htmlspecialchars($_POST['note']),1];
        $notes = new note;
        $result = $notes->create($data);
        if(!$result){
            $_SESSION['error'] = $error;
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }else{
            header("location:".PATH);
            exit();
        }
       }
        
    }
    function edit($id){
        $notes = new note;
        $id = @$id[0];
        $data = $notes->getById($id);
        return $this->view("home/edit",['note'=>$data]);

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
         $_SESSION['error'] = $error;
         header("location:".$_SERVER['HTTP_REFERER']);
         exit();
        }else{
         $data = [htmlspecialchars($_POST['title']),htmlspecialchars($_POST['note']),$id];
         $notes = new note;
         $result = $notes->update($data);
         if(!$result){
             $_SESSION['error'] = $error;
             header("location:".$_SERVER['HTTP_REFERER']);
             exit();
         }else{
             header("location:".PATH);
             exit();
         }
    }
}

}


?>