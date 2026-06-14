<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;700&display=swap');

    .payment-page,
    .payment-page * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'DM Sans', sans-serif;
    }

    .payment-page {
        background: #f5f5f5;
        color: #111;
        padding: 40px 20px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    .stepper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        margin-bottom: 30px;
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #888;
    }

    .step-active {
        color: #111;
        font-weight: 700;
    }

    .payment-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 30px;
        margin-bottom: 20px;
    }

    .section-title {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 22px;
        letter-spacing: 1px;
        margin-bottom: 20px;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
        color: #111;
    }

    .address-box {
        background: #fafafa;
        border: 1px dashed #ccc;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 25px;
        font-size: 13.5px;
        line-height: 1.5;
    }

    .address-title {
        font-weight: 700;
        margin-bottom: 5px;
    }

    .item-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-bottom: 25px;
    }

    .checkout-item {
        display: flex;
        align-items: center;
        gap: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
    }

    .checkout-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .checkout-item img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 4px;
        border: 1px solid #eee;
    }

    .item-info {
        flex: 1;
    }

    .item-name {
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 4px;
    }

    .item-meta {
        font-size: 11px;
        color: #666;
    }

    .item-price {
        font-size: 14px;
        font-weight: 700;
    }

    .method-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-bottom: 25px;
    }

    .method-option {
        border: 1.5px solid #ddd;
        padding: 15px;
        border-radius: 6px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.15s ease;
    }

    .method-option input {
        accent-color: #111;
        cursor: pointer;
    }

    .method-option:hover, .method-option.active {
        border-color: #111;
        background: #fafafa;
    }

    .method-option.active {
        background: #fcfcfc;
    }

    .method-label {
        font-size: 13.5px;
        font-weight: 500;
    }

    .billing-row {
        display: flex;
        justify-content: space-between;
        font-size: 13.5px;
        margin-bottom: 10px;
    }

    .billing-label {
        color: #666;
    }

    .billing-val {
        font-weight: 500;
    }

    .billing-total {
        font-size: 18px;
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 1px;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #eee;
    }

    .pay-btn {
        width: 100%;
        padding: 15px;
        background: #111;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
        cursor: pointer;
        margin-top: 25px;
        transition: background 0.15s ease;
    }

    .pay-btn:hover {
        background: #333;
    }

    /* Overlay Simulation */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.95);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    .overlay.show {
        opacity: 1;
        pointer-events: auto;
    }

    .spinner {
        width: 50px;
        height: 50px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #111;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-bottom: 25px;
    }

    .success-icon {
        font-size: 60px;
        color: #059669;
        margin-bottom: 20px;
        display: none;
    }

    .status-msg {
        font-size: 16px;
        font-weight: 500;
        color: #111;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @media (max-width: 576px) {
        .method-grid {
            grid-template-columns: 1fr;
        }
        .payment-card {
            padding: 20px;
        }
    }
</style>

<?php
$totalPrice = 0;
foreach ($data['cart'] as $item) {
    $totalPrice += $item['price'] * $item['qty'];
}
?>

<div class="payment-page">
    <div class="container">
        
        <div class="stepper">
            <span>Keranjang</span>
            <span>&rarr;</span>
            <span class="step-active">Pembayaran</span>
            <span>&rarr;</span>
            <span>Pengiriman</span>
        </div>

        <div class="payment-card">
            <h2 class="section-title">Alamat Pengiriman</h2>
            <div class="address-box">
                <p class="address-title">John Doe (08123456789)</p>
                <p>Jalan Dharmahusada Indah No. 12, Mulyorejo</p>
                <p>Surabaya, Jawa Timur - 60115</p>
            </div>

            <h2 class="section-title">Detail Pesanan</h2>
            <div class="item-list">
                <?php foreach ($data['cart'] as $item): ?>
                    <div class="checkout-item">
                        <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
                        <div class="item-info">
                            <p class="item-name"><?= htmlspecialchars($item['name']) ?></p>
                            <p class="item-meta"><?= htmlspecialchars($item['variant']) ?> &middot; Qty: <?= $item['qty'] ?></p>
                        </div>
                        <p class="item-price"><?= "Rp " . number_format($item['price'] * $item['qty'], 0, ",", ".") ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <h2 class="section-title">Metode Pembayaran</h2>
            <div class="method-grid">
                <div class="method-option active" onclick="selectMethod(this)">
                    <input type="radio" name="payment_method" value="bca" checked>
                    <span class="method-label">Transfer Bank BCA</span>
                </div>
                <div class="method-option" onclick="selectMethod(this)">
                    <input type="radio" name="payment_method" value="gopay">
                    <span class="method-label">GoPay / QRIS</span>
                </div>
                <div class="method-option" onclick="selectMethod(this)">
                    <input type="radio" name="payment_method" value="mandiri">
                    <span class="method-label">Transfer Bank Mandiri</span>
                </div>
                <div class="method-option" onclick="selectMethod(this)">
                    <input type="radio" name="payment_method" value="ovo">
                    <span class="method-label">OVO E-Wallet</span>
                </div>
            </div>

            <h2 class="section-title">Ringkasan Pembayaran</h2>
            <div class="billing-row">
                <span class="billing-label">Total Belanja</span>
                <span class="billing-val"><?= "Rp " . number_format($totalPrice, 0, ",", ".") ?></span>
            </div>
            <div class="billing-row">
                <span class="billing-label">Ongkos Kirim</span>
                <span class="billing-val">Free Ongkir</span>
            </div>
            <div class="billing-row billing-total">
                <span class="billing-label">Total Pembayaran</span>
                <span class="billing-val"><?= "Rp " . number_format($totalPrice, 0, ",", ".") ?></span>
            </div>

            <button class="pay-btn" onclick="startPayment()">Bayar Sekarang &rarr;</button>
        </div>

    </div>
</div>

<div class="overlay" id="paymentOverlay">
    <div class="spinner" id="paymentSpinner"></div>
    <div class="success-icon" id="paymentSuccess">&#10004;</div>
    <p class="status-msg" id="paymentStatus">Menghubungkan ke Merchant...</p>
</div>

<script>
    function selectMethod(el) {
        document.querySelectorAll('.method-option').forEach(opt => opt.classList.remove('active'));
        el.classList.add('active');
        el.querySelector('input').checked = true;
    }

    function startPayment() {
        const overlay = document.getElementById('paymentOverlay');
        const statusMsg = document.getElementById('paymentStatus');
        const spinner = document.getElementById('paymentSpinner');
        const successIcon = document.getElementById('paymentSuccess');

        overlay.classList.add('show');

        // Step 1: Connect
        setTimeout(() => {
            statusMsg.innerText = "Memverifikasi Saldo Pembayaran...";
        }, 1200);

        // Step 2: Confirm
        setTimeout(() => {
            statusMsg.innerText = "Menunggu Konfirmasi Bank...";
        }, 2400);

        // Step 3: Success
        setTimeout(() => {
            spinner.style.display = "none";
            successIcon.style.display = "block";
            statusMsg.innerText = "Pembayaran Berhasil!";
        }, 3600);

        // Redirect
        setTimeout(() => {
            window.location.href = "<?= BASEURL ?>/public/shoppingChart/shipping";
        }, 5000);
    }
</script>
