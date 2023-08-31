<?php
namespace MVC\controller;
use MVC\core\controller;
use MVC\core\session;
use MVC\model\users;

class usercontroller extends controller{
    public function __construct(){
        
    }
    public function middleware(){
        if(isset($_SESSION['id'])||!empty($_SESSION['id'])){
            header("location:".PATH."/note");
            exit();
        } 
    }
    public function index(){
        $this->middleware();
        return $this->view("home/login",[]);
    }
    public function register(){
        $this->middleware();
        return $this->view("home/signup",[]);
    }
    public function login(){
        $this->middleware();
        $error = "";
        if(empty($_POST['email'])){
         $error.="username is required\n";
        }
        if(empty($_POST['password'])){
         $error.="password is required\n";
        }
        if($error !=null){
         session::set("error",$error);
         header("location:".$_SERVER['HTTP_REFERER']);
         exit();
        }else{
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $user = new users();
        $query = $user->getUserByEmail($email);
        if($query){
            if(password_verify($password, $query['password'])){
              
                session::set("username",$query['username']);
                session::set('id',$query['id']);
                header("location:".PATH."/note");
                exit;
            }else{
                session::set("error","username or password is incorrect");
                header("location:".PATH."/user");
                exit;
            }
            
        }else{
            header("location:".PATH."/user");
            exit;
        }
    }
    }

    public function store(){
        $this->middleware();
        $error = "";
        if(empty($_POST['email'])){
         $error.="username is required";
        }
        if(empty($_POST['password'])){
         $error.="password is required";
        }
        if(empty($_POST['name'])){
            $error.="fullname is required";
        }
        if(empty($_POST['password_conf'])){
            $error.="password_confarmation is required";
        }
        if($error !=null){
         $_SESSION['error'] = $error;
         header("location:".$_SERVER['HTTP_REFERER']);
         exit();
        }else{
           $password =password_hash($_POST['password'], PASSWORD_DEFAULT);         
           $data = [htmlspecialchars($_POST['name']),htmlspecialchars($_POST['email']),$password];
           $user = new users();
           $result = $user->create($data);
           if(!$result){
            session::set('error',"something went wrong");
            header("location:".$_SERVER['HTTP_REFERER']);
            exit();
        }else{
            header("location:".PATH."/user");
            exit();
        }
        }
    }
    public function logout(){
        session::unset("id");
        header("location:".PATH."/user");
        exit();
    }
    
}

?>