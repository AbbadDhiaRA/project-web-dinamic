<?php
class App{
    //Setingan url default
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    public function __construct()
    {
        //Ambil request controller
        if(isset($_GET['url'])){
            $url = $this -> parseURL();
            if(file_exists(ROOT."/app/controllers/".$url[0].".php")){
                $this -> controller = $url[0];
                unset($url[0]);
            }
        }
        require_once ROOT."/app/controllers/".$this -> controller.".php";
        $this -> controller = new $this -> controller; // $variabel = new Home()
        
        //Ambil request method
        if(isset($url[1])){
            if(method_exists($this -> controller, $url[1])){
                $this -> method = $url[1];
                unset($url[1]);
            }
        }
       
        if(!empty($url)){
            $this -> params = array_values($url);
            unset($url);
        }

        call_user_func_array([$this -> controller, $this -> method], $this -> params);

    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;

        }
    }



}








