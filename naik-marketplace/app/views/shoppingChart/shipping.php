<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500;700&display=swap');

    .shipping-page,
    .shipping-page * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'DM Sans', sans-serif;
    }

    .shipping-page {
        background: #f5f5f5;
        color: #111;
        padding: 40px 20px;
        min-height: 80vh;
    }

    .container {
        max-width: 720px;
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

    .step-done { color: #059669; font-weight: 700; }
    .step-active { color: #111; font-weight: 700; }

    .shipping-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 35px;
        margin-bottom: 20px;
    }

    .card-header {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 26px;
        letter-spacing: 1.5px;
        margin-bottom: 30px;
        color: #111;
    }

    /* Progress Tracker */
    .tracker {
        position: relative;
        padding-left: 30px;
    }

    .tracker::before {
        content: '';
        position: absolute;
        left: 10px;
        top: 10px;
        bottom: 10px;
        width: 2px;
        background: #e8e8e8;
    }

    .track-step {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        margin-bottom: 28px;
        position: relative;
    }

    .track-step:last-child {
        margin-bottom: 0;
    }

    .track-dot {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        background: #e8e8e8;
        border: 2px solid #ddd;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        color: #fff;
        position: absolute;
        left: -31px;
        top: 2px;
        transition: all 0.4s ease;
    }

    .track-dot.done {
        background: #059669;
        border-color: #059669;
    }

    .track-dot.active {
        background: #111;
        border-color: #111;
        box-shadow: 0 0 0 4px rgba(17,17,17,0.12);
    }

    .track-info {
        padding-left: 0;
    }

    .track-label {
        font-size: 14px;
        font-weight: 600;
        color: #111;
        margin-bottom: 3px;
        transition: color 0.3s;
    }

    .track-label.muted {
        font-weight: 400;
        color: #aaa;
    }

    .track-sub {
        font-size: 12px;
        color: #888;
    }

    .track-time {
        font-size: 11px;
        color: #bbb;
        margin-top: 3px;
        letter-spacing: 0.5px;
    }

    /* Info Box */
    .resi-box {
        background: #fafafa;
        border: 1px solid #ebebeb;
        border-radius: 6px;
        padding: 18px 20px;
        margin-top: 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
    }

    .resi-label {
        font-size: 11px;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #888;
        margin-bottom: 5px;
    }

    .resi-number {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 20px;
        letter-spacing: 2px;
    }

    .resi-courier {
        font-size: 12px;
        font-weight: 500;
        color: #444;
    }

    /* Tombol Selesai */
    .finish-btn {
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
        margin-top: 30px;
        transition: background 0.15s ease;
        display: none;
    }

    .finish-btn:hover { background: #333; }

    .progress-bar-wrap {
        width: 100%;
        height: 4px;
        background: #ebebeb;
        border-radius: 2px;
        margin-top: 25px;
        overflow: hidden;
    }

    .progress-bar-fill {
        height: 100%;
        background: #111;
        border-radius: 2px;
        width: 0%;
        transition: width 0.5s ease;
    }

    .status-text {
        font-size: 12px;
        color: #888;
        margin-top: 10px;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    @media (max-width: 576px) {
        .shipping-card { padding: 20px; }
        .resi-box { flex-direction: column; align-items: flex-start; }
    }
</style>

<div class="shipping-page">
    <div class="container">

        <div class="stepper">
            <span class="step-done">Pembayaran ✓</span>
            <span>→</span>
            <span class="step-active">Pengiriman</span>
        </div>

        <div class="shipping-card">
            <h2 class="card-header">Status Pengiriman</h2>

            <div class="tracker">
                <div class="track-step">
                    <div class="track-dot done" id="dot-0">✓</div>
                    <div class="track-info">
                        <p class="track-label" id="lbl-0">Pembayaran Dikonfirmasi</p>
                        <p class="track-sub">Pesanan diterima oleh sistem</p>
                        <p class="track-time" id="time-0"></p>
                    </div>
                </div>
                <div class="track-step">
                    <div class="track-dot" id="dot-1"></div>
                    <div class="track-info">
                        <p class="track-label muted" id="lbl-1">Sedang Dikemas</p>
                        <p class="track-sub">Produk sedang disiapkan oleh seller</p>
                        <p class="track-time" id="time-1"></p>
                    </div>
                </div>
                <div class="track-step">
                    <div class="track-dot" id="dot-2"></div>
                    <div class="track-info">
                        <p class="track-label muted" id="lbl-2">Diserahkan ke Kurir</p>
                        <p class="track-sub">JNE Express — Siap dijemput</p>
                        <p class="track-time" id="time-2"></p>
                    </div>
                </div>
                <div class="track-step">
                    <div class="track-dot" id="dot-3"></div>
                    <div class="track-info">
                        <p class="track-label muted" id="lbl-3">Dalam Perjalanan</p>
                        <p class="track-sub">Paket sedang dalam transit menuju kota tujuan</p>
                        <p class="track-time" id="time-3"></p>
                    </div>
                </div>
                <div class="track-step">
                    <div class="track-dot" id="dot-4"></div>
                    <div class="track-info">
                        <p class="track-label muted" id="lbl-4">Kurir Menuju Lokasi</p>
                        <p class="track-sub">Paket sedang diantar ke alamat Anda</p>
                        <p class="track-time" id="time-4"></p>
                    </div>
                </div>
                <div class="track-step">
                    <div class="track-dot" id="dot-5"></div>
                    <div class="track-info">
                        <p class="track-label muted" id="lbl-5">Paket Diterima</p>
                        <p class="track-sub">Terima kasih telah berbelanja di NAIK!</p>
                        <p class="track-time" id="time-5"></p>
                    </div>
                </div>
            </div>

            <div class="progress-bar-wrap">
                <div class="progress-bar-fill" id="progressBar"></div>
            </div>
            <p class="status-text" id="statusText">Memproses pesanan...</p>

            <div class="resi-box">
                <div>
                    <p class="resi-label">Nomor Resi</p>
                    <p class="resi-number">JNE<?= strtoupper(substr(md5(time()), 0, 10)) ?></p>
                </div>
                <div>
                    <p class="resi-label">Kurir</p>
                    <p class="resi-courier">JNE Express — Reguler (2-3 Hari)</p>
                </div>
                <div>
                    <p class="resi-label">Estimasi Tiba</p>
                    <p class="resi-courier"><?= date('d M Y', strtotime('+2 days')) ?> – <?= date('d M Y', strtotime('+3 days')) ?></p>
                </div>
            </div>

            <button class="finish-btn" id="finishBtn" onclick="finishOrder()">Selesai &amp; Kembali ke Beranda</button>
        </div>

    </div>
</div>

<script>
    // Steps: [delay in ms, progress%, statusText]
    const steps = [
        [0,    16,  'Pembayaran dikonfirmasi'],
        [2000, 32,  'Pesanan sedang dikemas...'],
        [4500, 50,  'Diserahkan ke kurir JNE'],
        [7500, 67,  'Paket dalam perjalanan...'],
        [10500, 84, 'Kurir sedang menuju lokasi Anda'],
        [13500, 100,'Paket telah diterima!'],
    ];

    function getTimeNow() {
        const now = new Date();
        return now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' }) + ' WIB';
    }

    steps.forEach((step, i) => {
        const [delay, progress, statusMsg] = step;
        setTimeout(() => {
            // Update progress bar
            document.getElementById('progressBar').style.width = progress + '%';
            document.getElementById('statusText').innerText = statusMsg;

            // Mark previous dots as done
            for (let j = 0; j < i; j++) {
                const dot = document.getElementById('dot-' + j);
                dot.classList.remove('active');
                dot.classList.add('done');
                dot.innerText = '✓';
                document.getElementById('lbl-' + j).classList.remove('muted');
            }

            // Mark current dot as active
            const currentDot = document.getElementById('dot-' + i);
            currentDot.classList.remove('done');
            currentDot.classList.add('active');
            currentDot.innerText = '';
            document.getElementById('lbl-' + i).classList.remove('muted');
            document.getElementById('time-' + i).innerText = getTimeNow();

            // Final step
            if (i === steps.length - 1) {
                currentDot.classList.remove('active');
                currentDot.classList.add('done');
                currentDot.innerText = '✓';
                document.getElementById('finishBtn').style.display = 'block';

                // Clear cart in session
                fetch('<?= BASEURL ?>/public/shoppingChart/clear', { method: 'POST' });
            }
        }, delay);
    });

    function finishOrder() {
        window.location.href = '<?= BASEURL ?>/public';
    }
</script>
