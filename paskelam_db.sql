-- Membuat Database
CREATE DATABASE IF NOT EXISTS paskelam_db;
USE paskelam_db;

-- 1. TABEL USERS (Pusat Autentikasi Semua Role)
CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nama_lengkap VARCHAR(100) NOT NULL,
    role ENUM('manager', 'kasir', 'pt', 'member') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. TABEL PROFIL MEMBER (Khusus End-User)
CREATE TABLE profil_member (
    id_profil INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    tanggal_lahir DATE NOT NULL, -- Untuk kalkulasi umur dinamis
    tinggi_badan INT NOT NULL, -- Dalam cm
    berat_badan_awal DECIMAL(5,2) NOT NULL, -- Dalam kg
    goals VARCHAR(100), -- Misal: "Turun Berat Badan", "Bulking"
    masa_aktif DATE, -- Batas akhir membership
    FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE
);

-- 3. TABEL JADWAL PT (Untuk Booking & Reschedule)
CREATE TABLE jadwal_pt (
    id_jadwal INT AUTO_INCREMENT PRIMARY KEY,
    id_pt INT NOT NULL, -- Mengambil id_user yang rolenya 'pt'
    id_member INT, -- Bisa NULL jika slot belum dibooking
    waktu_sesi DATETIME NOT NULL,
    status ENUM('Tersedia', 'Dibooking', 'Selesai', 'Batal') DEFAULT 'Tersedia',
    fokus_latihan VARCHAR(100),
    catatan_pt TEXT,
    FOREIGN KEY (id_pt) REFERENCES users(id_user),
    FOREIGN KEY (id_member) REFERENCES users(id_user)
);

-- 4. TABEL TRANSAKSI (E-Commerce & Membership)
CREATE TABLE transaksi (
    id_transaksi INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL, -- Member yang beli
    id_kasir INT, -- Kasir yang memvalidasi (Bisa NULL sebelum divalidasi)
    jenis_transaksi ENUM('Membership', 'Produk', 'Booking PT') NOT NULL,
    total_harga DECIMAL(10,2) NOT NULL,
    bukti_transfer VARCHAR(255), -- Nama file foto bukti transfer
    status_pembayaran ENUM('Menunggu', 'Lunas', 'Ditolak') DEFAULT 'Menunggu',
    tanggal_transaksi TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_user) REFERENCES users(id_user),
    FOREIGN KEY (id_kasir) REFERENCES users(id_user)
);

-- (Opsional) Insert Data Dummy Manager biar lu bisa langsung login
INSERT INTO users (username, password, nama_lengkap, role) 
VALUES ('admin_andre', 'password123', 'Mas Andre', 'manager');