<?php
class Insert extends Controller
{
    function index($id = null)
    {
        if (isset($_POST['submit'])) {
            $insertObject = $this->model('insert_model');
            
            if ($id) {
                $insert = $insertObject->update($id, $_POST, $_FILES);
                $msg = 'Produk berhasil diupdate';
            } else {
                $insert = $insertObject->insert($_POST, $_FILES);
                $msg = 'Produk berhasil diupload';
            }

            if ($insert > 0) {
                echo "  <script>
                        alert('$msg');
                    </script>";
                header("Location: " . BASEURL . "/public/adminDashboard");
            }
        }
        $this->view('adminDashboard/insert');
    }
}
