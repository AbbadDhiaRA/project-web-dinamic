<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Sepatu Kekinian - Marketplace Style</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #03AC0E; /* Hijau Khas Tokopedia UI */
            --primary-orange: #EE4D2D; /* Oranye Khas Shopee UI untuk Diskon */
            --text-main: #1A1A1A;
            --text-sub: #6D6D6D;
            --bg-body: #F4F6F9;
            --border-color: #E5E7EB;
            --star-color: #FFC400;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: var(--bg-body);
            color: var(--text-main);
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* ==========================================================================
           1. LAYOUT DETAIL PRODUK UTAMA (SHOWCASE INTERAKTIF)
           ========================================================================== */
        .product-detail-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            padding: 30px;
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
            background-color: #F8FAFC;
            border-radius: 12px;
            overflow: hidden;
            aspect-ratio: 16 / 10;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #F1F5F9;
        }

        .main-image-wrapper img {
            width: 80%;
            height: auto;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .main-image-wrapper:hover img {
            transform: scale(1.06);
        }

        .badge-diskon {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--primary-orange);
            color: white;
            font-weight: 700;
            font-size: 12px;
            padding: 4px 10px;
            border-radius: 6px;
            z-index: 2;
        }

        .thumbnail-list {
            display: flex;
            gap: 12px;
        }

        .thumb {
            width: 85px;
            height: 65px;
            background-color: #F8FAFC;
            border: 2px solid transparent;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
            padding: 5px;
        }

        .thumb img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .thumb.active, .thumb:hover {
            border-color: var(--primary-color);
            background-color: #fff;
        }

        /* Kolom Kanan: Detail Informasi */
        .info-container {
            display: flex;
            flex-direction: column;
        }

        .product-brand {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
            text-transform: uppercase;
        }

        .product-title {
            font-size: 24px;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 12px;
        }

        .stats-row {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            color: var(--text-sub);
            margin-bottom: 20px;
        }

        .rating-star {
            color: var(--star-color);
            font-weight: 600;
        }

        .price-section {
            background-color: #F6FBF7;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid var(--primary-color);
        }

        .price-original {
            font-size: 14px;
            color: var(--text-sub);
            text-decoration: line-through;
            margin-bottom: 4px;
        }

        .price-discounted {
            font-size: 30px;
            font-weight: 700;
            color: var(--primary-orange);
        }

        /* Varian */
        .variant-section {
            margin-bottom: 25px;
        }

        .variant-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-sub);
            margin-bottom: 10px;
        }

        .size-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .size-option {
            border: 1px solid var(--border-color);
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            background: white;
            transition: all 0.2s ease;
        }

        .size-option:hover, .size-option.active {
            border-color: var(--primary-color);
            background-color: #F0FAF2;
            color: var(--primary-color);
            font-weight: 600;
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
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
        }

        .btn-cart {
            border: 1.5px solid var(--primary-color);
            color: var(--primary-color);
            background: white;
        }

        .btn-cart:hover {
            background-color: #F0FAF2;
        }

        .btn-buy {
            border: none;
            background-color: var(--primary-color);
            color: white;
        }

        .btn-buy:hover {
            background-color: #028B0B;
            box-shadow: 0 4px 12px rgba(3, 172, 14, 0.2);
        }

        /* ==========================================================================
           2. GRID KATALOG REKOMENDASI (4 KOLOM ALA SHOPEE / TOKOPEDIA)
           ========================================================================== */
        .section-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .product-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 2px 6px rgba(0,0,0,0.015);
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.1), box-shadow 0.3s ease;
            border: 1px solid #F1F5F9;
        }

        .product-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
            border-color: #E2E8F0;
        }

        .card-img-wrapper {
            background-color: #F8FAFC;
            aspect-ratio: 1 / 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 15px;
        }

        .card-img-wrapper img {
            max-width: 95%;
            max-height: 95%;
            object-fit: contain;
        }

        .card-info {
            padding: 12px;
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
            background: #FFF0ED;
            color: var(--primary-orange);
            font-size: 10px;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 4px;
        }

        .card-badge.blue {
            background: #EBF5FF;
            color: #007AFF;
        }

        .card-title {
            font-size: 14px;
            font-weight: 500;
            line-height: 1.4;
            height: 40px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            margin-bottom: 8px;
            color: #2D3748;
        }

        .card-price {
            font-size: 16px;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 8px;
        }

        .card-meta {
            margin-top: auto;
            display: flex;
            flex-direction: column;
            gap: 4px;
            font-size: 12px;
            color: var(--text-sub);
            border-top: 1px dashed var(--border-color);
            padding-top: 8px;
        }

        .card-meta-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Media Query Responsive untuk Mobile Screen */
        @media (max-width: 992px) {
            .product-grid { grid-template-columns: repeat(3, 1fr); }
        }

        @media (max-width: 768px) {
            .product-detail-card {
                grid-template-columns: 1fr;
                gap: 25px;
                padding: 16px;
            }
            .product-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 Kolom di HP */
                gap: 12px;
            }
            .price-discounted { font-size: 26px; }
        }
    </style>
</head>
<body>

<div class="container">

    <section class="product-detail-card">
        
        <div class="gallery-container">
            <div class="main-image-wrapper">
                <span class="badge-diskon" id="prodDiscountBadge">Diskon 35%</span>
                <img id="mainImg" src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?auto=format&fit=crop&w=600&q=80" alt="NAIK Sporty">
            </div>
            
            <div class="thumbnail-list">
                <div class="thumb active" onclick="changeProduct(this, 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?auto=format&fit=crop&w=600&q=80', 'NAIK Zoom Air Heritage Modern - Slate Teal White', 'Rp 899.000', 'Rp 1.399.000', 'NAIK FOOTWEAR', 'Diskon 35%')">
                    <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?auto=format&fit=crop&w=120&q=80" alt="Thumb 1">
                </div>
                <div class="thumb" onclick="changeProduct(this, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=600&q=80', 'Nike Tatum 1 Basketball Elite - Beige Aqua Special Edition', 'Rp 1.849.000', 'Rp 2.199.000', 'NIKE BASKETBALL', 'Diskon 15%')">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=120&q=80" alt="Thumb 2">
                </div>
                <div class="thumb" onclick="changeProduct(this, 'https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&fit=crop&w=600&q=80', 'Aerostreet Hoops Sepatu Sneakers Lokal - Black White Stitch', 'Rp 179.000', 'Rp 350.000', 'AEROSTREET LOKAL', 'Diskon 48%')">
                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&fit=crop&w=120&q=80" alt="Thumb 3">
                </div>
                <div class="thumb" onclick="changeProduct(this, 'https://images.unsplash.com/photo-1491553895911-0055eca6402d?auto=format&fit=crop&w=600&q=80', 'Adidas Samba Classic OG Leather Minimalist - White Black Gum Sole', 'Rp 2.200.000', '', 'ADIDAS ORIGINALS', 'Trending')">
                    <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?auto=format&fit=crop&w=120&q=80" alt="Thumb 4">
                </div>
            </div>
        </div>

        <div class="info-container">
            <span class="product-brand" id="prodBrand">NAIK FOOTWEAR</span>
            <h1 class="product-title" id="prodTitle">NAIK Zoom Air Heritage Modern - Slate Teal White</h1>
            
            <div class="stats-row">
                <span class="rating-star">⭐ 4.9</span>
                <span>•</span>
                <span>4.8rb Terjual</span>
                <span>•</span>
                <span>99% Diskusi Puas</span>
            </div>

            <div class="price-section">
                <div class="price-original" id="prodOrigPrice">Rp 1.399.000</div>
                <div class="price-discounted" id="prodDiscPrice">Rp 899.000</div>
            </div>

            <div class="variant-section">
                <div class="variant-title">Pilih Ukuran Sepatu (EU):</div>
                <div class="size-grid">
                    <button class="size-option" onclick="selectSize(this)">39</button>
                    <button class="size-option" onclick="selectSize(this)">40</button>
                    <button class="size-option active" onclick="selectSize(this)">41</button>
                    <button class="size-option" onclick="selectSize(this)">42</button>
                    <button class="size-option" onclick="selectSize(this)">43</button>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn btn-cart">+ Keranjang</button>
                <button class="btn btn-buy">Beli Sekarang</button>
            </div>
        </div>
    </section>


    <h2 class="section-title">Rekomendasi Katalog Untukmu</h2>
    
    <div class="product-grid">
        
        <div class="product-card">
            <div class="card-img-wrapper">
                <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?auto=format&fit=crop&w=300&q=80" alt="NAIK Sporty">
            </div>
            <div class="card-info">
                <div class="badge-row">
                    <span class="card-badge">Diskon 35%</span>
                    <span class="card-badge blue">Free Ongkir</span>
                </div>
                <h3 class="card-title">NAIK Zoom Air Heritage Modern - Slate Grey Teal Premium</h3>
                <div class="card-price">Rp 899.000</div>
                <div class="card-meta">
                    <div class="card-meta-row"><span>⭐ 4.9 | 4.8rb+ terjual</span></div>
                    <div class="card-meta-row"><span>📍 Jakarta Barat</span></div>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="card-img-wrapper">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=300&q=80" alt="Nike Tatum">
            </div>
            <div class="card-info">
                <div class="badge-row">
                    <span class="card-badge">Eksklusif</span>
                </div>
                <h3 class="card-title">Nike Tatum 1 Basketball Special Series - Beige Aqua M-Logo</h3>
                <div class="card-price">Rp 1.849.000</div>
                <div class="card-meta">
                    <div class="card-meta-row"><span>⭐ 4.8 | 320 terjual</span></div>
                    <div class="card-meta-row"><span>📍 Jakarta Selatan</span></div>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="card-img-wrapper">
                <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&fit=crop&w=300&q=80" alt="Aerostreet Black White">
            </div>
            <div class="card-info">
                <div class="badge-row">
                    <span class="card-badge">Lokal Pride</span>
                    <span class="card-badge" style="background:#E6F9EE; color:#03AC0E;">Grosir</span>
                </div>
                <h3 class="card-title">Aerostreet Hoops Sepatu Sneakers Lokal Casual - Black White Stitch</h3>
                <div class="card-price">Rp 179.000</div>
                <div class="card-meta">
                    <div class="card-meta-row"><span>⭐ 4.7 | 10rb+ terjual</span></div>
                    <div class="card-meta-row"><span>📍 Kab. Klaten</span></div>
                </div>
            </div>
        </div>

        <div class="product-card">
            <div class="card-img-wrapper">
                <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?auto=format&fit=crop&w=300&q=80" alt="Adidas Samba">
            </div>
            <div class="card-info">
                <div class="badge-row">
                    <span class="card-badge" style="background:#EBF5FF; color:#007AFF;">Trending</span>
                </div>
                <h3 class="card-title">Adidas Samba Classic OG Leather Minimalist - White Black Gum Sole</h3>
                <div class="card-price">Rp 2.200.000</div>
                <div class="card-meta">
                    <div class="card-meta-row"><span>⭐ 5.0 | 1.2rb+ terjual</span></div>
                    <div class="card-meta-row"><span>📍 Jakarta Pusat</span></div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function changeProduct(element, imageUrl, title, discPrice, origPrice, brand, badgeText) {
        // Ganti elemen utama
        document.getElementById('mainImg').src = imageUrl;
        document.getElementById('prodTitle').innerText = title;
        document.getElementById('prodDiscPrice').innerText = discPrice;
        document.getElementById('prodBrand').innerText = brand;
        document.getElementById('prodDiscountBadge').innerText = badgeText;
        
        let origPriceEl = document.getElementById('prodOrigPrice');
        if(origPrice) {
            origPriceEl.innerText = origPrice;
            origPriceEl.style.display = 'block';
        } else {
            origPriceEl.style.display = 'none';
        }
        
        // Atur status aktif pada thumbnail
        let thumbnails = document.querySelectorAll('.thumb');
        thumbnails.forEach(thumb => thumb.classList.remove('active'));
        element.classList.add('active');
    }

    function selectSize(button) {
        let sizes = document.querySelectorAll('.size-option');
        sizes.forEach(size => size.classList.remove('active'));
        button.classList.add('active');
    }
</script>

</body>
</html>