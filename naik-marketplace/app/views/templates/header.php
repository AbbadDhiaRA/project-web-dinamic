<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (isset($_COOKIE['x']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['x'];
  $key = $_COOKIE['key'];
  $result = mysqli_query(CONN, "SELECT username FROM users WHERE id = $id");
  $item = mysqli_fetch_assoc($result);

  if ($key === hash('sha256', $item['username'])) {
    $_SESSION['login'] = ucwords(strtolower($item['username']));
  }
}





$title = $data['judul'] ?? 'NAIK Marketplace';
$styles = $data['styles'] ?? [];

if (is_string($styles)) {
  $styles = [$styles];
}

if (empty($styles)) {
  if ($title === 'NAIK - HOMEPAGE') {
    $styles[] = 'homepageStyles.css';
  }
}

$scripts = $data['scripts'] ?? [];

if (is_string($scripts)) {
  $scripts = [$scripts];
}

$bodyClass = $data['bodyClass'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="stylesheet" href="<?= BASEURL ?>/public/css/headerStyles.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/public/css/footerStyles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">

  <?php foreach ($styles as $style): ?>
    <?php if (filter_var($style, FILTER_VALIDATE_URL)): ?>
      <link rel="stylesheet" href="<?= htmlspecialchars($style, ENT_QUOTES, 'UTF-8') ?>">
    <?php else: ?>
      <link rel="stylesheet" href="<?= BASEURL ?>/public/css/<?= htmlspecialchars($style, ENT_QUOTES, 'UTF-8') ?>">
    <?php endif; ?>
  <?php endforeach; ?>

  <?php foreach ($scripts as $script): ?>
    <script src="<?= htmlspecialchars($script, ENT_QUOTES, 'UTF-8') ?>"></script>
  <?php endforeach; ?>

</head>

<body class="<?= htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8') ?>">
  <!-- NAVBAR -->
  <div class="hp">
    <nav class="nav">
      <a href="<?= BASEURL ?>/public" class="nav-logo"><em>NAIK</em></a>
      <?php
      $searchAction = (isset($title) && strpos(strtolower($title), 'dashboard admin') !== false) 
          ? BASEURL . '/public/AdminDashboard' 
          : BASEURL . '/public/Home';
      ?>
      <form action="<?= $searchAction ?>" method="POST" class="nav-search">
        <input type="text" name="keyword" placeholder="Cari sepatu, brand, ukuran..." value="<?= isset($_POST['keyword']) ? htmlspecialchars($_POST['keyword']) : '' ?>">
        <button type="submit" class="nav-search-btn" aria-label="Cari"><i class="ti ti-search" style="font-size:14px" aria-hidden="true"></i></button>
      </form>

      <?php if (isset($_SESSION['login'])): ?>
        <div class="nav-links">
          <?php if (isset($_SESSION['loginAdmin'])): ?>
            <a href="<?= BASEURL ?>/public/AdminDashboard">Dashboard Admin</a>
          <?php endif; ?>
          <a href="<?= BASEURL ?>/public">Home</a>
          <a href="<?= BASEURL ?>/public/shoppingChart">Keranjang</a>
          <a href="<?= BASEURL ?>/public/Logout" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
          <span class="nav-user">Halo, <?= htmlspecialchars($_SESSION['login'], ENT_QUOTES, 'UTF-8') ?></span>
        </div>

      <?php else: ?>
        <div class="nav-links">
          <a href="<?= BASEURL ?>/public">Home</a>
          <a href="<?= BASEURL ?>/public/shoppingChart">Keranjang</a>
          <button type="button" class="nav-btn"
            onclick="document.location.href='<?= BASEURL ?>/public/Login'">Masuk</button>
          <button
            type="button"
            class="nav-btn nav-btn-solid"
            id="bold"
            onclick="document.location.href='<?= BASEURL ?>/public/Register'">Daftar</button>
        </div>
      <?php endif; ?>
    </nav>
  </div>
  <main class="site-main">