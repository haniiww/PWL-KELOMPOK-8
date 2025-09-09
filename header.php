
<!-- components/header.php -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        color: white;
        font-family: Arial, sans-serif;
    }

    .header {
        padding: 15px 0;
    }

    .isi {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 70px;
    }

    /* Logo + teks */
    .logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        color: white;
        font-size: 20px;
        font-weight: bold;
    }

    /* Ukuran logo biar kecil */
    .logo img {
        width: 45px;    /* <<< Logo lebih kecil */
        height: 45px;
        object-fit: contain;
        border-radius: 8px;
    }

    /* Menu kanan */
    .menu-kanan {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    /* Tombol menu */
    .menu a {
        color: white;
        text-decoration: none;
        font-size: 16px;
        padding: 8px 12px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .menu a:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
    }

    /* Tombol login & signup */
    .tombol-auth {
        display: flex;
        gap: 15px;
        margin-right: 10px;
    }

    .btn {
        padding: 8px 18px;
        border-radius: 100px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        border: 2px solid white;
        background-color: transparent;
        color: white;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background-color: rgba(255, 255, 255, 0.15);
    }
</style>

<header class="header">
    <div class="isi">
        <!-- Logo di kiri -->
        <a href="index.php" class="logo">
            <img src="gambar/JEF.png" alt="Logo">
            JEF Cinema
        </a>

        <!-- Menu di kanan -->
        <div class="menu-kanan">
            <div class="tombol-auth">
                <a href="login.php" class="btn btn-login">Login</a>
                <a href="register.php" class="btn btn-signup">Sign Up</a>
            </div>
        </div>
    </div>
</header>
