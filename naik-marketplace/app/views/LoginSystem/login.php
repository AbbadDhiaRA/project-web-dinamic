<?php // app/views/auth/login.php 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — NAIK</title>
    <link rel="stylesheet" href="<?= BASEURL ?>/public/css/loginStyles.css">
</head>

<body>

    <div class="auth-container">
        <a href="<?= BASEURL ?>/public">
            <div class="auth-brand"><span>NAIK</span></div>
        </a>
            <p class="auth-tagline">Marketplace Sepatu</p>
        


        <div class="auth-card">
            <h2 class="auth-title">// Masuk</h2>

            <?php if ($data): ?>
                <div class="alert alert-error">Username / Password Salah</div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                        autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password">
                </div>

                <div class="form-check">
                    <input type="checkbox" id="remember_me" name="remember">
                    <label for="remember_me">Rememmber me</label>
                </div>

                <button type="submit" class="btn" name="submit">Masuk →</button>
            </form>
        </div>

        <p class="auth-footer">
            Belum punya akun? <a href="<?= BASEURL ?>/public/Register">Daftar sekarang</a>
        </p>
    </div>

</body>

</html>