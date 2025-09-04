<!-- components/footer.php -->
<style>
    .footer { 
        margin: 0 auto;    
        padding: 40px 20px 20px;
        color: #fff;
        font-family: Arial, sans-serif;
    }

    .footer-container {
        max-width: 1500px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 50px;
    }

    .footer-col {
        flex: 1;
        min-width: 180px;
        gap: ;
    }

    .footer-col h3 {
        font-size: 18px;
        margin-bottom: 15px;
        color: #fff;
    }

    .footer-col ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-col ul li {
        margin-bottom: 10px;
    }

    .footer-col ul li a {
        color: #bbb;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-col ul li a:hover {
        color: #504845ff;
    }

    /* Sosial media */
    .social-media {
        display: flex;
        gap: 12px;
        margin-top: 5px;
    }

    .social-media a img {
        width: 32px;
        height: 32px;
        object-fit: cover;
        border-radius: 6px;
        transition: transform 0.3s ease;
    }

    .social-media a img:hover {
        transform: scale(1.1);
    }

    /* Bagian bawah */
    .footer-bottom {
        text-align: center;
        margin-top: 30px;

        padding-top: 15px;
        font-size: 13px;
        color: #888;
    }

    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            gap: 30px;
            text-align: center;
        }
    }
</style>

<footer class="footer">
    <div class="footer-container">
        <!-- Tentang Kami -->
        <div class="footer-col">
            <h3>Company</h3>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="supported-devices.php">Supported Devices</a></li>
                <li><a href="careers.php">Careers</a></li>
            </ul>
        </div>

        <!-- Bantuan -->
        <div class="footer-col">
            <h3>Customer Support</h3>
            <ul>
                <li><a href="help.php">Help Center</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <!-- Kebijakan -->
        <div class="footer-col">
            <h3>Legal</h3>
            <ul>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="terms.php">Terms of Service</a></li>
                <li><a href="cookies.php">Cookies Policy</a></li>
            </ul>
        </div>

        <!-- Ikuti Kami -->
        <div class="footer-col">
            <h3>Ikuti Kami</h3>
            <div class="social-media">
                <a href="#"><img src="assets/icons/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="assets/icons/twitter.png" alt="Twitter"></a>
                <a href="#"><img src="assets/icons/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="assets/icons/youtube.png" alt="YouTube"></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        © 2025 JEF Cinema. Hak cipta dilindungi.  
    </div>
</footer>
