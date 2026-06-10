<?php
class logout_model{
    function __construct()
    {
        session_start();
        session_unset();
        $_SESSION = [];
        session_destroy();
        header('Location:'.BASEURL.'/public');
    }
}