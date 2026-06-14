<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap');

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .cart-page {
    font-family: 'DM Sans', sans-serif;
    background: #f5f5f5;
    color: #111;
    min-height: 600px;
  }

  .cart-nav {
    background: #fff;
    border-bottom: 1px solid #e0e0e0;
    padding: 0 28px;
    height: 56px;
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .cart-nav-logo {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 24px;
    letter-spacing: 2px;
    text-decoration: none;
    color: #111;
  }

  .cart-nav-logo em {
    background: #111;
    color: #fff;
    padding: 0 5px;
    font-style: normal;
  }

  .cart-nav-title {
    font-size: 13px;
    color: #888;
    margin-left: 4px;
  }

  .cart-body {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 16px;
    padding: 20px 28px;
    align-items: start;
  }



  .cart-header {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    padding: 14px 20px;
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
  }

  .cart-header-check {
    width: 16px;
    height: 16px;
    accent-color: #111;
    cursor: pointer;
  }

  .cart-header-label {
    font-size: 13px;
    font-weight: 500;
    flex: 1;
  }

  .cart-header-del {
    font-size: 12px;
    color: #888;
    cursor: pointer;
    border: none;
    background: none;
    font-family: 'DM Sans', sans-serif;
  }

  .cart-header-del:hover {
    color: #e00;
  }

  .seller-group {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    margin-bottom: 12px;
    overflow: hidden;
  }

  .seller-row {
    padding: 12px 20px;
    border-bottom: 1px solid #f0f0f0;
    display: flex;
    align-items: center;
    gap: 10px;
    background: #fafafa;
  }

  .seller-name {
    font-size: 12px;
    font-weight: 500;
    color: #444;
  }

  .item-row {
    padding: 16px 20px;
    border-bottom: 1px solid #f5f5f5;
    display: flex;
    align-items: center;
    gap: 14px;
  }

  .item-row:last-child {
    border-bottom: none;
  }

  .item-check {
    width: 16px;
    height: 16px;
    accent-color: #111;
    cursor: pointer;
    flex-shrink: 0;
  }

  .item-img {
    width: 72px;
    height: 72px;
    object-fit: cover;
    border-radius: 4px;
    border: 1px solid #e8e8e8;
    flex-shrink: 0;
  }

  .item-detail {
    flex: 1;
    min-width: 0;
  }

  .item-name {
    font-size: 13px;
    font-weight: 500;
    margin-bottom: 3px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .item-variant {
    font-size: 11px;
    color: #888;
    margin-bottom: 6px;
  }

  .item-cond {
    font-size: 10px;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 2px 7px;
    border-radius: 2px;
    margin-right: 6px;
  }

  .cond-new {
    background: #111;
    color: #fff;
  }

  .cond-used {
    background: #fff;
    color: #111;
    border: 1px solid #111;
  }

  .item-price-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 8px;
  }

  .item-price {
    font-size: 14px;
    font-weight: 500;
  }

  .item-price.struck {
    font-size: 11px;
    color: #bbb;
    text-decoration: line-through;
    margin-right: 6px;
  }

  .qty-control {
    display: flex;
    align-items: center;
    gap: 0;
    border: 1px solid #ddd;
    border-radius: 4px;
    overflow: hidden;
  }

  .qty-btn {
    width: 30px;
    height: 30px;
    border: none;
    background: #fff;
    cursor: pointer;
    font-size: 16px;
    color: #111;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background .12s;
  }

  .qty-btn:hover {
    background: #f0f0f0;
  }

  .qty-btn:disabled {
    color: #ccc;
    cursor: default;
  }

  .qty-val {
    width: 36px;
    height: 30px;
    text-align: center;
    font-size: 13px;
    font-weight: 500;
    border: none;
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    outline: none;
    font-family: 'DM Sans', sans-serif;
    background: #fff;
    color: #111;
  }

  .item-del-btn {
    border: none;
    background: none;
    cursor: pointer;
    color: #ccc;
    padding: 4px;
    border-radius: 4px;
    transition: color .12s;
  }

  .item-del-btn:hover {
    color: #e00;
  }



  .promo-box {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    padding: 16px 20px;
    margin-bottom: 12px;
  }

  .promo-title {
    font-size: 12px;
    font-weight: 500;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .promo-input-row {
    display: flex;
    gap: 8px;
  }

  .promo-input {
    flex: 1;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 12px;
    font-family: 'DM Sans', sans-serif;
    outline: none;
    color: #111;
    background: #fff;
  }

  .promo-input:focus {
    border-color: #111;
  }

  .promo-apply-btn {
    padding: 8px 14px;
    background: #111;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 12px;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
  }

  .promo-applied {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #f0f7f0;
    border: 1px solid #c8e6c9;
    border-radius: 4px;
    padding: 8px 12px;
    margin-top: 8px;
  }

  .promo-applied-txt {
    font-size: 12px;
    color: #2e7d32;
    font-weight: 500;
  }

  .promo-remove {
    border: none;
    background: none;
    cursor: pointer;
    color: #888;
    font-size: 16px;
  }

  .summary-box {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    padding: 20px;
  }

  .summary-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 18px;
    letter-spacing: 1px;
    margin-bottom: 16px;
  }

  .sum-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
    font-size: 13px;
  }

  .sum-label {
    color: #666;
  }

  .sum-val {
    font-weight: 500;
  }

  .sum-discount {
    color: #27ae60;
  }

  .sum-divider {
    border: none;
    border-top: 1px solid #f0f0f0;
    margin: 14px 0;
  }

  .sum-total-label {
    font-size: 14px;
    font-weight: 500;
  }

  .sum-total-val {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 22px;
    letter-spacing: 1px;
  }

  .sum-items-count {
    font-size: 11px;
    color: #888;
    margin-bottom: 16px;
  }

  .checkout-btn {
    width: 100%;
    padding: 14px;
    background: #111;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    transition: background .15s;
  }

  .checkout-btn:hover {
    background: #333;
  }

  .checkout-btn:disabled {
    background: #ccc;
    cursor: default;
  }

  .sum-note {
    font-size: 11px;
    color: #888;
    text-align: center;
    margin-top: 10px;
  }

  .empty-state {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 60px 20px;
    text-align: center;
    grid-column: 1/-1;
  }

  .empty-icon {
    font-size: 48px;
    color: #ddd;
    margin-bottom: 16px;
  }

  .empty-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 24px;
    letter-spacing: 1px;
    margin-bottom: 8px;
  }

  .empty-sub {
    font-size: 13px;
    color: #888;
    margin-bottom: 24px;
  }

  .empty-btn {
    padding: 12px 28px;
    background: #111;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 12px;
    letter-spacing: 2px;
    text-transform: uppercase;
    cursor: pointer;
    font-family: 'DM Sans', sans-serif;
  }

  .toast.show {
    opacity: 1;
  }

  @media (max-width: 900px) {
    .cart-body {
      grid-template-columns: 1fr;
      padding: 15px;
    }
    .cart-right {
      position: sticky;
      bottom: 0;
      z-index: 10;
      background: #f5f5f5;
      padding-top: 10px;
      border-top: 1px solid #ddd;
    }
    .summary-box {
      border-radius: 0;
      box-shadow: 0 -4px 10px rgba(0,0,0,0.05);
    }
  }

  @media (max-width: 560px) {
    .item-row {
      flex-direction: column;
      align-items: flex-start;
      gap: 14px;
    }
    .item-img {
      width: 60px;
      height: 60px;
    }
    .qty-control {
      margin-top: 5px;
    }
  }
</style>



<div class="cart-page" style="position:relative; padding-bottom: 50px;">
  
  <?php
  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }
  $cartItems = $_SESSION['cart'] ?? [];

  $cartGroups = [];
  if (!empty($cartItems)) {
      $cartGroups[] = [
          'seller_name' => 'NAIK Official Store (Surabaya)',
          'items' => $cartItems
      ];
  }
  ?>

  <?php if (empty($cartItems)): ?>
    <div class="empty-state">
      <div class="empty-icon">🛒</div>
      <p class="empty-title">Keranjang Belanja Kosong</p>
      <p class="empty-sub">Yuk, cari sepatu impianmu sekarang juga!</p>
      <button class="empty-btn" onclick="document.location.href='<?= BASEURL ?>/public'">Mulai Belanja</button>
    </div>
  <?php else: ?>
    <div class="cart-body" id="cartBody">
      <div class="cart-left" id="cartLeft">
        <div class="cart-header">
          <input type="checkbox" class="cart-header-check" id="checkAll" checked onchange="toggleSelectAll(this)">
          <label for="checkAll" class="cart-header-label" id="selectAllLabel">Pilih Semua (<?= count($cartItems) ?> produk)</label>
          <button class="cart-header-del" id="deleteSelected" onclick="deleteSelected()">Hapus Semua</button>
        </div>
        <div id="itemsContainer">
          <?php foreach ($cartGroups as $group): ?>
              <div class="seller-group">
                  <div class="seller-row">
                      <input type="checkbox" class="item-check seller-check" checked onchange="toggleSellerGroup(this)">
                      <span class="seller-name">📍 <?= htmlspecialchars($group['seller_name']) ?></span>
                  </div>

                  <?php foreach ($group['items'] as $item): ?>
                      <div class="item-row" data-id="<?= $item['id'] ?>" data-size="<?= $item['size'] ?>">
                          <input type="checkbox" class="item-check row-check" checked onchange="calculateSummary()" data-price="<?= $item['price'] ?>" data-qty="<?= $item['qty'] ?>">

                          <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>" class="item-img">

                          <div class="item-detail">
                              <div class="item-name"><?= htmlspecialchars($item['name']) ?></div>
                              <div class="item-variant">
                                  <span class="item-cond cond-new">BARU</span>
                                  <?= htmlspecialchars($item['variant']) ?>
                              </div>

                              <div class="item-price-row">
                                  <div>
                                      <span class="item-price"><?= "Rp " . number_format($item['price'], 0, ",", ".") ?></span>
                                  </div>

                                  <div class="qty-control">
                                      <button class="qty-btn" onclick="adjustQty(this, -1)">−</button>
                                      <input type="text" class="qty-val" value="<?= $item['qty'] ?>" readonly>
                                      <button class="qty-btn" onclick="adjustQty(this, 1)">+</button>
                                  </div>

                                  <button class="item-del-btn" title="Hapus item" onclick="deleteItem(this)">
                                      🗑
                                  </button>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; ?>
              </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="cart-right">
        <div class="summary-box">
          <p class="summary-title">Ringkasan Belanja</p>
          <p class="sum-items-count" id="sumItemCount">0 produk dipilih</p>
          <div class="sum-row"><span class="sum-label">Total Harga</span><span class="sum-val" id="sumSubtotal">Rp 0</span></div>
          <div class="sum-row"><span class="sum-label">Ongkos Kirim</span><span class="sum-val" id="sumShipping">Free Ongkir</span></div>
          <hr class="sum-divider">
          <div class="sum-row" style="margin-bottom:16px;">
            <span class="sum-total-label">Total Pembayaran</span>
            <span class="sum-total-val" id="sumTotal">Rp 0</span>
          </div>
          <button class="checkout-btn" id="checkoutBtn" onclick="checkout()">Beli Sekarang</button>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="toast" id="toast"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        calculateSummary();
    });

    function calculateSummary() {
        const rowChecks = document.querySelectorAll('.row-check');
        let totalQty = 0;
        let totalPrice = 0;
        let checkedCount = 0;

        rowChecks.forEach(check => {
            if (check.checked) {
                const price = parseInt(check.dataset.price);
                const qty = parseInt(check.dataset.qty);
                totalPrice += price * qty;
                totalQty += qty;
                checkedCount++;
            }
        });

        // Update displays
        document.getElementById('sumItemCount').innerText = `${checkedCount} produk dipilih`;
        document.getElementById('sumSubtotal').innerText = formatRupiah(totalPrice);
        document.getElementById('sumTotal').innerText = formatRupiah(totalPrice);

        // Update select all checkbox state
        const checkAll = document.getElementById('checkAll');
        if (checkAll) {
            checkAll.checked = (checkedCount === rowChecks.length && rowChecks.length > 0);
        }

        // Enable/Disable checkout button
        const checkoutBtn = document.getElementById('checkoutBtn');
        if (checkoutBtn) {
            checkoutBtn.disabled = (checkedCount === 0);
        }
    }

    function toggleSelectAll(master) {
        const checks = document.querySelectorAll('.item-check');
        checks.forEach(check => {
            check.checked = master.checked;
        });
        calculateSummary();
    }

    function toggleSellerGroup(sellerCheck) {
        const group = sellerCheck.closest('.seller-group');
        const rowChecks = group.querySelectorAll('.row-check');
        rowChecks.forEach(check => {
            check.checked = sellerCheck.checked;
        });
        calculateSummary();
    }

    function formatRupiah(number) {
        return 'Rp ' + number.toLocaleString('id-ID');
    }

    function adjustQty(button, change) {
        const row = button.closest('.item-row');
        const id = row.dataset.id;
        const size = row.dataset.size;
        const qtyInput = row.querySelector('.qty-val');
        const check = row.querySelector('.row-check');

        let newQty = parseInt(qtyInput.value) + change;
        if (newQty < 1) return;

        const formData = new FormData();
        formData.append('id', id);
        formData.append('size', size);
        formData.append('qty', newQty);

        fetch('<?= BASEURL ?>/public/shoppingChart/updateQty', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                qtyInput.value = newQty;
                check.dataset.qty = newQty;
                calculateSummary();
            } else {
                showToast('Gagal mengubah kuantitas.');
            }
        })
        .catch(() => showToast('Kesalahan koneksi.'));
    }

    function deleteItem(button) {
        if (!confirm('Apakah Anda yakin ingin menghapus item ini dari keranjang?')) return;

        const row = button.closest('.item-row');
        const id = row.dataset.id;
        const size = row.dataset.size;

        const formData = new FormData();
        formData.append('id', id);
        formData.append('size', size);

        fetch('<?= BASEURL ?>/public/shoppingChart/remove', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                window.location.reload();
            } else {
                showToast('Gagal menghapus produk.');
            }
        })
        .catch(() => showToast('Kesalahan koneksi.'));
    }

    function deleteSelected() {
        if (!confirm('Apakah Anda yakin ingin mengosongkan keranjang?')) return;

        fetch('<?= BASEURL ?>/public/shoppingChart/clear', {
            method: 'POST'
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                window.location.reload();
            } else {
                showToast('Gagal membersihkan keranjang.');
            }
        })
        .catch(() => showToast('Kesalahan koneksi.'));
    }

    function checkout() {
        window.location.href = '<?= BASEURL ?>/public/shoppingChart/payment';
    }

    function showToast(message) {
        const toast = document.getElementById('toast');
        toast.innerText = message;
        toast.classList.add('show');
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }
</script>>
</div>

