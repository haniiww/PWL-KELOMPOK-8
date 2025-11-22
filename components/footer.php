<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

    .footer { 
        margin: 0 auto;    
        padding: 40px 10px 10px;
        color: #fff;
        font-family: "Poppins", sans-serif;
    }

    .footer-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 90px;
        flex-wrap: wrap;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px 0;
    }

    .footer-col {
        display: flex;
        flex-direction: column;
        min-width: 200px;
        gap: 10px;
        position: relative; 
        z-index: 2;
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

    .social-media {
        display: flex;
        gap: 15px;
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

    .map-frame {
        width: 271px;
        height: 148px;
        border: 0;
        border-radius: 8px;
        position: relative;
        z-index: 10;
    }
    
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

        <!-- Company -->
        <div class="footer-col">
            <h3>Company</h3>
            <ul>
                <li><a href="about-us.php">About Us</a></li>
            </ul>

            <div class="social-media">
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Twitter_new_X_logo.png" alt="Twitter"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png" alt="YouTube"></a>
            </div>
        </div>

        <!-- Customer Support -->
        <div class="footer-col">
            <h3>Customer Support</h3>
            <ul>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <!-- Legal -->
        <div class="footer-col">
            <h3>Legal</h3>
            <ul>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="terms-of-service.php">Terms of Service</a></li>
                <li><a href="cookies-policy.php">Cookies Policy</a></li>
            </ul>
        </div>

        <!-- Google Map -->
        <div class="footer-col">
            <h3>Our Location</h3>

            <iframe 
                class="map-frame"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.006379571969!2d109.3433348!3d-0.0504694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59d13a9c7e8f%3A0x7a0c8bc3d86a8f5d!2sAyani%20Mega%20Mall!5e0!3m2!1sid!2sid!4v1732850000000"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>

    <div class="footer-bottom">
        © 2025 JEF Cinema. Hak cipta dilindungi.  
    </div>
</footer>
