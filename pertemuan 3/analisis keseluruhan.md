1. Struktur Dokumen

`<!DOCTYPE html> & <html lang="id">` :menunjukkan ini dokumen HTML5, dengan bahasa utama Bahasa Indonesia.

`<head>` : sudah rapi: ada meta charset, viewport, title, dan style internal.

`<body>`: berisi elemen dekorasi (bintang, matahari, awan, gunung, burung), lalu konten utama (header, section, footer).

Navigasi menggunakan anchor link yang mengarah ke section tertentu (#tentang, #hobi, dst.).


2. Tampilan & Visualisasi

Website ini punya tema alam / langit hidup:

Latar Dinamis (skyCycle) : simulasi siklus langit (malam → pagi → siang → sore → malam).

Bintang Berkelip (.star + twinkle) : memberi kesan realistis pada langit malam.

Matahari (.sun + animasi floatSun & sunPath) : bergerak naik-turun mengikuti jalur seolah terbit & tenggelam.

Awan (.cloud1, .cloud2) : bergerak perlahan melintasi langit.

Gunung (.mountain1, .mountain2) : membentuk siluet pegunungan dengan animasi sedikit bergeser.

Burung (.bird) : bergerak melintas layar, menambah dinamika.

🎨 Hasilnya: background bukan sekadar gambar statis, tapi alami dan hidup.


3. Header & Navigasi

Header sticky: selalu menempel di atas saat scroll → navigasi mudah diakses.

Foto profil bundar dengan border putih → fokus visual yang bagus.

Navigasi teks putih → kontras dengan header biru, hover menambahkan underline → memberi feedback ke pengguna.


4. Section Konten

Tentang Saya → berisi biodata singkat dengan cerita personal (asal, keluarga, hobi).

Hobi → dalam bentuk list sederhana.

Proyek Tugas → ada link ke GitHub (relevan untuk portofolio mahasiswa/teknisi).

Kontak : menyertakan email, GitHub, dan WhatsApp dengan link langsung.

➡ Semua konten dibungkus dengan .card : kotak putih dengan shadow, hover effect (melayang ke atas). Ini menambah kesan modern dan interaktif.


 5. Footer

Background biru konsisten dengan header.

Berisi identitas (copyright ©, nama, NIM, jurusan).

Posisi jelas di akhir halaman.


6. Interaktivitas & UX

Animasi smooth (matahari, awan, burung, bintang, skyCycle).

Hover effect pada navigasi & card : memberi feedback ke pengguna.

Link aktif (GitHub & WhatsApp).

Struktur konten rapi, memudahkan pengunjung mengenal profil.