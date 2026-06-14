
    <!-- HERO SECTION(TAMPILAN VISUAL UTAMA) -->
    <section class="hero">
      <div class="hero-left">
        <p class="hero-tag">Marketplace Sepatu No.1 Indonesia</p>
        <h1 class="hero-title">Temukan<br>Sepatu <span>Impianmu.</span></h1>
        <p class="hero-desc">Jual beli sepatu baru dan bekas dengan harga terbaik. Ribuan pilihan dari seluruh Indonesia, langsung dari tangan pemiliknya.</p>
        <div class="hero-cta">
          <button class="btn-solid">Belanja Sekarang</button>
        </div>
      </div>
      <div class="hero-right">
        <div class="hero-pill top">500+ Produk</div>
        <video src="<?= BASEURL ?>/public/assets/floating-shoe.gif" class="hero-img" autoplay muted loop></video>
        <div class="hero-pill bot">Gratis Ongkir</div>
      </div>
    </section>


    <section class="section section-alt">
      <div class="section-head">
        <?php if (isset($_POST['keyword']) && !empty(trim($_POST['keyword']))): ?>
          <h2>Hasil Pencarian: "<?= htmlspecialchars($_POST['keyword']) ?>"</h2>
        <?php else: ?>
          <h2>Produk Terbaru</h2>
          <a href="#">Lihat Semua <i class="ti ti-arrow-right" aria-hidden="true"></i></a>
        <?php endif; ?>
      </div>

      <div class="products">
        <?php if (empty($data)): ?>
          <div class="no-products" style="grid-column: 1 / -1; text-align: center; padding: 40px 20px; font-family: 'DM Sans', sans-serif;">
            <i class="ti ti-search" style="font-size: 3rem; color: #c0c0bc; display: block; margin-bottom: 15px;"></i>
            <p style="font-size: 1.1rem; font-weight: 500; color: #0a0a0a; margin-bottom: 8px;">Tidak ada produk yang cocok</p>
            <p style="font-size: 0.9rem; color: #888884;">Coba gunakan kata kunci lain atau periksa ejaan Anda.</p>
          </div>
        <?php else: ?>
          <?php foreach($data as $dt): ?>
          <a href="<?= BASEURL ?>/public/DetailProduk/<?= $dt['id'] ?>" class="prod-card" style="text-decoration: none; color: inherit;">
            <div class="prod-img"><img src="<?= BASEURL."/public/assets/".$dt['gambar'] ?>" alt=""><span class="prod-badge badge-new">Baru</span></div>
            <div class="prod-info">
              <p class="prod-name"><?= $dt['nama'] ?></p>
              <p class="prod-price"><?= "Rp".number_format($dt['harga'],0,",", ".") ?></p>
              <p class="prod-city"><i class="ti ti-map-pin" style="font-size:11px" aria-hidden="true"></i> Surabaya</p>
            </div>
          </a>
          <?php endforeach ?>
        <?php endif; ?>
      </div>
    </section>


    
