<?php
namespace MVC\core ;



class app{
    private $controller;
    private $method;
    private $params;
    public function __construct()
    {
       $this->url(); 
       $this->render();
        
    }
    private function url(){
        //echo $_SERVER['QUERY_STRING'];
        if(!empty($_SERVER['QUERY_STRING'])){
        $url = explode("/",$_SERVER['QUERY_STRING']);
        $this->controller = (!empty($url[0])) ? $url[0]."controller" : "notecontroller";
        //echo $this->controller;
        $this->method = (isset($url[1])) ? $url[1] : "index";
        //echo $this->method;
        unset($url[0],$url[1]);
        $this->params = array_values($url);
        }
        else{
            $this->controller = "notecontroller";
            $this->method = "index";
        }
        


    }
    private function render(){
        $controller = "MVC\controller\\".$this->controller;
        if(class_exists($controller)){
           $controller = new $controller;
            if(method_exists($controller,$this->method)){
                call_user_func([$controller,$this->method],$this->params);
            }else{
                echo"<h1> error 404 not fount</h1><a href='/' style='font-size:50px'>back to home page</a>";
            }
        }else{
             echo"<h1> error 404 not fount</h1><a href='/' style='font-size:50px'>back to home page</a>";
        }
    }
}

?>