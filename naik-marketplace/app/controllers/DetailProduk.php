<?php
class DetailProduk extends Controller
{
    function index($id = null)
    {
        if (!$id) {
            header('Location: ' . BASEURL . '/public');
            exit;
        }

        $idSafe = mysqli_real_escape_string(CONN, $id);
        $products = $this->model('homepage_model')->select("SELECT * FROM tabel_produk WHERE id = '$idSafe'");
        
        if (empty($products)) {
            header('Location: ' . BASEURL . '/public');
            exit;
        }

        $data['judul'] = 'NAIK - DETAIL PRODUK';
        $data['produk'] = $products[0];
        
        // Fetch recommendations (4 other products)
        $data['rekomendasi'] = $this->model('homepage_model')->select("SELECT * FROM tabel_produk WHERE id != '$idSafe' LIMIT 4");

        $this->view('templates/header', $data);
        $this->view('detailProduk/index', $data);
        $this->view('templates/footer');
    }

}
