<?php

class Login extends Controller{
    function index(){
        
        $this -> model('login_model') -> cekLogin($_POST);
        $error = $this -> model('login_model') -> cekLogin($_POST);
        $this -> view('LoginSystem/login', $error);
        
    }
}