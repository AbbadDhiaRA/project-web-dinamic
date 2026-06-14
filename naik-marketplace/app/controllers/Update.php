<?php
class Update extends Controller{
    function index($inputGet){
        $id = $inputGet['url'];
        $id = rtrim($id, "/");
        $id = filter_var($id, FILTER_SANITIZE_URL);
        $id = explode('/', $id);
        $id = $id[1];
        print_r($id);
    }
}