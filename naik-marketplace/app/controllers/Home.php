<?php
class Home extends Controller{
    function index(){

        $data['judul'] = 'NAIK - HOMEPAGE';
        $data['data'] = $this -> model('homepage_model') -> select('SELECT * FROM tabel_produk');
        $this -> view("templates/header", $data);
        $this -> view("Homepage/index", $data['data']);
        $this -> view("templates/footer");
        
    }


}


