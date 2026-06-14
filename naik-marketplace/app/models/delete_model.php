<?php
class delete_model
{
    function cekDelete($inputGet)
    {
        $id = $inputGet['url'];
        $id = rtrim($id, "/");
        $id = filter_var($id, FILTER_SANITIZE_URL);
        $id = explode('/', $id);
        $id = $id[1];

        if ($this->delete($id) > 0) {
            echo "
            <script>
                alert('Data berhasil dihapus');
            </script>
        ";
        header("Location:".BASEURL."/public/adminDashboard/");
        } else {
            echo "
            <script>
                alert('Data gagal dihapus');
            </script>
        ";
        header("Location:".BASEURL."/public/adminDashboard/");
        };
    }

    function delete($id)
    {
        mysqli_query(CONN, "DELETE FROM tabel_produk WHERE id = '$id'");
        return mysqli_affected_rows(CONN);
    }
}
