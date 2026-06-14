<?php
class logout_model{
    function __construct()
    {
        session_start();
        session_unset();
        $_SESSION = [];
        session_destroy();
        
        setcookie('x', '', time() - 3600 );
        setcookie('key', '', time() - 3600 );
        
        header('Location:'.BASEURL.'/public');
    }
}