`1. Struktur Dasar HTML`

`<!DOCTYPE html>`
`<html lang="id">`
`<head>`
  `<meta charset="UTF-8">`
  `<meta name="viewport" content="width=device-width, `initial-scale=1.0">`
 ` <title>Profil Abd Syafaat S</title>`

`<!DOCTYPE html>` → mendefinisikan dokumen sebagai HTML5.

`<html lang="id">` → bahasa utama halaman: Bahasa Indonesia.

`<meta charset="UTF-8">` → memastikan teks mendukung karakter internasional.

`<meta name="viewport"...>` → responsif di perangkat mobile.

`<title> `→ judul tab browser.

`2.CSS Reset dan Global Style`

{
  `margin: 0;`
  `padding: 0;`
  `box-sizing: border-box;`
  `scroll-behavior: smooth;`
}

`body `
  `font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;`
  `background: linear-gradient(135deg, #064e3b, #065f46, #064e3b);`
  `color: #1f2937;`
  `line-height: 1.7;`

Reset CSS (margin: 0; padding: 0;).

box-sizing: border-box; → ukuran elemen lebih mudah diatur.

scroll-behavior: smooth; → scroll ke anchor lebih halus.

Background gradient hijau gelap → memberi nuansa segar.

3.Header dan Animasi

`header {`
  `background: rgba(5, 150, 105, 0.92);`
  `backdrop-filter: blur(6px);`
  ...
  `animation: slideDown 1s ease-in-out;`
}
`@keyframes slideDown { ... }`

Header transparan dengan efek blur.

Posisi sticky → selalu tampil di atas.

Animasi slideDown saat halaman dimuat.

4.Bagian Profil (Foto + Nama)

`<div class="profil">`
  `<img src="images/foto-profil.jpg" alt="Foto Abd Syafaat S">`
  `<h1>Abd Syafaat S</h1>`
`</div>`

Foto profil berbentuk lingkaran dengan border putih.

Animasi onePiece saat masuk.

Hover foto → zoom in sedikit.

5.Navigasi

`<nav>`
 ` <a href="#tentang">Tentang Saya</a>`
  `<a href="#hobi">Hobi</a>`
  `<a href="#proyek">Proyek Tugas</a>`
  `<a href="#kontak">Kontak</a>`
  `<a href="galeri.html">Galeri</a>`
`</nav>`

Menu navigasi dengan efek hover underline animasi.

Mendukung responsif (flex-wrap).

Ada link tambahan ke galeri.html.

6.Section Judul (h2) dengan Animasi

`h2 {`
 ` opacity: 0;`
  `transform: translateY(40px);`
  `transition: all 0.8s ease;`
}`
`h2.show {`
 ` opacity: 1;`
  `transform: translateY(0);`
  `animation: onePiece 1.3s ease-out;`
}

Judul tiap section (h2) muncul dengan animasi saat discroll.

Ada garis dekorasi di bawah teks.

7.Kartu (Card) Konten

`.card {`
 ` background: #f9fafb;`
 ` padding: 25px;`
 ` margin: 20px auto;`
  `border-radius: 15px;`
  `box-shadow: 0 8px 16px rgba(0,0,0,0.15);`
  `transition: all 0.8s ease-out;`
  `opacity: 0;`
}`
`.card:hover {`
 ` transform: translateY(-10px) scale(1.02);`
}`

Tiap konten dalam card dengan bayangan lembut.

Muncul perlahan saat discroll.

Efek hover: naik sedikit + zoom in.

8.Section Tentang Saya

`<section id="tentang">`
  `<h2>Tentang Saya</h2>`
  `<div class="card fade-left">`
  `  <p>Halo, saya <b>Abd Syafaat S.</b> ...</p>`
 ` </div>`
`</section>`

Menjelaskan identitas diri.

Animasi masuk dari kiri (fade-left)

9.Section Hobi

`<section id="hobi">`
 ` <h2>Hobi</h2>`
 ` <div class="card fade-right">`
  `  <ul>`
   `   <li>Futsal</li>`
    `  <li>Voli</li>`
      ...
    `</ul>`
  `</div>`
`</section>`

Daftar hobi.

Animasi fade-right untuk card.

Item `<li>` masuk satu per satu dengan delay.

10.Section Proyek

`<section id="proyek">`
  `<h2>Proyek Tugas</h2>`
  `<div class="card fade-up">
    `<p>Berikut beberapa proyek...</p>`
    `<a href="https://github.com/Bhosson" ``target="_blank">github.com/Bhosson</a>`
 ` </div>`
`</section>`

Menampilkan link GitHub.

Animasi fade-up.

11.Section Kontak

`<section id="kontak">`
  `<h2>Kontak</h2>`
  `<div class="card fade-down">`
    `<p>Email: ...</p>`
   ` <p>GitHub: ...</p>`
  `  <p>WhatsApp: ...</p>`
 ` </div>`
`</section>`

Email, GitHub, WhatsApp dengan style berbeda (WhatsApp berwarna hijau).

Animasi fade-down.

12.Footer

`<footer>`
  `<p>© 2025 Abd Syafaat S dengan NIM 240210502012 Mahasiswa Teknik Komputer</p>`
`</footer>`

Informasi hak cipta + identitas mahasiswa.

13.JavaScript Animasi Scroll

`const cards = document.querySelectorAll('.card');`
`const hobbyItems = document.querySelectorAll('#hobi ul li');`
`const headings = document.querySelectorAll('h2');`

`function showOnScroll() {`
  `const triggerBottom = window.innerHeight * 0.85;`
  ...
}`
`window.addEventListener('scroll', showOnScroll);`
`window.addEventListener('load', showOnScroll);`

Mengatur animasi muncul untuk:

Card (konten utama).

List item hobi (satu per satu).

Heading (judul section).

TriggerBottom → elemen muncul saat posisinya 85% dari tinggi layar.

KESIMPULANNYA:
Struktur rapi dan terorganisir.

Responsif dengan CSS flex & media query.

Interaktif dengan animasi masuk & hover.

Navigasi sudah lengkap termasuk link ke galeri.html.

Potensi perbaikan:

Tambahkan alt text lebih deskriptif di foto.

Optimalkan performa dengan meminimalkan CSS inline ke file eksternal.

Tambahkan favicon agar tab browser lebih personal.



