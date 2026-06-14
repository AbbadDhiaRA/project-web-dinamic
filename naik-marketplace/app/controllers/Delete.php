<?php
class Delete extends Controller{
    function index(){
        $this -> model('delete_model') -> cekDelete($_GET);
    }
}