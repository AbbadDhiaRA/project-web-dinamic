<?php
class AdminDashboard extends Controller{
    function index(){
        $data['judul'] = 'NAIK - DASHBOARD ADMIN';
        
        if (isset($_POST['keyword']) && !empty(trim($_POST['keyword']))) {
            $keyword = mysqli_real_escape_string(CONN, trim($_POST['keyword']));
            $query = "SELECT * FROM tabel_produk WHERE nama LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%'";
            $data['data'] = $this->model('homepage_model')->select($query);
        } else {
            $data['data'] = $this->model('homepage_model')->select('SELECT * FROM tabel_produk');
        }
        
        $this -> view('templates/header', $data);
        $this -> view('adminDashboard/index', $data['data']);
        $this -> view('templates/footer');
    }
}
