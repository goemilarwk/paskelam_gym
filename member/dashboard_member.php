<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Member - Paskalem Gym</title>
    <!-- Memanggil CSS khusus member dari folder luar -->
    <link rel="stylesheet" href="../css/member.css">
</head>
<body>

    <!-- Kontainer utama seukuran layar HP -->
    <div class="mobile-container">
        
        <!-- 1. HEADER & SMART GREETING -->
        <header class="greeting-section">
            <div class="profil-singkat">
                <!-- Nanti PHP akan mendeteksi jam untuk ubah ucapan Pagi/Siang/Malam -->
                <p>Selamat Pagi,</p>
                <!-- Nanti PHP akan menarik nama user yang sedang login -->
                <h1>Joko Susanto! 💪</h1>
            </div>
            <!-- Pesan motivasi acak / reminder -->
            <p class="pesan-sistem">Jangan lupa pemanasan sebelum angkat beban hari ini.</p>
        </header>

        <!-- 2. KARTU MEMBERSHIP & BARCODE CHECK-IN -->
        <section class="card-membership">
            <div class="header-kartu">
                <h3>Paskalem Pass</h3>
                <span class="badge-status aktif">Aktif</span>
            </div>
            
            <div class="barcode-area">
                <!-- Faris bisa ganti pakai gambar QR Code sementara -->
                <img src="../images/dummy-qrcode.png" alt="QR Code Check-in" class="img-qr">
                <p class="instruksi">Tunjukkan QR ini ke Kasir</p>
            </div>
            
            <div class="footer-kartu">
                <p>Masa Berlaku Habis Dalam:</p>
                <h2>24 Hari</h2>
            </div>
        </section>

        <!-- 3. GAMIFIKASI & TARGET KALORI (Killer Feature) -->
        <section class="card-progress">
            <div class="header-progress">
                <h3>Target Bulan Ini 🏆</h3>
                <a href="progress_latihan.php" class="link-detail">Lihat Grafik</a>
            </div>
            
            <div class="progress-bar-container">
                <!-- Lebar (width) div ini nanti diatur otomatis oleh PHP sesuai progres -->
                <div class="progress-bar-fill" style="width: 75%;"></div>
            </div>
            
            <div class="teks-progress">
                <p><strong>3.750</strong> / 5.000 Kalori Terbakar</p>
            </div>
            
            <!-- Pesan apresiasi otomatis dari sistem -->
            <div class="pesan-apresiasi">
                <p>🔥 Sedikit lagi capai target untuk dapat diskon warung 10%!</p>
            </div>
        </section>

        <!-- 3.5 JADWAL PT AKTIF (Muncul jika PHP mendeteksi ada jadwal) -->
        <section class="card-jadwal-pt">
            <div class="header-jadwal">
                <h3>Jadwal PT Terdekat 📅</h3>
            </div>
            <div class="info-jadwal">
                <div class="foto-pt">
                    <!-- Faris bisa pasang foto dummy PT di sini -->
                    <img src="../images/dummy-pt.jpg" alt="Coach Andi">
                </div>
                <div class="detail-jadwal">
                    <!-- Nanti ditarik dari database -->
                    <h4>Coach Mas Andi</h4>
                    <p class="waktu">Besok, 16:00 WIB</p>
                    <p class="fokus">Fokus: Upper Body</p>
                </div>
            </div>
           <a href="jadwal_saya.php" class="btn-outline-jadwal">Kelola Jadwal Saya</a>
        </section>

        <!-- 4. MENU CEPAT (GRID) -->
        <section class="quick-menu-grid">
            <a href="kalkulator_kalori.php" class="menu-item">
                <div class="ikon-menu">🏋️</div>
                <span>Catat Latihan</span>
            </a>
            <a href="booking_pt.php" class="menu-item">
                <div class="ikon-menu">📅</div>
                <span>Booking PT</span>
            </a>
            <a href="riwayat_transaksi.php" class="menu-item">
                <div class="ikon-menu">🛒</div>
                <span>Transaksi</span>
            </a>
            <a href="bantuan_komplain.php" class="menu-item">
                <div class="ikon-menu">🎧</div>
                <span>Help Desk</span>
            </a>
        </section>
        
        <!-- TOMBOL LOGOUT DI BAWAH -->
        <div class="logout-area">
            <a href="../logout.php" class="btn-logout-member">Keluar Aplikasi</a>
        </div>

    </div>

</body>
</html>