<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['judul'] ?></title>
  <link rel="stylesheet" href="<?= BASEURL ?>/public/css/headerStyles.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/public/css/footerStyles.css">
  
  <?php if($data['judul'] == 'NAIK - HOMEPAGE'): ?>
  <link rel="stylesheet" href="<?= BASEURL ?>/public/css/homepageStyles.css">
  <?php endif ?>

  <?php if($data['judul'] == 'NAIK - DASHBOARD ADMIN'): ?>
  <link rel="stylesheet" href="<?= BASEURL ?>/public/css/loginStyles.css">
  <?php endif ?>
  

</head>

<body>
  <!-- NAVBAR -->
  <div class="hp">
    <nav class="nav">
      <a href="<?= BASEURL ?>/public" class="nav-logo"><em>NAIK</em></a>
      <div class="nav-search">
        <input type="text" placeholder="Cari sepatu, brand, ukuran...">
        <button class="nav-search-btn"><i class="ti ti-search" style="font-size:14px" aria-hidden="true"></i></button>
      </div>
      
      <?php session_start() ?>
      <?php if(isset($_SESSION['login'])){ ?>
      <div class="nav-links">
        <?php if(isset($_SESSION['loginAdmin'])) :?>
        <a href="<?= BASEURL ?>/public/AdminDashboard">Dashboard Admin</a>
        <?php endif ?>
        <a href="<?= BASEURL ?>/public">Home</a>
        <a href="<?= BASEURL ?>/public/shoppingChart">Keranjang</a>
        <a href="<?= BASEURL ?>/public/Logout" onclick="confirm('Apakah anda yakin ingin logout?'); return confirm">Logout</a>
        <h1 style="font-size: 18px;">Halo, <?= $_SESSION['login'] ?></h1>
      </div>
      
      <?php } else { ?>
      <div class="nav-links">
        <a href="<?= BASEURL ?>/public">Home</a>
        <a href="<?= BASEURL ?>/public/shoppingChart">Keranjang</a>
        <button class="nav-btn"
        onclick="document.location.href='<?= BASEURL ?>/public/Login'"
        >Masuk</button>
        <button 
        type="submit" 
        class="nav-btn nav-btn-solid" 
        id="bold" 
        onclick="document.location.href='<?= BASEURL ?>/public/Register'">Daftar</button>
      </div>
      <?php } ?>
    </nav>
  </div>
