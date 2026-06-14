<?php
class shoppingChart extends Controller{
    function index(){
        $data['judul'] = 'NAIK - KERANJANG';
        $this -> view('templates/header', $data);
        $this -> view('shoppingChart/index');
        $this -> view('templates/footer');
    }

    function add()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $id = $_POST['product_id'] ?? '';
        $size = $_POST['size'] ?? '41';
        $qty = intval($_POST['qty'] ?? 1);

        if ($id) {
            $idSafe = mysqli_real_escape_string(CONN, $id);
            $product = $this->model('homepage_model')->select("SELECT * FROM tabel_produk WHERE id = '$idSafe'");
            if (!empty($product)) {
                $p = $product[0];

                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = [];
                }

                // Check if item with same ID and size exists in cart
                $found = false;
                foreach ($_SESSION['cart'] as &$item) {
                    if ($item['id'] == $p['id'] && $item['size'] == $size) {
                        $item['qty'] += $qty;
                        $found = true;
                        break;
                    }
                }

                if (!$found) {
                    $_SESSION['cart'][] = [
                        'id' => $p['id'],
                        'name' => $p['nama'],
                        'price' => $p['harga'],
                        'image' => BASEURL . "/public/assets/" . $p['gambar'],
                        'qty' => $qty,
                        'size' => $size,
                        'condition' => 'new',
                        'variant' => 'Size ' . $size,
                        'checked' => true
                    ];
                }

                echo json_encode(['success' => true, 'cart_count' => count($_SESSION['cart'])]);
                exit;
            }
        }
        echo json_encode(['success' => false]);
        exit;
    }

    function remove()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $id = $_POST['id'] ?? '';
        $size = $_POST['size'] ?? '';

        if ($id !== '' && $size !== '' && isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $index => $item) {
                if ($item['id'] == $id && $item['size'] == $size) {
                    unset($_SESSION['cart'][$index]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo json_encode(['success' => true]);
                    exit;
                }
            }
        }
        echo json_encode(['success' => false]);
        exit;
    }

    function updateQty()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $id = $_POST['id'] ?? '';
        $size = $_POST['size'] ?? '';
        $qty = intval($_POST['qty'] ?? 1);

        if ($id !== '' && $size !== '' && $qty > 0 && isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as &$item) {
                if ($item['id'] == $id && $item['size'] == $size) {
                    $item['qty'] = $qty;
                    echo json_encode(['success' => true]);
                    exit;
                }
            }
        }
        echo json_encode(['success' => false]);
        exit;
    }

    function payment()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        $data['judul'] = 'NAIK - PEMBAYARAN';
        $data['cart'] = $_SESSION['cart'] ?? [];
        
        if (empty($data['cart'])) {
            header('Location: ' . BASEURL . '/public/shoppingChart');
            exit;
        }

        $this->view('templates/header', $data);
        $this->view('shoppingChart/payment', $data);
        $this->view('templates/footer');
    }

    function shipping()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $data['judul'] = 'NAIK - PENGIRIMAN';
        
        $this->view('templates/header', $data);
        $this->view('shoppingChart/shipping', $data);
        $this->view('templates/footer');
    }

    function clear()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION['cart']);
        echo json_encode(['success' => true]);
        exit;
    }
}
