<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    color: white;
    font-family: 'Poppins';
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
    text-decoration: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
    height: 55px;
}

.logo img {
    width: 35px;   
    height: 35px;
    object-fit: contain;
    border-radius: 8px;
    margin-bottom: 18px;
    vertical-align: middle;
}   

.menu-kanan {
    display: flex;
    align-items: center;
    gap: 20px;
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
        <a href="homepage.php" class="logo">
            <img src="header&footer/JEF (2).png" alt="Logo">
            Cinema
        </a>

        <div class="menu-kanan">
            <div class="tombol-auth">
                <a href="logIn.php" class="btn btn-login">Login</a>
                <a href="signup.php" class="btn btn-signup">Sign Up</a>
            </div>
        </div>
    </div>
</header>