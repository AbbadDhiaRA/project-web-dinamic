<style>
body{
    background: #f5f7fb;
    font-family: Arial, sans-serif;
}

.body{
    display: flex;
    justify-content: center;
    padding: 30px;
}

table{
    width: 1000px;
    border-collapse: collapse;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
}

th{
    background: #111827;
    color: white;
    font-weight: 600;
    text-align: left;
    padding: 18px;
    text-align: center;
}

td{
    padding: 18px;
    border-bottom: 1px solid #e5e7eb;
    vertical-align: middle;
    text-align: justify;
}

tr:last-child td{
    border-bottom: none;
}

tr:hover{
    background: #f9fafb;
}

img{
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 12px;
    display: block;
}

.picture-frame{
    width: fit-content;
}

.price{
    font-weight: bold;
    color: #059669;
}

.action{
    display: flex;
    gap: 8px;
}

.btn-edit{
    text-decoration: none;
    background: #2563eb;
    color: white;
    padding: 8px 14px;
    border-radius: 8px;
    font-size: 14px;
}

.btn-delete{
    text-decoration: none;
    background: #dc2626;
    color: white;
    padding: 8px 14px;
    border-radius: 8px;
    font-size: 14px;
}

.btn-edit:hover,
.btn-delete:hover{
    opacity: .9;
}

.btn-tambah {
    text-decoration: none;
    background: #059669;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: opacity .2s;
}

.btn-tambah:hover {
    opacity: .85;
}

.dashboard-toolbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 1000px;
    max-width: 100%;
}

/* Responsive admin table */
@media (max-width: 1060px) {
    table { width: 100%; }
    .body { padding: 20px 12px; }
    .dashboard-toolbar { width: 100%; }
    .search-filter-bar { width: 100%; }
}

@media (max-width: 700px) {
    table { font-size: 12px; }
    td, th { padding: 10px 8px; }
    img { width: 55px; height: 55px; }
    .btn-edit, .btn-delete { padding: 6px 10px; font-size: 12px; }
    .btn-tambah { padding: 8px 14px; font-size: 13px; }
}
</style>

<div class="body">
  <div style="display: flex; flex-direction: column; gap: 15px; align-items: center; width: 100%; max-width: 1040px;">

    <div class="dashboard-toolbar">
      <a href="<?= BASEURL ?>/public/insert" class="btn-tambah">+ Tambah Produk</a>
      <span style="font-size: 13px; color: #6b7280; font-family: Arial, sans-serif;">Total: <?= count($data) ?> Produk</span>
    </div>

    <?php if (isset($_POST['keyword']) && !empty(trim($_POST['keyword']))): ?>
      <div style="font-family: Arial, sans-serif; font-size: 14px; color: #4b5563; padding: 10px 15px; background: #e5e7eb; border-radius: 8px; width: 100%; max-width: 1000px; box-sizing: border-box; display: flex; align-items: center; justify-content: space-between;">
        <span>Hasil pencarian untuk: <strong>"<?= htmlspecialchars($_POST['keyword']) ?>"</strong></span>
        <a href="<?= BASEURL ?>/public/AdminDashboard" style="color: #2563eb; text-decoration: none; font-weight: 600;">Lihat Semua &times;</a>
      </div>
    <?php endif; ?>
    
    <div style="width: 100%; overflow-x: auto;">
    <table cellpadding="15" border="1" style="min-width: 600px;">

      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Harga</th>
        <th colspan="2">Deskripsi</th>
        
      </tr>
      <?php if (empty($data)): ?>
        <tr>
          <td colspan="6" style="text-align: center; padding: 40px; color: #888884; font-size: 15px;">
            Tidak ada produk yang cocok dengan kata kunci pencarian.
          </td>
        </tr>
      <?php else: ?>
        <?php $i = 1;
        foreach ($data as $dt): ?>
          <tr>
            <td><?= $i ?></td>
            <td>
              <div class="picture-frame"><img src="<?= BASEURL . "/public/assets/" . $dt['gambar'] ?>" alt="gambar"></div>
            </td>
            <td><?= $dt['nama'] ?></td>
            <td><?= "Rp" . number_format($dt['harga'], 0, ",", ".") ?></td>
            <td><?= $dt['deskripsi'] ?></td>
            <td>
              <div class="action">
                <a href="<?= BASEURL ?>/public/insert/<?= $dt['id'] ?>" class="btn-edit">Edit</a>
                <a href="<?= BASEURL ?>/public/Delete/<?= $dt['id'] ?>" class="btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?');">Delete</a>
              </div>
            </td>
          </tr>
        <?php $i++;
        endforeach ?>
      <?php endif; ?>
    </table>
    </div>
  </div>

</div>