
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
        <video src="<?= BASEURL ?>/public/assets/floating-shoe.gif" alt="" class="hero-img" autoplay muted loop>
        <div class="hero-pill bot">Gratis Ongkir</div>
      </div>
    </section>

    <section class="section">
      <div class="section-head">
        <h2>Kategori</h2>
      </div>
      <div class="cats">
        <div class="cat-card">
          <div class="cat-line"></div>
          <div class="cat-name">Sneakers</div>
        </div>
        <div class="cat-card">
          <div class="cat-line"></div>
          <div class="cat-name">Running</div>
        </div>
        <div class="cat-card">
          <div class="cat-line"></div>
          <div class="cat-name">Basketball</div>
        </div>
        <div class="cat-card">
          <div class="cat-line"></div>
          <div class="cat-name">Football</div>
        </div>
        <div class="cat-card">
          <div class="cat-line"></div>
          <div class="cat-name">Formal</div>
        </div>
        <div class="cat-card">
          <div class="cat-line"></div>
          <div class="cat-name">Casual</div>
        </div>
      </div>
    </section>

    <section class="section section-alt">
      <div class="section-head">
        <h2>Produk Terbaru</h2>
        <a href="#">Lihat Semua <i class="ti ti-arrow-right" aria-hidden="true"></i></a>
      </div>

      <div class="products">
        <?php foreach($data as $dt): ?>
        <div class="prod-card">
          <div class="prod-img"><img src="<?= BASEURL."/public/assets/".$dt['gambar'] ?>" alt=""><span class="prod-badge badge-new">Baru</span></div>
          <div class="prod-info">
            <p class="prod-name"><?= $dt['nama'] ?></p>
            <p class="prod-price"><?= "Rp".number_format($dt['harga'],0,",", ".") ?></p>
            <p class="prod-city"><i class="ti ti-map-pin" style="font-size:11px" aria-hidden="true"></i> Surabaya</p>
          </div>
        </div>
        <?php endforeach ?>
        
        
        </div>
      </div>
    </section>


    