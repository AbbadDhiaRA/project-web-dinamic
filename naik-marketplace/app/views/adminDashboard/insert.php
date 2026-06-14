<?php // app/views/products/create.php 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAIK - INSERT</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product-create.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=DM+Sans:wght@300;400;500&display=swap');

    /* ===========================
   PAGE LAYOUT
=========================== */
    .pc-page {
        font-family: 'DM Sans', sans-serif;
        background: #f5f5f0;
        min-height: 100vh;
        padding: 32px 24px;
    }

    .pc-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 720px;
        margin: 0 auto 32px;
    }

    .pc-brand {
        font-family: 'Space Mono', monospace;
        font-size: 1.3rem;
        font-weight: 700;
        letter-spacing: -1px;
    }

    .pc-brand span {
        background: #0a0a0a;
        color: #f5f5f0;
        padding: 0 5px;
    }

    .pc-breadcrumb {
        font-family: 'Space Mono', monospace;
        font-size: 0.65rem;
        color: #888884;
        letter-spacing: 0.08em;
    }

    .pc-breadcrumb strong {
        color: #0a0a0a;
        font-weight: 700;
    }

    /* ===========================
   CARD
=========================== */
    .pc-card {
        background: #ffffff;
        border: 1.5px solid #0a0a0a;
        max-width: 720px;
        margin: 0 auto;
    }

    .pc-card-header {
        padding: 20px 32px;
        border-bottom: 1px solid #e8e8e3;
    }

    .pc-card-title {
        font-family: 'Space Mono', monospace;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #0a0a0a;
    }

    .pc-card-body {
        padding: 32px;
    }

    .pc-card-footer {
        padding: 20px 32px;
        border-top: 1px solid #e8e8e3;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    /* ===========================
   ALERT
=========================== */
    .pc-alert {
        padding: 12px 14px;
        font-family: 'Space Mono', monospace;
        font-size: 0.75rem;
        margin-bottom: 24px;
        border-radius: 4px;
    }

    .pc-alert-error {
        background: #0a0a0a;
        color: #f5f5f0;
        border: 1.5px solid #0a0a0a;
    }

    /* ===========================
   FORM GRID
=========================== */
    .pc-form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }

    .pc-form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .pc-full {
        grid-column: 1 / -1;
    }

    .pc-form-group label {
        font-family: 'Space Mono', monospace;
        font-size: 0.65rem;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #888884;
    }

    .pc-form-group input[type="text"],
    .pc-form-group input[type="number"],
    .pc-form-group textarea {
        width: 100%;
        padding: 11px 14px;
        border: 1.5px solid #c0c0bc;
        background: #ffffff;
        font-family: 'DM Sans', sans-serif;
        font-size: 0.92rem;
        color: #0a0a0a;
        outline: none;
        border-radius: 4px;
        transition: border-color 0.15s ease;
    }

    .pc-form-group input:focus,
    .pc-form-group textarea:focus {
        border-color: #0a0a0a;
    }

    .pc-form-group textarea {
        resize: vertical;
        min-height: 110px;
        line-height: 1.6;
    }

    /* ===========================
   HARGA PREFIX
=========================== */
    .pc-price-wrap {
        position: relative;
    }

    .pc-price-prefix {
        position: absolute;
        left: 14px;
        top: 50%;
        transform: translateY(-50%);
        font-family: 'Space Mono', monospace;
        font-size: 0.72rem;
        color: #888884;
        pointer-events: none;
    }

    .pc-price-wrap input {
        padding-left: 46px;
    }

    /* ===========================
   UPLOAD ZONA
=========================== */
    .pc-upload-zone {
        border: 1.5px dashed #c0c0bc;
        border-radius: 4px;
        padding: 36px 20px;
        text-align: center;
        cursor: pointer;
        background: #fafaf8;
        transition: border-color 0.15s ease;
    }

    .pc-upload-zone:hover {
        border-color: #0a0a0a;
    }

    .pc-upload-icon {
        font-size: 2rem;
        color: #c0c0bc;
        margin-bottom: 10px;
        line-height: 1;
    }

    .pc-upload-main {
        font-size: 0.88rem;
        font-weight: 500;
        color: #0a0a0a;
        margin-bottom: 4px;
    }

    .pc-upload-sub {
        font-family: 'Space Mono', monospace;
        font-size: 0.62rem;
        color: #888884;
        letter-spacing: 0.04em;
    }

    /* ===========================
   PREVIEW GRID
=========================== */
    .pc-preview-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        margin-top: 14px;
    }

    .pc-preview-item {
        aspect-ratio: 1;
        border: 1.5px solid #e8e8e3;
        border-radius: 4px;
        overflow: hidden;
        position: relative;
        background: #f5f5f0;
    }

    .pc-preview-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .pc-preview-badge {
        position: absolute;
        top: 5px;
        left: 5px;
        background: #0a0a0a;
        color: #f5f5f0;
        font-family: 'Space Mono', monospace;
        font-size: 0.55rem;
        padding: 2px 6px;
        letter-spacing: 0.05em;
    }

    .pc-preview-remove {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #0a0a0a;
        color: #f5f5f0;
        border: none;
        width: 20px;
        height: 20px;
        border-radius: 2px;
        cursor: pointer;
        font-size: 14px;
        line-height: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* ===========================
   HINT & CHAR COUNT
=========================== */
    .pc-hint {
        font-family: 'Space Mono', monospace;
        font-size: 0.62rem;
        color: #888884;
        letter-spacing: 0.04em;
    }

    .pc-char-count {
        font-family: 'Space Mono', monospace;
        font-size: 0.62rem;
        color: #888884;
        text-align: right;
    }

    /* ===========================
   BUTTONS
=========================== */
    .pc-btn {
        padding: 11px 28px;
        font-family: 'Space Mono', monospace;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.15s ease;
        text-decoration: none;
        display: inline-block;
    }

    .pc-btn-primary {
        background: #0a0a0a;
        color: #f5f5f0;
        border: 1.5px solid #0a0a0a;
    }

    .pc-btn-primary:hover {
        background: #f5f5f0;
        color: #0a0a0a;
    }

    .pc-btn-ghost {
        background: #f5f5f0;
        color: #0a0a0a;
        border: 1.5px solid #c0c0bc;
    }

    .pc-btn-ghost:hover {
        border-color: #0a0a0a;
    }

    /* ===========================
   RESPONSIVE
=========================== */
    @media (max-width: 540px) {
        .pc-form-grid {
            grid-template-columns: 1fr;
        }

        .pc-full {
            grid-column: 1;
        }

        .pc-card-body {
            padding: 20px;
        }

        .pc-card-header,
        .pc-card-footer {
            padding: 16px 20px;
        }

        .pc-preview-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
</style>

<?php
function update($inputGet)
{
    if (isset($inputGet['url'])) {
        $id = $inputGet['url'];
        $id = rtrim($id, "/");
        $id = filter_var($id, FILTER_SANITIZE_URL);
        $id = explode('/', $id);
        if (isset($id[1]) && is_numeric($id[1])) {
            $idVal = $id[1];
            $result = mysqli_query(CONN, "SELECT * FROM tabel_produk WHERE id = $idVal");
            if ($result) {
                $wadah  = [];
                while ($item = mysqli_fetch_assoc($result)) {
                    $wadah[] = $item;
                }
                return $wadah;
            }
        }
    }
    return [];
}

$wadahProduk = update($_GET);
$dataProduk = !empty($wadahProduk) ? $wadahProduk[0] : null;

$namaValue = $dataProduk ? htmlspecialchars($dataProduk['nama']) : '';
$hargaValue = $dataProduk ? htmlspecialchars($dataProduk['harga']) : '';
$deskripsiValue = $dataProduk ? htmlspecialchars($dataProduk['deskripsi']) : '';
$gambarValue = $dataProduk ? htmlspecialchars($dataProduk['gambar']) : '';
?>




<body>

    <div class="pc-page">

        <div class="pc-header">
            <div class="pc-brand"><span>NAIK</span></div>
            <span class="pc-breadcrumb">
                Dashboard / Produk / <strong><?= $dataProduk ? 'Edit Produk' : 'Tambah Baru' ?></strong>
            </span>
        </div>

        <div class="pc-card">
            <div class="pc-card-header">
                <p class="pc-card-title">// <?= $dataProduk ? 'Edit Produk' : 'Tambah Produk Baru' ?></p>
            </div>

            <form method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="gambarLama" value="<?= $gambarValue ?>">
                <div class="pc-card-body">

                    <?php if (!empty($error)): ?>
                        <div class="pc-alert pc-alert-error">
                            <?= htmlspecialchars($error) ?>
                        </div>
                    <?php endif; ?>

                    <div class="pc-form-grid">

                        <!-- Nama Produk -->
                        <div class="pc-form-group pc-full">
                            <label for="nama">Nama Produk</label>
                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                placeholder="cth: Nike Air Force 1 '07 White"
                                maxlength="100"
                                value="<?= $namaValue ?>"
                                oninput="document.getElementById('nama-count').textContent=this.value.length+'/100'">
                            <span class="pc-char-count" id="nama-count"><?= strlen($namaValue) ?>/100</span>
                        </div>

                        <!-- Harga -->
                        <div class="pc-form-group">
                            <label for="harga">Harga</label>
                            <div class="pc-price-wrap">
                                <span class="pc-price-prefix"></span>
                                <input
                                    type="number"
                                    id="harga"
                                    name="harga"
                                    placeholder="850000"
                                    min="0"
                                    value="<?= $hargaValue ?>">
                            </div>
                            <span class="pc-hint">Masukkan angka tanpa titik atau koma</span>
                        </div>


                        <!-- Deskripsi -->
                        <div class="pc-form-group pc-full">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea
                                id="deskripsi"
                                name="deskripsi"
                                placeholder="Ceritakan kondisi, ukuran yang tersedia, bahan, dan detail penting lainnya..."
                                maxlength="500"
                                oninput="document.getElementById('desc-count').textContent=this.value.length+'/500'"><?= $deskripsiValue ?></textarea>
                            <span class="pc-char-count" id="desc-count"><?= strlen($deskripsiValue) ?>/500</span>
                        </div>

                        <!-- Upload Gambar -->
                        <div class="pc-form-group pc-full">
                            <label>Foto Produk</label>
                            <div class="pc-upload-zone" onclick="document.getElementById('gambar').click()" id="drop-zone">
                                <div class="pc-upload-icon">&#8679;</div>
                                <p class="pc-upload-main">Klik untuk pilih foto</p>
                                <p class="pc-upload-sub">JPEG, JPG, PNG &middot; Maks. 2MB</p>
                            </div>

                            <!-- name="gambar[]" → array, bisa kirim banyak file -->
                            <input
                                type="file"
                                id="gambar"
                                name="gambar"
                                accept="image/jpeg,image/png,image/webp"
                                multiple
                                style="display:none">

                            <div class="pc-preview-grid" id="preview-grid">
                                <?php if (!empty($gambarValue)): ?>
                                    <div class="pc-preview-item" id="old-photo-preview">
                                        <img src="<?= BASEURL . "/public/assets/" . $gambarValue ?>" alt="Preview foto">
                                        <span class="pc-preview-badge">LAMA</span>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="pc-card-footer">
                    <a href="<?= BASEURL ?>/public/adminDashboard" class="pc-btn pc-btn-ghost">Batal</a>
                    <button type="submit" class="pc-btn pc-btn-primary" name="submit">Simpan Produk &rarr;</button>
                </div>

            </form>
        </div>

    </div>

    <script>
        // public/js/product-create.js

        let selectedFiles = [];

        // Tangkap perubahan input file
        document.getElementById('gambar').addEventListener('change', function() {
            handleFiles(this.files);
        });

        function handleFiles(newFiles) {
            const maxFiles = 4;
            const maxSize = 2 * 1024 * 1024; // 2MB
            const available = maxFiles - selectedFiles.length;

            Array.from(newFiles).slice(0, available).forEach(function(file) {
                if (file.size > maxSize) {
                    alert('File "' + file.name + '" terlalu besar. Maksimal 2MB per foto.');
                    return;
                }
                selectedFiles.push(file);
            });

            renderPreviews();
        }

        function renderPreviews() {
            var grid = document.getElementById('preview-grid');
            grid.innerHTML = '';

            selectedFiles.forEach(function(file, index) {
                var url = URL.createObjectURL(file);
                var item = document.createElement('div');
                item.className = 'pc-preview-item';

                var badge = index === 0 ? 'UTAMA' : '#' + (index + 1);
                item.innerHTML =
                    '<img src="' + url + '" alt="Preview foto ' + (index + 1) + '">' +
                    '<span class="pc-preview-badge">' + badge + '</span>' +
                    '<button type="button" class="pc-preview-remove" onclick="removeFile(' + index + ')" aria-label="Hapus foto">&times;</button>';

                grid.appendChild(item);
            });
        }

        function removeFile(index) {
            selectedFiles.splice(index, 1);
            renderPreviews();
        }

        // Drag & Drop
        var dropZone = document.getElementById('drop-zone');

        dropZone.addEventListener('dragover', function(e) {
            e.preventDefault();
            dropZone.style.borderColor = '#0a0a0a';
        });

        dropZone.addEventListener('dragleave', function() {
            dropZone.style.borderColor = '#c0c0bc';
        });

        dropZone.addEventListener('drop', function(e) {
            e.preventDefault();
            dropZone.style.borderColor = '#c0c0bc';
            handleFiles(e.dataTransfer.files);
        });
    </script>
</body>

</html>