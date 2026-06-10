<?php

class Register extends Controller{
    function index(){
        //Require register_model serta return class register_model
        $registerModel = $this -> model('register_model');
        $registerModel -> cekRegister($_POST);
        $data['error1'] = $registerModel -> error1;
        $data['error2'] = $registerModel -> error2;
        $data['error3'] = $registerModel -> error3;
        $this -> view('LoginSystem/register', $data);
        }
}