<style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap');
        :root {
            --primary-color: #111; /* Sleek Dark NAIK color */
            --primary-orange: #111; /* Sleek Accent */
            --text-main: #111;
            --text-sub: #666;
            --bg-body: #f5f5f5;
            --border-color: #ddd;
            --star-color: #FFC400;
        }

        .product-detail-page,
        .product-detail-page * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'DM Sans', sans-serif;
        }

        .product-detail-page {
            background-color: var(--bg-body);
            color: var(--text-main);
            padding: 40px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .product-detail-card {
            background: #ffffff;
            border-radius: 8px;
            border: 1px solid #e8e8e8;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 40px;
            margin-bottom: 40px;
        }

        /* Kolom Kiri: Galeri Foto */
        .gallery-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .main-image-wrapper {
            position: relative;
            background-color: #f9f9f9;
            border-radius: 4px;
            overflow: hidden;
            aspect-ratio: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e8e8e8;
        }

        .main-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .main-image-wrapper:hover img {
            transform: scale(1.04);
        }

        .info-container {
            display: flex;
            flex-direction: column;
        }

        .product-brand {
            font-family: 'Space Mono', monospace;
            color: #888;
            font-weight: 500;
            font-size: 11px;
            letter-spacing: 2px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .product-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 36px;
            font-weight: 400;
            line-height: 1.1;
            letter-spacing: 1px;
            margin-bottom: 15px;
            color: #111;
        }

        .stats-row {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 12px;
            color: var(--text-sub);
            margin-bottom: 25px;
            letter-spacing: 0.5px;
        }

        .rating-star {
            color: var(--star-color);
            font-weight: 600;
        }

        .price-section {
            background-color: #fafafa;
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 30px;
            border: 1px solid #ebebeb;
            border-left: 3px solid #111;
        }

        .price-discounted {
            font-size: 28px;
            font-weight: 700;
            color: #059669; /* Consistent Green price color */
        }

        /* Varian */
        .variant-section {
            margin-bottom: 30px;
        }

        .variant-title {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--text-sub);
            margin-bottom: 12px;
        }

        .size-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .size-option {
            border: 1px solid var(--border-color);
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            background: white;
            transition: all 0.15s ease;
            font-family: 'DM Sans', sans-serif;
        }

        .size-option:hover, .size-option.active {
            border-color: var(--primary-color);
            background-color: #111;
            color: #fff;
            font-weight: 600;
        }

        /* Description */
        .desc-section {
            margin-bottom: 30px;
            font-size: 13.5px;
            color: #555;
            line-height: 1.6;
        }

        .desc-title {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--text-sub);
            margin-bottom: 10px;
        }

        /* Tombol Transaksi */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: auto;
        }

        .btn {
            flex: 1;
            padding: 14px;
            border-radius: 4px;
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.15s ease;
            text-align: center;
            font-family: 'DM Sans', sans-serif;
        }

        .btn-cart {
            border: 1.5px solid #111;
            color: #111;
            background: white;
        }

        .btn-cart:hover {
            background-color: #f0f0f0;
        }

        .btn-buy {
            border: none;
            background-color: #111;
            color: white;
        }

        .btn-buy:hover {
            background-color: #333;
            box-shadow: 0 4px 12px rgba(17, 17, 17, 0.15);
        }

        /* ==========================================================================
           2. GRID KATALOG REKOMENDASI
           ========================================================================== */
        .section-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 24px;
            letter-spacing: 1.5px;
            margin-bottom: 25px;
            color: #111;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        .product-card {
            background: white;
            border-radius: 6px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
            transition: border-color 0.15s ease;
            border: 1px solid #ebebeb;
        }

        .product-card:hover {
            border-color: #111;
        }

        .card-img-wrapper {
            background-color: #f9f9f9;
            aspect-ratio: 1 / 1;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .35s;
        }

        .product-card:hover .card-img-wrapper img {
            transform: scale(1.05);
        }

        .card-info {
            padding: 14px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .badge-row {
            display: flex;
            gap: 5px;
            margin-bottom: 8px;
        }

        .card-badge {
            background: #111;
            color: #fff;
            font-size: 9px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
            padding: 2px 6px;
        }

        .card-badge.blue {
            background: #fff;
            color: #111;
            border: 1px solid #111;
        }

        .card-title {
            font-size: 13px;
            font-weight: 500;
            line-height: 1.4;
            height: 38px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            margin-bottom: 8px;
            color: #111;
        }

        .card-price {
            font-size: 13.5px;
            font-weight: 500;
            color: #111;
            margin-bottom: 8px;
        }

        .card-meta {
            margin-top: auto;
            display: flex;
            flex-direction: column;
            gap: 4px;
            font-size: 11px;
            color: var(--text-sub);
            border-top: 1px solid #f5f5f5;
            padding-top: 10px;
        }

        .card-meta-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Toast Styling */
        .toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background: #111;
            color: #fff;
            padding: 12px 28px;
            border-radius: 4px;
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0,0,0,0.25);
        }

        .toast.show {
            opacity: 1;
        }

        /* Media Query Responsive untuk Mobile Screen */
        @media (max-width: 992px) {
            .product-grid { grid-template-columns: repeat(3, 1fr); }
        }

        @media (max-width: 768px) {
            .product-detail-card {
                grid-template-columns: 1fr;
                gap: 25px;
                padding: 20px;
            }
            .product-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 Kolom di HP */
                gap: 12px;
            }
            .price-discounted { font-size: 24px; }
            .product-title { font-size: 28px; }
        }
    </style>

<div class="product-detail-page">
<div class="container">

    <section class="product-detail-card">
        
        <div class="gallery-container">
            <div class="main-image-wrapper">
                <img id="mainImg" src="<?= BASEURL . "/public/assets/" . $data['produk']['gambar'] ?>" alt="<?= htmlspecialchars($data['produk']['nama']) ?>">
            </div>
        </div>

        <div class="info-container">
            <span class="product-brand" id="prodBrand">NAIK FOOTWEAR</span>
            <h1 class="product-title" id="prodTitle"><?= htmlspecialchars($data['produk']['nama']) ?></h1>
            
            <div class="stats-row">
                <span class="rating-star">⭐ 4.9</span>
                <span>•</span>
                <span>150+ Terjual</span>
                <span>•</span>
                <span>99% Pembeli Puas</span>
            </div>

            <div class="price-section">
                <div class="price-discounted" id="prodDiscPrice"><?= "Rp " . number_format($data['produk']['harga'], 0, ",", ".") ?></div>
            </div>

            <div class="desc-section">
                <div class="desc-title">Deskripsi Produk:</div>
                <p><?= nl2br(htmlspecialchars($data['produk']['deskripsi'])) ?></p>
            </div>

            <div class="variant-section">
                <div class="variant-title">Pilih Ukuran Sepatu (EU):</div>
                <div class="size-grid">
                    <button class="size-option" onclick="selectSize(this, '39')">39</button>
                    <button class="size-option" onclick="selectSize(this, '40')">40</button>
                    <button class="size-option active" onclick="selectSize(this, '41')">41</button>
                    <button class="size-option" onclick="selectSize(this, '42')">42</button>
                    <button class="size-option" onclick="selectSize(this, '43')">43</button>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn btn-cart" onclick="addToCart(false)">+ Keranjang</button>
                <button class="btn btn-buy" onclick="addToCart(true)">Beli Sekarang</button>
            </div>
        </div>
    </section>


    <h2 class="section-title">Rekomendasi Katalog Untukmu</h2>
    
    <div class="product-grid">
        <?php foreach ($data['rekomendasi'] as $rekom): ?>
            <a href="<?= BASEURL ?>/public/DetailProduk/<?= $rekom['id'] ?>" class="product-card" style="text-decoration: none; color: inherit;">
                <div class="card-img-wrapper">
                    <img src="<?= BASEURL . "/public/assets/" . $rekom['gambar'] ?>" alt="<?= htmlspecialchars($rekom['nama']) ?>">
                </div>
                <div class="card-info">
                    <div class="badge-row">
                        <span class="card-badge">Baru</span>
                        <span class="card-badge blue">Free Ongkir</span>
                    </div>
                    <h3 class="card-title"><?= htmlspecialchars($rekom['nama']) ?></h3>
                    <div class="card-price"><?= "Rp " . number_format($rekom['harga'], 0, ",", ".") ?></div>
                    <div class="card-meta">
                        <div class="card-meta-row"><span>⭐ 4.9 | 150+ terjual</span></div>
                        <div class="card-meta-row"><span>📍 Surabaya</span></div>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
</div>

<div class="toast" id="detailToast"></div>
<script>
    let selectedSize = '41';

    function selectSize(button, size) {
        let sizes = document.querySelectorAll('.size-option');
        sizes.forEach(s => s.classList.remove('active'));
        button.classList.add('active');
        selectedSize = size;
    }

    function addToCart(redirectAfter = false) {
        const productId = '<?= $data['produk']['id'] ?>';
        
        // Prepare payload
        const formData = new FormData();
        formData.append('product_id', productId);
        formData.append('size', selectedSize);
        formData.append('qty', '1');

        fetch('<?= BASEURL ?>/public/shoppingChart/add', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                if (redirectAfter) {
                    window.location.href = '<?= BASEURL ?>/public/shoppingChart';
                } else {
                    showToast('Produk ditambahkan ke keranjang!');
                }
            } else {
                showToast('Gagal menambahkan produk ke keranjang.');
            }
        })
        .catch(err => {
            console.error(err);
            showToast('Terjadi kesalahan sistem.');
        });
    }

    function showToast(message) {
        const toast = document.getElementById('detailToast');
        toast.innerText = message;
        toast.classList.add('show');
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }
</script>
