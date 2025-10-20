<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .content {
            flex: 1;
            padding: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }
        
        h1 {
            color: #1a2a6c;
            margin-bottom: 1rem;
        }
        
        p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }
        
        /* Gaya untuk footer */
        footer {
            background: linear-gradient(135deg, #2741a5ff, #6573d2ff, #776cc8ff);
            color: white;
            padding: 3rem 1rem;
            margin-top: auto;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .footer-section h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: #fdbb2d;
        }
        
        .footer-section p {
            line-height: 1.6;
            margin-bottom: 1rem;
            color: #ddd;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }
        
        .footer-links a:hover {
            color: #fdbb2d;
            transform: translateX(5px);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
            color: white;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background-color: #fdbb2d;
            transform: translateY(-5px);
        }
        
        .footer-bottom {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-bottom p {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            color: #ddd;
        }
        
        .heart {
            color: #ff4d4d;
            animation: heartbeat 1.5s infinite;
        }
        
        @keyframes heartbeat {
            0% { transform: scale(1); }
            5% { transform: scale(1.1); }
            10% { transform: scale(1); }
            15% { transform: scale(1.1); }
            20% { transform: scale(1); }
            100% { transform: scale(1); }
        }
        
        /* Responsif */
        @media (max-width: 768px) {
            .footer-container {
                grid-template-columns: 1fr;
            }
            
            .footer-section {
                text-align: center;
            }
            
            .footer-section h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <!-- Footer yang dapat di-include -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>Kami adalah perusahaan abal-abal berkedok teknologi</p>
                <div class="social-links">
                    <a href="#"><i>FB</i></a>
                    <a href="#"><i>TW</i></a>
                    <a href="#"><i>IG</i></a>
                    <a href="#"><i>IN</i></a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Link Cepat</h3>
                <ul class="footer-links">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Portofolio</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Kontak</h3>
                <ul class="footer-links">
                    <li><a href="#">📧 info@website.com</a></li>
                    <li><a href="#">📞 +62 812 3456 7890</a></li>
                    <li><a href="#">📍 Jl. Contoh No. 123, Jakarta</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <span id="currentYear"></span> Website Saya. Dibuat dengan <span class="heart">❤</span> oleh Toro.</p>
        </div>
    </footer>

    <script>
        // Mengatur tahun secara otomatis
        document.getElementById('currentYear').textContent = new Date().getFullYear();
    </script>
</body>
</html>