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

  .cart-left {}

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

  .cart-right {}

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

  .toast {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: #111;
    color: #fff;
    padding: 10px 20px;
    border-radius: 4px;
    font-size: 12px;
    opacity: 0;
    transition: opacity .3s;
    pointer-events: none;
    white-space: nowrap;
    z-index: 99;
  }

  .toast.show {
    opacity: 1;
  }
</style>



<div class="cart-page" style="position:relative;">
  <nav class="cart-nav">
    <a href="#" class="cart-nav-logo"><em>NAIK</em></a>
    <span class="cart-nav-title">/ Keranjang Belanja</span>
  </nav>

  <div class="cart-body" id="cartBody">
    <div class="cart-left" id="cartLeft">
      <div class="cart-header">
        <input type="checkbox" class="cart-header-check" id="checkAll" checked>
        <label for="checkAll" class="cart-header-label" id="selectAllLabel">Pilih Semua (4 produk)</label>
        <button class="cart-header-del" id="deleteSelected" onclick="deleteSelected()">Hapus Dipilih</button>
      </div>
      <div id="itemsContainer"></div>
    </div>

    <div class="cart-right">
      <div class="promo-box">
        <p class="promo-title">Kode Promo</p>
        <div class="promo-input-row">
          <input type="text" class="promo-input" id="promoInput" placeholder="Masukkan kode promo">
          <button class="promo-apply-btn" onclick="applyPromo()">Pakai</button>
        </div>
        <div class="promo-applied" id="promoApplied" style="display:none;">
          <span class="promo-applied-txt"><i class="ti ti-check" aria-hidden="true"></i> NAIK10 — Diskon 10%</span>
          <button class="promo-remove" onclick="removePromo()" aria-label="Hapus promo">×</button>
        </div>
      </div>

      <div class="summary-box">
        <p class="summary-title">Ringkasan Belanja</p>
        <p class="sum-items-count" id="sumItemCount">4 produk dipilih</p>
        <div class="sum-row"><span class="sum-label">Total Harga</span><span class="sum-val" id="sumSubtotal">Rp 0</span></div>
        <div class="sum-row" id="sumDiscountRow" style="display:none;"><span class="sum-label sum-discount">Diskon Promo</span><span class="sum-val sum-discount" id="sumDiscount">-Rp 0</span></div>
        <div class="sum-row"><span class="sum-label">Ongkos Kirim</span><span class="sum-val" id="sumShipping">Dihitung saat checkout</span></div>
        <hr class="sum-divider">
        <div class="sum-row" style="margin-bottom:16px;">
          <span class="sum-total-label">Total Pembayaran</span>
          <span class="sum-total-val" id="sumTotal">Rp 0</span>
        </div>
        <button class="checkout-btn" id="checkoutBtn" onclick="checkout()">Beli Sekarang</button>
        <p class="sum-note">Gratis ongkir untuk pembelian &gt; Rp 300.000</p>
      </div>
    </div>
  </div>

  <div class="toast" id="toast"></div>
</div>

<script>
  const fmt = n => 'Rp ' + Math.round(n).toLocaleString('id-ID');

  let promoActive = false;
  const PROMO_DISC = 0.10;

  const sellers = [{
      name: 'NAIK - Kicks Store',
      city: 'Surabaya',
      items: [{
          id: 1,
          name: 'NAIK Air Force 1 Low',
          variant: 'Ukuran 42 / Putih',
          price: 850000,
          origPrice: 1100000,
          qty: 1,
          condition: 'Baru',
          img: 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=200&q=80',
          checked: true,
          stock: 5
        },
        {
          id: 2,
          name: 'NAIK Air Max 90',
          variant: 'Ukuran 41 / Hitam',
          price: 1350000,
          origPrice: null,
          qty: 1,
          condition: 'Baru',
          img: 'https://images.unsplash.com/photo-1605348532760-6753d2c43329?w=200&q=80',
          checked: true,
          stock: 3
        },
      ]
    },
    {
      name: 'NAIK - Kicks Store',
      city: 'Jakarta',
      items: [{
          id: 3,
          name: 'NAIK Stan Smith',
          variant: 'Ukuran 43 / Putih Hijau',
          price: 650000,
          origPrice: null,
          qty: 2,
          condition: 'Baru',
          img: 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=200&q=80',
          checked: true,
          stock: 2
        },
        {
          id: 4,
          name: 'NAIK Vans Old Skool',
          variant: 'Ukuran 40 / Hitam Putih',
          price: 420000,
          origPrice: 720000,
          qty: 1,
          condition: 'Baru',
          img: 'https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=200&q=80',
          checked: true,
          stock: 4
        },
      ]
    }
  ];

  function renderCart() {
    const container = document.getElementById('itemsContainer');
    container.innerHTML = '';
    let totalItems = 0;
    sellers.forEach((seller, si) => {
      if (seller.items.length === 0) return;
      const grp = document.createElement('div');
      grp.className = 'seller-group';
      const sellerChecked = seller.items.every(i => i.checked);
      grp.innerHTML = `<div class="seller-row">
      <input type="checkbox" class="item-check" ${sellerChecked?'checked':''} onchange="toggleSeller(${si}, this.checked)" id="s${si}">
      <label for="s${si}" class="seller-name"><i class="ti ti-map-pin" style="font-size:12px;vertical-align:-1px;margin-right:3px" aria-hidden="true"></i>${seller.name} · ${seller.city}</label>
    </div>`;
      seller.items.forEach((item, ii) => {
        totalItems++;
        const row = document.createElement('div');
        row.className = 'item-row';
        row.innerHTML = `
        <input type="checkbox" class="item-check" ${item.checked?'checked':''} onchange="toggleItem(${si},${ii},this.checked)" id="i${item.id}">
        <img class="item-img" src="${item.img}" alt="${item.name}">
        <div class="item-detail">
          <p class="item-name">${item.name}</p>
          <p class="item-variant"><span class="item-cond ${item.condition==='Baru'?'cond-new':'cond-used'}">${item.condition}</span>${item.variant}</p>
          <div class="item-price-row">
            <div>
              ${item.origPrice ? `<span class="item-price struck">${fmt(item.origPrice)}</span>` : ''}
              <span class="item-price">${fmt(item.price)}</span>
            </div>
            <div style="display:flex;align-items:center;gap:10px;">
              <div class="qty-control">
                <button class="qty-btn" onclick="changeQty(${si},${ii},-1)" ${item.qty<=1?'disabled':''} aria-label="Kurang">−</button>
                <input class="qty-val" type="number" value="${item.qty}" min="1" max="${item.stock}" onchange="setQty(${si},${ii},this.value)" aria-label="Jumlah">
                <button class="qty-btn" onclick="changeQty(${si},${ii},1)" ${item.qty>=item.stock?'disabled':''} aria-label="Tambah">+</button>
              </div>
              <button class="item-del-btn" onclick="deleteItem(${si},${ii})" aria-label="Hapus produk"><i class="ti ti-trash" style="font-size:16px" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>`;
        grp.appendChild(row);
      });
      container.appendChild(grp);
    });
    updateSummary(totalItems);
    updateSelectAll();
  }

  function toggleItem(si, ii, val) {
    sellers[si].items[ii].checked = val;
    updateSummary();
    updateSelectAll();
  }

  function toggleSeller(si, val) {
    sellers[si].items.forEach(i => i.checked = val);
    renderCart();
  }

  function changeQty(si, ii, delta) {
    const item = sellers[si].items[ii];
    const nv = item.qty + delta;
    if (nv < 1 || nv > item.stock) return;
    item.qty = nv;
    renderCart();
  }

  function setQty(si, ii, val) {
    const item = sellers[si].items[ii];
    let nv = parseInt(val);
    if (isNaN(nv) || nv < 1) nv = 1;
    if (nv > item.stock) nv = item.stock;
    item.qty = nv;
    renderCart();
  }

  function deleteItem(si, ii) {
    sellers[si].items.splice(ii, 1);
    showToast('Produk dihapus dari keranjang');
    renderCart();
  }

  function deleteSelected() {
    let deleted = 0;
    sellers.forEach(s => {
      const before = s.items.length;
      s.items = s.items.filter(i => !i.checked);
      deleted += before - s.items.length;
    });
    if (deleted === 0) {
      showToast('Tidak ada produk yang dipilih');
      return;
    }
    showToast(`${deleted} produk dihapus`);
    renderCart();
  }

  function updateSelectAll() {
    const all = sellers.flatMap(s => s.items);
    const ca = document.getElementById('checkAll');
    if (!ca) return;
    const totalAll = all.length;
    const checkedAll = all.filter(i => i.checked).length;
    ca.checked = totalAll > 0 && checkedAll === totalAll;
    ca.indeterminate = checkedAll > 0 && checkedAll < totalAll;
  }

  document.addEventListener('change', e => {
    if (e.target.id === 'checkAll') {
      const val = e.target.checked;
      sellers.forEach(s => s.items.forEach(i => i.checked = val));
      renderCart();
    }
  });

  function updateSummary(totalItems) {
    const all = sellers.flatMap(s => s.items);
    const selected = all.filter(i => i.checked);
    const subtotal = selected.reduce((a, i) => a + i.price * i.qty, 0);
    const discount = promoActive ? subtotal * PROMO_DISC : 0;
    const total = subtotal - discount;
    const countLabel = document.getElementById('sumItemCount');
    const selLabel = document.getElementById('selectAllLabel');
    const totalProd = totalItems !== undefined ? totalItems : all.length;
    if (countLabel) countLabel.textContent = `${selected.length} produk dipilih`;
    if (selLabel) selLabel.textContent = `Pilih Semua (${totalProd} produk)`;
    document.getElementById('sumSubtotal').textContent = fmt(subtotal);
    document.getElementById('sumTotal').textContent = fmt(total);
    const discRow = document.getElementById('sumDiscountRow');
    if (promoActive && subtotal > 0) {
      discRow.style.display = 'flex';
      document.getElementById('sumDiscount').textContent = '-' + fmt(discount);
    } else {
      discRow.style.display = 'none';
    }
    const btn = document.getElementById('checkoutBtn');
    if (btn) btn.disabled = selected.length === 0;
    const shpEl = document.getElementById('sumShipping');
    if (shpEl) shpEl.textContent = subtotal >= 300000 ? 'Gratis' : 'Dihitung saat checkout';
  }

  function applyPromo() {
    const code = document.getElementById('promoInput').value.trim().toUpperCase();
    if (code === 'NAIK10') {
      promoActive = true;
      document.getElementById('promoApplied').style.display = 'flex';
      document.getElementById('promoInput').value = '';
      showToast('Kode promo berhasil dipakai!');
      updateSummary();
    } else if (code === '') {
      showToast('Masukkan kode promo dulu');
    } else {
      showToast('Kode promo tidak valid');
    }
  }

  function removePromo() {
    promoActive = false;
    document.getElementById('promoApplied').style.display = 'none';
    showToast('Kode promo dihapus');
    updateSummary();
  }

  function checkout() {
    const selected = sellers.flatMap(s => s.items).filter(i => i.checked);
    if (selected.length === 0) {
      showToast('Pilih produk dulu');
      return;
    }
    showToast('Menuju halaman pembayaran...');
  }

  function showToast(msg) {
    const t = document.getElementById('toast');
    t.textContent = msg;
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 2500);
  }

  renderCart();
</script>