    <!-- components/footer.php -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
    
    .footer { 
        margin: 0 auto;    
        padding: 40px 10px 10px;
        color: #fff;
        font-family: "poppins";
    }

    .footer-container {
        display: flex;
        justify-content: center;
        align-items: flex-start;  /* <-- Biar semua kolom rata atas */
        gap: 90px;               /* Jarak antar kolom */
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
                <li><a href="about_us.php">About Us</a></li>
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
                <li><a href="terms-of-service.php">Terms of Service</a></li>
                <li><a href="cookies.php">Cookies Policy</a></li>
            </ul>
        </div>

        <!-- Ikuti Kami -->
        <div class="footer-col">
            <h3>Follow Us</h3>
            <div class="social-media">
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Twitter_new_X_logo.png" alt="Twitter"></a>
                <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAb1BMVEU7V53///8gRZUyUZrn6vKKl785VZxAW6Dh5O5yg7QmSZbR1uUxUJojR5Y2U5vx8vdbcKqyutSXosVidq3a3urM0uPCyd6ps9B7i7n09vrx9Pm4wNikrs1MZKRYbqp/j7tqfbGapsiPnMIAMY0VP5JdM9iBAAAD+UlEQVR4nO3dbVOjMBSG4fDSUEISXtRatta67v7/37hF7eiMs5iKyTmHee4Zx08i13RIhACq7K1mqCu1lqp6aC4w9fqtr5z1mnrHfiztrav6D8K2M+vRXdKmay/CsiiodydKRVG+ClvrqfclUt62L8JunZ/gVNFNwt5Q70fETH8WVusbZN7TVaYaR70XUXONGiz1TkTNDqpe60D6mq/Vqg/D6UCk3gOEEEIIIYQQQgghhMjz1hr3ofz8ZZwxxlpbFFr2NUJ9tvmbzf2u2ZbjmGXZOI6/2rLc3jZ3u0P/MGz2N0dtnZPJ9NYdN7sy+7p2q+QRtc0f70N0b0vY0tLGDuE8eUJtdH8NT5zQ2vsrfbKEOj+NVwMlCQvffO2RLDRP3/EJEubD94BihPm1Q6g0Yb77LlCIcAFQhtBdPwvKEprNAqAEoX9cAhQg1KZdudB9e54QIvTdMiB/Yb5dubA4LQSyF7qrzucFCpd/hNyFi49C7kK9dCBlLzSH1QuXA3kLi/3ahWbBaaEMoVv2Nzd/4cLTJgFC+3ydpd3eNp+65bz2dMVhOB5ORzstjX6OMVC50D9otntnJK74ahsIHHKhDw/qYxjwRuyzg0UdBKzlPncWNpQeBD86GLYaKvQQfCnoxOIg9iA8Z+4ChE+Sn410IUu+Vt4s+F7IhL8VPM6ECXeSD0OVB1xIvJc7Gaow4e/VC59XL9xInvAhhFBAEELIPwgh5B+EEPIPQgj5ByGE/INQhlD/vzChndnCy1aoq2YyIUI9t4UpWqMPW+VdUkl72T9wHXtJd6sX9rQXxRMIid+fm0C4p51OEggfaVfBEwiJl/njC0fiVfD4Qup1/vhC6nX++ELqdf74QupV8PhC6lum4guPxKdP8YXUd3lHF7bUN4VFF96uXkg9HcYXPlDfMhVdSH4pLrrwhvoO4uhC8v+uEls4Ug800YUl9WQRXdis/jOkfxgjtpD+HunYwj31ZBFd2FFPFtGF1L7oQvrpMLaQ+lJifCHxytqUfyq3MwUg5n6+JD93mohupj8Bq9ynvzMbYACcbx33YswFIYT8gxBC/kEIIf8ghJB/EELIPwgh5B+EEPIPQgj5ByGE/IMQQv5BCCH/IISQfxBCyD8IIeQfhBDyD0II+QchhPyDEEL+QQgh/yCEkH8QQsg/CCHkH4QQ8g9CCPmXUEj01rNUQl2pmuZlRKmEvlZE76ZPJbSDamjeZJNK6BpF9PrBREJdZSrrSV7Wk0ho+rMw6yimnTTCossmYWsJhtMkQm/bF2FW2vSfYgphYadfMgmztkv+auz4Qm26NrsIs6yvnPUplXGF2ltX9a9bUZfNNUNd/SThi+IKq3poLlv5B3kiS8fmdy97AAAAAElFTkSuQmCC" alt="Facebook"></a>
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png" alt="YouTube"></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        © 2025 JEF Cinema. Hak cipta dilindungi.  
    </div>
</footer>



