<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NAIK — Admin Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"></script>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: #f5f5f5;
      color: #111;
      display: flex;
      height: 100vh;
      overflow: hidden;
    }

    /* SIDEBAR */
    .sidebar {
      width: 210px;
      background: #fff;
      border-right: 1px solid #e8e8e8;
      display: flex;
      flex-direction: column;
      flex-shrink: 0;
      height: 100vh;
    }

    .sb-logo {
      padding: 18px 20px 14px;
      border-bottom: 1px solid #e8e8e8;
    }

    .sb-logo-txt {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 22px;
      letter-spacing: 2px;
    }

    .sb-logo-txt em {
      background: #111;
      color: #fff;
      padding: 0 5px;
      font-style: normal;
    }

    .sb-logo-sub {
      font-size: 10px;
      color: #aaa;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      margin-top: 3px;
    }

    .sb-admin {
      padding: 12px 20px;
      border-bottom: 1px solid #e8e8e8;
    }

    .sb-admin-lbl {
      font-size: 10px;
      color: #aaa;
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 4px;
    }

    .sb-admin-name {
      font-size: 13px;
      font-weight: 500;
    }

    .sb-admin-role {
      font-size: 11px;
      color: #888;
    }

    .sb-nav {
      flex: 1;
      padding: 12px 0;
    }

    .sb-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 20px;
      font-size: 13px;
      color: #666;
      cursor: pointer;
      border-left: 2.5px solid transparent;
      transition: all .15s;
    }

    .sb-item i {
      font-size: 16px;
    }

    .sb-item:hover {
      background: #f5f5f5;
      color: #111;
    }

    .sb-item.active {
      color: #111;
      font-weight: 500;
      border-left-color: #111;
      background: #f5f5f5;
    }

    .sb-bottom {
      padding: 12px 20px;
      border-top: 1px solid #e8e8e8;
    }

    .sb-logout {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      color: #888;
      cursor: pointer;
    }

    .sb-logout:hover {
      color: #111;
    }

    /* MAIN */
    .main {
      flex: 1;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .topbar {
      background: #fff;
      border-bottom: 1px solid #e8e8e8;
      padding: 0 24px;
      height: 52px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-shrink: 0;
    }

    .topbar-title {
      font-size: 14px;
      font-weight: 500;
    }

    .topbar-right {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .topbar-date {
      font-size: 11px;
      color: #888;
    }

    .period-select {
      padding: 5px 10px;
      border: 1px solid #e0e0e0;
      border-radius: 4px;
      font-size: 11px;
      font-family: 'DM Sans', sans-serif;
      background: #fff;
      color: #111;
      cursor: pointer;
    }

    .tab-row {
      background: #fff;
      border-bottom: 1px solid #e8e8e8;
      padding: 0 24px;
      display: flex;
    }

    .tab {
      padding: 11px 16px;
      font-size: 12px;
      color: #888;
      cursor: pointer;
      border-bottom: 2px solid transparent;
      transition: all .15s;
    }

    .tab.active {
      color: #111;
      font-weight: 500;
      border-bottom-color: #111;
    }

    .content {
      flex: 1;
      overflow-y: auto;
      padding: 20px 24px;
    }

    /* FILTER */
    .filter-row {
      display: flex;
      gap: 8px;
      margin-bottom: 18px;
    }

    .filter-btn {
      padding: 6px 14px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 11px;
      cursor: pointer;
      background: #fff;
      color: #666;
      font-family: 'DM Sans', sans-serif;
      transition: all .15s;
    }

    .filter-btn.active,
    .filter-btn:hover {
      background: #111;
      color: #fff;
      border-color: #111;
    }

    /* METRICS */
    .metrics {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      margin-bottom: 18px;
    }

    .metric {
      background: #ebebeb;
      border-radius: 6px;
      padding: 14px 16px;
    }

    .metric-lbl {
      font-size: 10px;
      color: #666;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      margin-bottom: 7px;
    }

    .metric-val {
      font-size: 22px;
      font-weight: 500;
      margin-bottom: 4px;
      line-height: 1.2;
    }

    .metric-trend {
      font-size: 11px;
      display: flex;
      align-items: center;
      gap: 3px;
    }

    .up {
      color: #219150;
    }

    .dn {
      color: #c0392b;
    }

    /* CHARTS */
    .charts-row {
      display: grid;
      grid-template-columns: 1fr 260px;
      gap: 14px;
      margin-bottom: 18px;
    }

    .card {
      background: #fff;
      border: 1px solid #e8e8e8;
      border-radius: 8px;
      padding: 16px;
    }

    .card-title {
      font-size: 13px;
      font-weight: 500;
      margin-bottom: 3px;
    }

    .card-sub {
      font-size: 11px;
      color: #888;
      margin-bottom: 12px;
    }

    .legend {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-bottom: 10px;
    }

    .leg-item {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 11px;
      color: #666;
    }

    .leg-dot {
      width: 9px;
      height: 9px;
      border-radius: 2px;
      flex-shrink: 0;
    }

    /* TWO COL */
    .two-col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
      margin-bottom: 18px;
    }

    /* PRODUK TERLARIS */
    .prod-row {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px 0;
      border-bottom: 1px solid #f0f0f0;
    }

    .prod-row:last-child {
      border-bottom: none;
    }

    .prod-rank {
      font-size: 16px;
      font-weight: 500;
      color: #ddd;
      width: 22px;
      flex-shrink: 0;
      text-align: center;
    }

    .prod-img {
      width: 38px;
      height: 38px;
      object-fit: cover;
      border-radius: 4px;
      border: 1px solid #ebebeb;
      flex-shrink: 0;
    }

    .prod-info {
      flex: 1;
      min-width: 0;
    }

    .prod-name {
      font-size: 12px;
      font-weight: 500;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .prod-cat {
      font-size: 10px;
      color: #888;
      margin-top: 2px;
    }

    .bar-wrap {
      width: 60px;
      height: 4px;
      background: #f0f0f0;
      border-radius: 2px;
      overflow: hidden;
      flex-shrink: 0;
    }

    .bar-fill {
      height: 100%;
      background: #111;
      border-radius: 2px;
    }

    .prod-sales {
      font-size: 11px;
      font-weight: 500;
      flex-shrink: 0;
      width: 72px;
      text-align: right;
    }

    /* TABLE */
    .table-card {
      background: #fff;
      border: 1px solid #e8e8e8;
      border-radius: 8px;
      overflow: hidden;
      margin-bottom: 20px;
    }

    .table-hdr {
      padding: 14px 16px;
      border-bottom: 1px solid #e8e8e8;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .table-ttl {
      font-size: 13px;
      font-weight: 500;
    }

    .search-inp {
      padding: 7px 12px;
      border: 1px solid #e0e0e0;
      border-radius: 4px;
      font-size: 12px;
      font-family: 'DM Sans', sans-serif;
      outline: none;
      width: 190px;
    }

    .search-inp:focus {
      border-color: #111;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 12px;
    }

    th {
      padding: 9px 16px;
      text-align: left;
      font-size: 10px;
      font-weight: 500;
      color: #888;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      border-bottom: 1px solid #e8e8e8;
      background: #fafafa;
    }

    td {
      padding: 11px 16px;
      border-bottom: 1px solid #f5f5f5;
      color: #111;
    }

    tr:last-child td {
      border-bottom: none;
    }

    tr:hover td {
      background: #fafafa;
    }

    .badge {
      display: inline-block;
      padding: 2px 8px;
      border-radius: 4px;
      font-size: 10px;
      letter-spacing: 0.5px;
      font-weight: 500;
    }

    .b-success {
      background: #eafaf1;
      color: #1e8449;
    }

    .b-info {
      background: #eaf3fb;
      color: #1a5276;
    }

    .b-warn {
      background: #fef9e7;
      color: #9a7d0a;
    }

    .b-gray {
      background: #f0f0f0;
      color: #666;
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <div class="sb-logo">
      <div class="sb-logo-txt"><em>NAIK</em></div>
      <div class="sb-logo-sub">Admin Panel</div>
    </div>
    <div class="sb-admin">
      <div class="sb-admin-lbl">Masuk sebagai</div>
      <div class="sb-admin-name">Danu Prasetyo</div>
      <div class="sb-admin-role">Super Admin</div>
    </div>
    <div class="sb-nav">
      <div class="sb-item active">📊 Dashboard</div>
      <div class="sb-item">📦 Produk</div>
      <div class="sb-item">🛒 Pesanan</div>
      <div class="sb-item">👥 Pengguna</div>
      <div class="sb-item">🏷️ Promo</div>
      <div class="sb-item">⚙️ Pengaturan</div>
    </div>
    <div class="sb-bottom">
      <div class="sb-logout">🚪 Keluar</div>
    </div>
  </div>

  <div class="main">
    <div class="topbar">
      <div class="topbar-title">Laporan Penjualan</div>
      <div class="topbar-right">
        <span class="topbar-date">📅 Senin, 8 Juni 2026</span>
        <select class="period-select">
          <option>Juni 2026</option>
          <option>Mei 2026</option>
          <option>April 2026</option>
        </select>
      </div>
    </div>

    <div class="tab-row">
      <div class="tab active">Ringkasan</div>
      <div class="tab">Penjualan</div>
      <div class="tab">Produk</div>
      <div class="tab">Pengguna</div>
    </div>

    <div class="content">
      <div class="filter-row">
        <button class="filter-btn active" onclick="setFilter(this,'today')">Hari ini</button>
        <button class="filter-btn" onclick="setFilter(this,'week')">7 Hari</button>
        <button class="filter-btn" onclick="setFilter(this,'month')">30 Hari</button>
        <button class="filter-btn" onclick="setFilter(this,'year')">Tahun ini</button>
      </div>

      <div class="metrics">
        <div class="metric">
          <div class="metric-lbl">Total Pendapatan</div>
          <div class="metric-val" id="mRev">Rp 4,2 Jt</div>
          <div class="metric-trend up">▲ 12.4% vs kemarin</div>
        </div>
        <div class="metric">
          <div class="metric-lbl">Pesanan Masuk</div>
          <div class="metric-val" id="mOrd">38</div>
          <div class="metric-trend up">▲ 8.1% vs kemarin</div>
        </div>
        <div class="metric">
          <div class="metric-lbl">Produk Terjual</div>
          <div class="metric-val" id="mProd">52</div>
          <div class="metric-trend dn">▼ 3.2% vs kemarin</div>
        </div>
        <div class="metric">
          <div class="metric-lbl">Pengguna Aktif</div>
          <div class="metric-val" id="mUser">124</div>
          <div class="metric-trend up">▲ 5.7% vs kemarin</div>
        </div>
      </div>

      <div class="charts-row">
        <div class="card">
          <div class="card-title">Grafik Pendapatan</div>
          <div class="card-sub">Juni 2026</div>
          <div class="legend">
            <span class="leg-item"><span class="leg-dot" style="background:#111;"></span>Pendapatan</span>
            <span class="leg-item"><span class="leg-dot" style="background:#aaa;border:1px dashed #888;"></span>Target</span>
          </div>
          <div style="position:relative;width:100%;height:200px;">
            <canvas id="chartRev" role="img" aria-label="Grafik pendapatan harian NAIK Marketplace Juni 2026">Pendapatan harian tanggal 1-8 Juni 2026.</canvas>
          </div>
        </div>
        <div class="card">
          <div class="card-title">Kategori Terlaris</div>
          <div class="card-sub">Berdasarkan unit terjual</div>
          <div class="legend">
            <span class="leg-item"><span class="leg-dot" style="background:#111;"></span>Sneakers 38%</span>
            <span class="leg-item"><span class="leg-dot" style="background:#555;"></span>Running 22%</span>
            <span class="leg-item"><span class="leg-dot" style="background:#888;"></span>Casual 18%</span>
            <span class="leg-item"><span class="leg-dot" style="background:#bbb;border:1px dashed #999;"></span>Lainnya 22%</span>
          </div>
          <div style="position:relative;width:100%;height:170px;">
            <canvas id="chartCat" role="img" aria-label="Kategori sepatu terlaris: Sneakers 38%, Running 22%, Casual 18%, Basketball 12%, Formal 10%">Sneakers 38%, Running 22%, Casual 18%, Basketball 12%, Formal 10%.</canvas>
          </div>
        </div>
      </div>

      <div class="two-col">
        <div class="card">
          <div class="card-title">Produk Terlaris</div>
          <div class="card-sub" style="margin-bottom:14px;">Top 5 bulan ini</div>
          <div class="prod-row">
            <span class="prod-rank">01</span>
            <img class="prod-img" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=100&q=70" alt="">
            <div class="prod-info">
              <div class="prod-name">NAIK Air Force Classic</div>
              <div class="prod-cat">Sneakers · Baru</div>
            </div>
            <div class="bar-wrap">
              <div class="bar-fill" style="width:100%"></div>
            </div>
            <span class="prod-sales">148 terjual</span>
          </div>
          <div class="prod-row">
            <span class="prod-rank">02</span>
            <img class="prod-img" src="https://images.unsplash.com/photo-1605348532760-6753d2c43329?w=100&q=70" alt="">
            <div class="prod-info">
              <div class="prod-name">NAIK Max Runner Pro</div>
              <div class="prod-cat">Running · Baru</div>
            </div>
            <div class="bar-wrap">
              <div class="bar-fill" style="width:80%"></div>
            </div>
            <span class="prod-sales">118 terjual</span>
          </div>
          <div class="prod-row">
            <span class="prod-rank">03</span>
            <img class="prod-img" src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=100&q=70" alt="">
            <div class="prod-info">
              <div class="prod-name">NAIK Old Souls Low</div>
              <div class="prod-cat">Casual · Bekas</div>
            </div>
            <div class="bar-wrap">
              <div class="bar-fill" style="width:62%"></div>
            </div>
            <span class="prod-sales">92 terjual</span>
          </div>
          <div class="prod-row">
            <span class="prod-rank">04</span>
            <img class="prod-img" src="https://images.unsplash.com/photo-1539185441755-769473a23570?w=100&q=70" alt="">
            <div class="prod-info">
              <div class="prod-name">NAIK Balance 500</div>
              <div class="prod-cat">Running · Baru</div>
            </div>
            <div class="bar-wrap">
              <div class="bar-fill" style="width:48%"></div>
            </div>
            <span class="prod-sales">71 terjual</span>
          </div>
          <div class="prod-row">
            <span class="prod-rank">05</span>
            <img class="prod-img" src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?w=100&q=70" alt="">
            <div class="prod-info">
              <div class="prod-name">NAIK Suede Retro</div>
              <div class="prod-cat">Casual · Baru</div>
            </div>
            <div class="bar-wrap">
              <div class="bar-fill" style="width:38%"></div>
            </div>
            <span class="prod-sales">56 terjual</span>
          </div>
        </div>

        <div class="card">
          <div class="card-title">Pesanan per Kota</div>
          <div class="card-sub" style="margin-bottom:12px;">Top 5 kota</div>
          <div style="position:relative;width:100%;height:220px;">
            <canvas id="chartCity" role="img" aria-label="Pesanan per kota: Surabaya 320, Jakarta 280, Bandung 195, Malang 150, Jogja 90">Surabaya 320, Jakarta 280, Bandung 195, Malang 150, Jogja 90 pesanan.</canvas>
          </div>
        </div>
      </div>

      <div class="table-card">
        <div class="table-hdr">
          <span class="table-ttl">Transaksi Terbaru</span>
          <input class="search-inp" type="text" placeholder="Cari pesanan, pembeli..." oninput="filterTable(this.value)">
        </div>
        <table>
          <thead>
            <tr>
              <th>No. Pesanan</th>
              <th>Pembeli</th>
              <th>Produk</th>
              <th>Total</th>
              <th>Metode</th>
              <th>Status</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody id="txBody"></tbody>
        </table>
      </div>
    </div>
  </div>

  <script>
    const txData = [{
        id: 'NAIK-2026-08471',
        buyer: 'Budi Santoso',
        product: 'NAIK Air Force Classic x1',
        total: 'Rp 850.000',
        method: 'BCA VA',
        status: 'Selesai',
        date: '8 Jun 09.14'
      },
      {
        id: 'NAIK-2026-08470',
        buyer: 'Siti Rahayu',
        product: 'NAIK Max Runner Pro x2',
        total: 'Rp 2.700.000',
        method: 'GoPay',
        status: 'Dikirim',
        date: '8 Jun 08.52'
      },
      {
        id: 'NAIK-2026-08469',
        buyer: 'Andi Wijaya',
        product: 'NAIK Old Souls Low x1',
        total: 'Rp 420.000',
        method: 'COD',
        status: 'Dikemas',
        date: '8 Jun 08.31'
      },
      {
        id: 'NAIK-2026-08468',
        buyer: 'Dewi Lestari',
        product: 'NAIK Balance 500 x1',
        total: 'Rp 950.000',
        method: 'OVO',
        status: 'Selesai',
        date: '8 Jun 07.48'
      },
      {
        id: 'NAIK-2026-08467',
        buyer: 'Reza Firmansyah',
        product: 'NAIK Suede Retro x3',
        total: 'Rp 1.740.000',
        method: 'Mandiri',
        status: 'Menunggu',
        date: '8 Jun 07.22'
      },
      {
        id: 'NAIK-2026-08466',
        buyer: 'Maya Putri',
        product: 'NAIK Court Slam x1',
        total: 'Rp 1.200.000',
        method: 'BNI VA',
        status: 'Selesai',
        date: '8 Jun 06.59'
      },
      {
        id: 'NAIK-2026-08465',
        buyer: 'Fajar Nugroho',
        product: 'NAIK Trail Blazer x2',
        total: 'Rp 1.900.000',
        method: 'Dana',
        status: 'Dikirim',
        date: '7 Jun 21.44'
      },
      {
        id: 'NAIK-2026-08464',
        buyer: 'Lina Marlina',
        product: 'NAIK Air Force Classic x1',
        total: 'Rp 850.000',
        method: 'GoPay',
        status: 'Selesai',
        date: '7 Jun 20.17'
      },
      {
        id: 'NAIK-2026-08463',
        buyer: 'Bagas Prasetya',
        product: 'NAIK Drift Low x1',
        total: 'Rp 680.000',
        method: 'COD',
        status: 'Dikemas',
        date: '7 Jun 19.30'
      },
      {
        id: 'NAIK-2026-08462',
        buyer: 'Nadia Kusuma',
        product: 'NAIK Balance 500 x2',
        total: 'Rp 1.900.000',
        method: 'BCA VA',
        status: 'Menunggu',
        date: '7 Jun 18.05'
      },
      {
        id: 'NAIK-2026-08461',
        buyer: 'Hendra Gunawan',
        product: 'NAIK Sky High x1',
        total: 'Rp 1.450.000',
        method: 'ShopeePay',
        status: 'Selesai',
        date: '7 Jun 17.22'
      },
      {
        id: 'NAIK-2026-08460',
        buyer: 'Putri Anggraeni',
        product: 'NAIK Glide Runner x2',
        total: 'Rp 1.580.000',
        method: 'BCA VA',
        status: 'Dikirim',
        date: '7 Jun 16.41'
      },
    ];

    const badgeClass = {
      Selesai: 'b-success',
      Dikirim: 'b-info',
      Dikemas: 'b-warn',
      Menunggu: 'b-gray'
    };

    function renderTable(data) {
      document.getElementById('txBody').innerHTML = data.map(r => `
    <tr>
      <td style="font-weight:500;font-size:11px;letter-spacing:0.3px;">${r.id}</td>
      <td>${r.buyer}</td>
      <td style="color:#666;">${r.product}</td>
      <td style="font-weight:500;">${r.total}</td>
      <td style="color:#666;">${r.method}</td>
      <td><span class="badge ${badgeClass[r.status]||'b-gray'}">${r.status}</span></td>
      <td style="color:#888;">${r.date}</td>
    </tr>`).join('');
    }

    function filterTable(q) {
      const f = q.toLowerCase();
      renderTable(txData.filter(r =>
        r.id.toLowerCase().includes(f) ||
        r.buyer.toLowerCase().includes(f) ||
        r.product.toLowerCase().includes(f) ||
        r.status.toLowerCase().includes(f)
      ));
    }

    const filterData = {
      today: {
        rev: 'Rp 4,2 Jt',
        ord: '38',
        prod: '52',
        user: '124'
      },
      week: {
        rev: 'Rp 28,7 Jt',
        ord: '241',
        prod: '318',
        user: '892'
      },
      month: {
        rev: 'Rp 112 Jt',
        ord: '974',
        prod: '1.241',
        user: '3.480'
      },
      year: {
        rev: 'Rp 1,4 M',
        ord: '11.200',
        prod: '14.830',
        user: '28.600'
      },
    };

    function setFilter(el, key) {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      el.classList.add('active');
      const d = filterData[key];
      document.getElementById('mRev').textContent = d.rev;
      document.getElementById('mOrd').textContent = d.ord;
      document.getElementById('mProd').textContent = d.prod;
      document.getElementById('mUser').textContent = d.user;
    }

    renderTable(txData);

    new Chart(document.getElementById('chartRev'), {
      type: 'bar',
      data: {
        labels: ['1 Jun', '2 Jun', '3 Jun', '4 Jun', '5 Jun', '6 Jun', '7 Jun', '8 Jun'],
        datasets: [{
            label: 'Pendapatan',
            data: [3200000, 4800000, 3900000, 5600000, 4200000, 6100000, 5300000, 4200000],
            backgroundColor: '#111',
            borderRadius: 3
          },
          {
            label: 'Target',
            data: [4000000, 4000000, 4000000, 4000000, 4000000, 4000000, 4000000, 4000000],
            type: 'line',
            borderColor: '#aaa',
            borderDash: [4, 3],
            borderWidth: 1.5,
            pointRadius: 0,
            backgroundColor: 'transparent',
            tension: 0
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: v => 'Rp ' + Math.round(v.raw).toLocaleString('id-ID')
            }
          }
        },
        scales: {
          x: {
            grid: {
              display: false
            },
            ticks: {
              color: '#888',
              font: {
                size: 10
              }
            },
            border: {
              display: false
            }
          },
          y: {
            grid: {
              color: 'rgba(0,0,0,0.05)'
            },
            ticks: {
              color: '#888',
              font: {
                size: 10
              },
              callback: v => 'Rp ' + (v / 1000000).toFixed(1) + 'Jt'
            },
            border: {
              display: false
            }
          }
        }
      }
    });

    new Chart(document.getElementById('chartCat'), {
      type: 'doughnut',
      data: {
        labels: ['Sneakers', 'Running', 'Casual', 'Basketball', 'Formal'],
        datasets: [{
          data: [38, 22, 18, 12, 10],
          backgroundColor: ['#111', '#444', '#777', '#aaa', '#ccc'],
          borderWidth: 0,
          hoverOffset: 4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '65%',
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: v => v.label + ': ' + v.raw + '%'
            }
          }
        }
      }
    });

    new Chart(document.getElementById('chartCity'), {
      type: 'bar',
      indexAxis: 'y',
      data: {
        labels: ['Jogja', 'Malang', 'Bandung', 'Jakarta', 'Surabaya'],
        datasets: [{
          data: [90, 150, 195, 280, 320],
          backgroundColor: '#111',
          borderRadius: 3
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false
          }
        },
        scales: {
          x: {
            grid: {
              color: 'rgba(0,0,0,0.05)'
            },
            ticks: {
              color: '#888',
              font: {
                size: 10
              }
            },
            border: {
              display: false
            }
          },
          y: {
            grid: {
              display: false
            },
            ticks: {
              color: '#555',
              font: {
                size: 11
              }
            },
            border: {
              display: false
            }
          }
        }
      }
    });
  </script>
</body>

</html>