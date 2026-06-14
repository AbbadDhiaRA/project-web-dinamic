<?php
class Home extends Controller{
    function index(){

        $data['judul'] = 'NAIK - HOMEPAGE';
        $data['styles'] = ['homepageStyles.css'];
        
        if (isset($_POST['keyword']) && !empty(trim($_POST['keyword']))) {
            $keyword = mysqli_real_escape_string(CONN, trim($_POST['keyword']));
            $query = "SELECT * FROM tabel_produk WHERE nama LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%'";
            $data['data'] = $this->model('homepage_model')->select($query);
        } else {
            $data['data'] = $this->model('homepage_model')->select('SELECT * FROM tabel_produk');
        }
        
        // $this -> model("cekAccess");
        $this -> view("templates/header", $data);
        $this -> view("Homepage/index", $data['data']);
        $this -> view("templates/footer");
        
    }


}


