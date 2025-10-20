<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Baru</title>
    <style>
        /* Reset dan variabel */
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --text-color: #333;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* Header */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem 0;
            box-shadow: var(--shadow);
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 0.5rem;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav li {
            margin-left: 1.5rem;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            padding: 0.5rem 0.75rem;
            border-radius: 4px;
        }
        
        nav a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        /* Main Content */
        main {
            flex: 1;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 2rem;
        }
        
        h2 {
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--light-color);
            font-size: 2rem;
        }
        
        p {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            line-height: 1.8;
        }
        
        .highlight {
            background-color: var(--light-color);
            padding: 1.5rem;
            border-radius: 6px;
            border-left: 4px solid var(--primary-color);
            margin: 1.5rem 0;
        }
        
        /* Footer */
        footer {
            background-color: var(--secondary-color);
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 2rem;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        /* Responsif */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav li {
                margin: 0.5rem;
            }
            
            main {
                margin: 1rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <i>🌐</i> Situs Saya
            </div>
            <nav>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h2>Halaman Baru</h2>
        <p>Halo Toro. Selamat datang di halaman baru kami yang telah didesain dengan lebih menarik.</p>
        
        <div class="highlight">
            <p>Ini adalah contoh elemen yang disorot untuk menarik perhatian pengunjung ke konten penting.</p>
        </div>
        
        <p>Halaman ini menggunakan desain modern dengan skema warna yang harmonis dan tata letak yang responsif. Desain ini akan terlihat bagus di berbagai perangkat, mulai dari desktop hingga ponsel.</p>
    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; 2023 Situs Saya. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>
</html>