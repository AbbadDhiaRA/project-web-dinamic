<?php // app/views/auth/register.php ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar — NAIK</title>
    <link rel="stylesheet" href="<?= BASEURL ?>/public/css/loginStyles.css">
</head>
<body>

<div class="auth-container">
    <div class="auth-brand"><span>NAIK</span></div>
    <p class="auth-tagline">Marketplace Sepatu</p>

    <div class="auth-card">
        <h2 class="auth-title">// Buat Akun</h2>

        <?php if ($data['error1']): ?>
            <div class="alert alert-error">Username sudah digunakan</div>
        <?php endif; ?>

        <?php if ($data['error2']): ?>
            <div class="alert alert-error">Confirm Password salah</div>
        <?php endif; ?>

        <?php if ($data['error3']): ?>
            <div class="alert alert-error">Username dan password wajib terisi</div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="cth: budi_sneakers"
                    value="<?= htmlspecialchars($_POST['username'] ?? '') ?>"
                    autocomplete="off"
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="********"
                >
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input
                    type="password"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="********"
                >
            </div>

            <button type="submit" class="btn" name="submit">Buat Akun →</button>
        </form>
    </div>

    <p class="auth-footer">
        Sudah punya akun? <a href="<?= BASEURL ?>/public/Login">Login di sini</a>
    </p>
</div>

</body>
</html>