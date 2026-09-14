<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Dashboard - Paskalem Gym</title>
    
    <!-- Ini implementasi ide lu: CSS terpisah khusus untuk Manager -->
    <link rel="stylesheet" href="css/manager.css">
</head>
<body>

    <div class="dashboard-container">
        
        <!-- SIDEBAR MENU KIRI -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Paskalem Admin</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#" class="active">Dashboard Utama</a></li>
                <li><a href="#">Validasi Pembayaran</a></li> <!-- Backup kasir -->
                <li><a href="#">Manajemen Karyawan</a></li> <!-- HR & Absensi -->
                <li><a href="#">Keuangan & Inventori</a></li> <!-- Laporan & Stok -->
                <li><a href="#">Data Member</a></li> <!-- Cek status & Edit -->
                <li><a href="#">Kirim Broadcast</a></li> <!-- Notifikasi -->
                <li><a href="logout.php" class="btn-logout">Logout</a></li>
            </ul>
        </aside>

        <!-- AREA KONTEN UTAMA KANAN -->
        <main class="main-content">
            
            <!-- Header Atas -->
            <header class="topbar">
                <!-- Nanti nama ini ditarik pakai PHP dari session login -->
                <h1>Selamat Datang, Manager (Mas Andre)</h1> 
                <div class="tanggal-hari-ini">13 September 2026</div>
            </header>

            <!-- Kumpulan Kartu Statistik (Quick Stats) -->
            <section class="statistik-grid">
                <div class="card-stat">
                    <h3>Pendapatan Bulan Ini</h3>
                    <p class="angka-stat">Rp 15.450.000</p>
                </div>
                <div class="card-stat">
                    <h3>Member Aktif</h3>
                    <p class="angka-stat">128 Orang</p>
                </div>
                <div class="card-stat">
                    <h3>Menunggu Validasi Transfer</h3>
                    <p class="angka-stat peringatan">3 Transaksi</p>
                </div>
                <div class="card-stat">
                    <h3>Kunjungan Hari Ini</h3>
                    <p class="angka-stat">45 Member</p>
                </div>
            </section>

            <!-- Area Tabel Cepat (Aktivitas Terbaru) -->
            <section class="aktivitas-terbaru">
                <h2>Aktivitas Hari Ini</h2>
                <div class="table-responsive">
                    <table class="table-manager">
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>User / Karyawan</th>
                                <th>Aktivitas</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Nanti Nesya pakai PHP (While Loop) untuk isi data tabel ini dari database -->
                            <tr>
                                <td>08:15 WIB</td>
                                <td>Kasir_01 (Siti)</td>
                                <td>Buka Shift</td>
                                <td><span class="badge sukses">Berhasil</span></td>
                            </tr>
                            <tr>
                                <td>09:30 WIB</td>
                                <td>Budi Santoso</td>
                                <td>Transfer Membership 1 Bulan</td>
                                <td><span class="badge warning">Menunggu Validasi</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

        </main>
    </div>

</body>
</html>