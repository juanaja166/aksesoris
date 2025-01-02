<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acsesoris Cantik</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <!-- Menambahkan Google Font Great Vibes -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        /* Styling untuk produk */
        #divProducts {
            padding: 20px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 kolom */
            gap: 15px; /* Jarak antar produk */
        }

        .product {
            border: 2px solid transparent; /* Border transparan sementara */
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            background-color: #f9f9f9; /* Warna latar belakang */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            transition: transform 0.3s ease, border 0.3s ease; /* Animasi efek hover */
            width: 150px; /* Lebar frame */
            height: 150px; /* Tinggi frame */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: #fff;
            background-image: linear-gradient(135deg, #f8c8d1, #f5a9b8); /* Gradient pink nude */
        }

        .product:hover {
            transform: scale(1.05); /* Perbesar sedikit saat hover */
            border-color: #f5a9b8; /* Ganti warna border saat hover */
        }

        .product-image {
            width: 80px; /* Ukuran gambar lebih kecil */
            height: 80px;
            object-fit: cover;
            margin-bottom: 5px;
            border-radius: 4px; /* Opsional: sudut gambar sedikit membulat */
        }

        .product h3 {
            margin: 5px 0;
            font-size: 0.9em; /* Ukuran font lebih kecil */
            color: #333;
        }

        .product p {
            margin: 2px 0;
            color: #666;
            font-size: 0.8em; /* Ukuran font lebih kecil */
        }

        /* Styling untuk judul "Our Collection" */
        #divProducts h2 {
            color: #ff99cc; /* Warna pink muda banget */
            font-size: 2.5em; /* Ukuran font lebih besar */
            font-weight: bold;
            text-align: center;
            font-family: 'Great Vibes', cursive; /* Font estetika */
            background: linear-gradient(45deg, #ff99cc, #ff66b2); /* Gradien untuk efek 3D */
            -webkit-background-clip: text; /* Efek tekstur 3D */
            color: transparent; /* Membuat teks transparan agar gradien terlihat */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2), -2px -2px 4px rgba(0, 0, 0, 0.2); /* Efek bayangan untuk 3D */
        }
    </style>
</head>
<body>
    <div id="divWrapper">
        <header id="divHeader">Welcome To Acsesoris Cantik Collection</header>
        <div id="divLine"></div>
        <nav id="divLinks">
            <div id="divNav">
                <ul>
                    <li><a href="forminputdatadiri.php">Continue</a></li>
                </ul>
            </div>
        </nav>
        <div id="divLine"></div>
        
        <!-- Bagian Produk -->
        <section id="divProducts">
            <h2>Our Collection</h2>
            <div class="product-grid">
                <!-- Produk 1 -->
                <div class="product">
                    <img src="kalung-emas.jpg" alt="Kalung Emas" class="product-image">
                    <h3>Kalung Emas</h3>
                    <p>Harga: Rp. 1.500.000</p>
                </div>
                <!-- Produk 2 -->
                <div class="product">
                    <img src="gelang-berlian.jpg" alt="Gelang Berlian" class="product-image">
                    <h3>Gelang Berlian</h3>
                    <p>Harga: Rp. 3.000.000</p>
                </div>
                <!-- Produk 3 -->
                <div class="product">
                    <img src="anting-perak.jpg" alt="Anting Perak" class="product-image">
                    <h3>Anting Perak</h3>
                    <p>Harga: Rp. 750.000</p>
                </div>
                <!-- Produk 4 -->
                <div class="product">
                    <img src="cincin-permata.jpg" alt="Cincin Permata" class="product-image">
                    <h3>Cincin Permata</h3>
                    <p>Harga: Rp. 2.500.000</p>
                </div>
                <!-- Produk 5 -->
                <div class="product">
                    <img src="bros-emas.jpg" alt="Bros Emas" class="product-image">
                    <h3>Bros Emas</h3>
                    <p>Harga: Rp. 800.000</p>
                </div>
                <!-- Produk 6 -->
                <div class="product">
                    <img src="gelang-kulit.jpg" alt="Gelang Kulit" class="product-image">
                    <h3>Gelang Kulit</h3>
                    <p>Harga: Rp. 300.000</p>
                </div>
                <!-- Produk 7 -->
                <div class="product">
                    <img src="kalung-mutiara.jpg" alt="Kalung Mutiara" class="product-image">
                    <h3>Kalung Mutiara</h3>
                    <p>Harga: Rp. 2.000.000</p>
                </div>
                <!-- Produk 8 -->
                <div class="product">
                    <img src="anting-kristal.jpg" alt="Anting Kristal" class="product-image">
                    <h3>Anting Kristal</h3>
                    <p>Harga: Rp. 1.200.000</p>
                </div>
                <!-- Produk 9 -->
                <div class="product">
                    <img src="cincin-emas.jpg" alt="Cincin Emas" class="product-image">
                    <h3>Cincin Emas</h3>
                    <p>Harga: Rp. 1.800.000</p>
                </div>
            </div>
        </section>
        
        <footer id="divFooter">AlsyaCollection</footer>
    </div>
</body>
</html>
