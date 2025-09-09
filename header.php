
<!-- components/header.php -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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
    
    .logo {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: bold;
        color: white;
    }
    
    .logo-icon {
        width: 40px;
        height: 40px;
        margin-right: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }
    
    .menu-kanan {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    
    .menu {
        display: flex;
        list-style: none;
        gap: 15px;
        align-items: center;
    }
    
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
    
    .tombol-auth {
        display: flex;
        gap: 15px;
        margin-right: 10px;
    }
    
    .btn {
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-login {
        background-color: transparent;
        color: white;
        border: 2px solid white;
        border-radius: 100px;
    }
    
    .btn-login:hover {
        background-color: rgba(255, 255, 255, 0.15);
        box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
    }
    
    .btn-signup {
        background-color: transparent;
        color: white;
        border: 2px solid white;
        border-radius: 100px;
    }
    
    .btn-signup:hover {
       background-color: rgba(255, 255, 255, 0.15);
       box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
    }
</style>

<header class="header">
    <div class="isi">
        <!-- Logo di kiri -->
        <div class="logo">
            <div class="logo-icon"><img src="gambar" alt="logo"></div>
            JEF Cinema
        </div>
        
        <!-- Menu di kanan -->
        <div class="menu-kanan">
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="now-playing.php">Now Playing</a></li>
                <li><a href="upcoming.php">Upcoming</a></li>
                <li><a href="promo.php">Promo</a></li>
            </ul>
            
            <div class="tombol-auth">
                <a href="login.php" class="btn btn-login">Login</a>
                <a href="register.php" class="btn btn-signup">Sign Up</a>
            </div>
        </div>
    </div>

</header>
