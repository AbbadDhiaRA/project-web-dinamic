<?php
class insert_model
{
    function insert($inputPost, $inputFiles)
    {

        $nama = htmlspecialchars($inputPost["nama"]);
        $harga = htmlspecialchars($inputPost["harga"]);
        $deskripsi = htmlspecialchars($inputPost["deskripsi"]);
        $gambar = $this->upload($inputFiles);
        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO tabel_produk VALUES ('', '$nama', '$harga', '$deskripsi', '$gambar')";

        mysqli_query(CONN, $query);

        return mysqli_affected_rows(CONN);
    }

    function upload($inputFiles)
    {
        
        $name = $inputFiles["gambar"]["name"];
        $tmp_name = $inputFiles["gambar"]["tmp_name"];
        $error = $inputFiles["gambar"]["error"];
        $size = $inputFiles["gambar"]["size"];

        $validasi = ["png", "jpg", "jpeg"];
        $memisahNama = pathinfo($name, PATHINFO_EXTENSION);
        $newName = uniqid() . "." . $memisahNama;

        if (!in_array($memisahNama, $validasi)) {
            echo "
            <script>
                alert('Maaf, file tidak sesuai');
                document.location.href = 'index.php';
            </script>
        ";
            return false;
        }

        if ($error === 4) {
            echo "
            <script>
                alert('Maaf, file gagal diupload');
                document.location.href = 'index.php';
            </script>
        ";
            return false;
        }

        if ($size > 2000000) {
            echo "
            <script>
                alert('Maaf, file terlalu besar');
                document.location.href = 'index.php';
            </script>
        ";
            return false;
        }

        move_uploaded_file($tmp_name, ROOT . "/public/assets/" . $newName);

        return $newName;
    }

    function update($id, $inputPost, $inputFiles)
    {
        $nama = htmlspecialchars($inputPost["nama"]);
        $harga = htmlspecialchars($inputPost["harga"]);
        $deskripsi = htmlspecialchars($inputPost["deskripsi"]);

        // Handle photo upload
        // If a new photo is uploaded, upload it and delete the old one
        // If no new photo is uploaded, keep the old one
        if ($inputFiles["gambar"]["error"] === 4) {
            $gambar = $inputPost["gambarLama"];
        } else {
            $gambar = $this->upload($inputFiles);
            if (!$gambar) {
                return false;
            }
            // Delete the old image file from public/assets if a new one is successfully uploaded
            $gambarLama = $inputPost["gambarLama"];
            if (!empty($gambarLama) && file_exists(ROOT . "/public/assets/" . $gambarLama)) {
                unlink(ROOT . "/public/assets/" . $gambarLama);
            }
        }

        $query = "UPDATE tabel_produk SET 
                    nama = '$nama', 
                    harga = '$harga', 
                    deskripsi = '$deskripsi', 
                    gambar = '$gambar' 
                  WHERE id = '$id'";

        if (mysqli_query(CONN, $query)) {
            return 1; // Return 1 on success to satisfy the controller's check
        }
        return 0;
    }
}
