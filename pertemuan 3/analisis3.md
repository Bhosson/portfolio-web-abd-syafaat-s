INI ADALAH ANALISIS DARI TUGAS YANG KE TIGA

`<!DOCTYPE html>`: Memberi tahu browser bahwa dokumen ini adalah HTML.

`<html lang="id">`: atribut bahasa yang menunjukkan bahwa bahasa utama halaman ini adalah Bahasa Indonesia.

`<head>`: bagian dari dokumen HTML yang menyimpan informasi tentang halaman (metadata), bukan isi yang ditampilkan langsung di browser.

`<meta charset="UTF-8">`
  ~<metaname="viewport"content="width=device-width, `initial-scale=1.0">`
  `<title>Profil Abd Syafaat S</title>`
  `<style>`
  Analisisnya:
  Menentukan encoding karakter halaman menggunakan UTF-8, Mengatur tampilan responsif pada perangkat mobile,
  Menentukan judul halaman yang muncul di tab browser, hasil pencarian Google, dan bookmark,Tag pembuka untuk menuliskan CSS internal (langsung di dalam file HTML).

~body {~
     font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom, #001d3d, #003566);
      overflow-x: hidden;
      animation: skyCycle 30s linear infinite;~
      Analisisnya:

      font-family: Arial, sans-serif; memastikan semua teks menggunakan font yang bersih & modern, margin: 0; padding: 0;menghapus jarak default bawaan browser supaya layout lebih konsisten dan rapi,background: linear-gradient(to bottom, #001d3d, #003566);
        memberikan efek gradasi vertikal dari biru tua (#001d3d) ke biru lebih terang (#003566).
        menciptakan nuansa malam atau langit gelap, cocok untuk tema profil yang elegan.
        verflow-x: hidden; mencegah scroll horizontal, jadi konten yang melebar ke samping tidak membuat halaman bisa digeser ke kanan-kiri. Ini menjaga tampilan tetap fokus ke atas-bawah.
        animation: skyCycle 30s linear infinite;
        memberikan efek animasi dengan nama skyCycle.
        durasi 30 detik, berjalan dengan kecepatan konstan (linear), dan berulang terus-menerus (infinite).
        meskipun definisi @keyframes skyCycle belum ditampilkan, biasanya ini dipakai untuk memberi efek perubahan warna langit atau gradasi bergerak.

@keyframes skyCycle {
      0%   { background: linear-gradient(to bottom, #001d3d, #003566); }  
      25%  { background: linear-gradient(to bottom, #ff9966, #ff5e62); } 
      50%  { background: linear-gradient(to bottom, #87ceeb, #f0fdfa); } 
      75%  { background: linear-gradient(to bottom, #f59e0b, #ef4444); } 
      100% { background: linear-gradient(to bottom, #001d3d, #003566); } 
    }

    Analisisnya:
    Memberikan ilusi pergantian waktu (malam → pagi → siang → sore → malam).Menjadikan halaman web lebih dinamis dan imersif, seolah-olah latarnya hidup mengikuti waktu.Sangat cocok dipadukan dengan desain profil, portofolio, atau tema storytelling, karena memberi nuansa emosional dan visual yang kuat.

.star {
      position: fixed;
      background: white;
      border-radius: 50%;
      width: 3px;
      height: 3px;
      top: 0;
      left: 0;
      box-shadow: 100px 200px white, 300px 150px white, 500px 100px white,
                  700px 250px white, 900px 180px white, 200px 300px white,
                  400px 350px white, 800px 320px white, 1000px 200px white;
      animation: twinkle 3s infinite alternate;
      z-index: 0;
    }
    @keyframes twinkle {
      from { opacity: 0.2; }
      to   { opacity: 1; }
    }

    Analisisnya:
    Menciptakan ilusi langit berbintang yang berkedip,Efisien, karena hanya menggunakan 1 elemen HTML ditambah banyak box-shadow untuk menyebarkan bintang, Dikombinasikan dengan animasi skyCycle, halamanmu akan punya langit hidup lengkap dengan bintang yang berkelip

header {
      background: #0284c7;  :memberi latar biru cerah (kode warna biru muda ke arah cyan).
      color: white;            :semua teks di dalam header berwarna putih, agar kontras jelas.
      padding: 20px;            :memberi jarak dalam (atas, bawah, kiri, kanan), sehingga isi header
                                 tidak terlalu rapat ke tepi.
      text-align: center;       :emua teks atau elemen dalam header diratakan ke tengah, cocok untuk 
                                judul atau nama profil.
      position: sticky;         :
      top: 0;                   :header akan menempel di bagian atas layar saat halaman di-scroll ke bawah.
      z-index: 1000;            :memastikan header selalu berada di atas elemen lain (misalnya bintang,
                                 animasi background, atau konten utama).
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);    :menambahkan bayangan lembut di bawah header, memberi kesan melayang dan memisahkannya dari konten di bawahnya.
    }

header .profil {
      display: flex;
      flex-direction: column;
      align-items: center;
      Analisis:
      header .profil → menggunakan flexbox dengan arah kolom, sehingga foto profil + teks/elemen lain ditumpuk vertikal dan dipusatkan (align-items: center;)

    }
    header img {        :menampilkan foto profil
      width: 120px;     :ukuran seragam
      height: 120px;
      border-radius: 50%;:membuat foto berbentuk lingkaran.
      border: 3px solid white;  :bingkai putih agar foto terlihat menonjol di atas background biru header.
      object-fit: cover;    :memastikan foto tidak gepeng atau melar, selalu proporsional.
      margin-bottom: 10px;  :beri jarak dengan elemen setelahnya
    }

    nav {
      margin-top: 10px; :memberi jarak di bawah foto profil.
    }
    nav a {     :link navigasi ditata agar
      margin: 0 15px; :ada jarak antar link
      color: white; : Warna putih agar kontras dengan header biru
      text-decoration: none;    :tanpa garis dibawah default
      font-weight: bold;    : teks tebal
    }
    nav a:hover {   :efek hover sederhana (garis bawah muncul kembali), memberi interaktivitas.
      text-decoration: underline;
    }

    section {
      padding: 60px 20px;
      position: relative;
      z-index: 1;

      Analisis:
      section → diberi padding besar (60px 20px) untuk ruang lapang.

      position: relative; z-index: 1; → konten selalu muncul di atas elemen latar (bintang/animasi background).
    }
    h2 {
      color: #0284c7;
      text-align: center;

      Analisisnya:
      judul tiap section dipusatkan dengan warna biru konsisten (#0284c7), sesuai tema header.
    }
    .card {
      background: white;
      padding: 20px;
      margin: 20px auto;
      border-radius: 12px;
      max-width: 800px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;

      Analisisnya:
      desain kotak konten yang modern:Latar putih, padding 20px, radius 12px (membulat halus).Lebar dibatasi max-width: 800px agar nyaman dibaca (tidak terlalu lebar di layar besar).margin: 20px auto; → posisi selalu di tengah dengan jarak antar card.box-shadow ringan untuk efek melayang.Transisi halus (transition) untuk efek animasi.
    }
  `card:hover`

  `transform: translateY(-10px);`

  `box-shadow: 0 10px 20px rgba(0,0,0,0.2);`
    

    Analisisnya:
    saat kursor diarahkan, card naik sedikit (transform: translateY(-10px)) dengan bayangan lebih tebal → efek interaktif & elegan.

    
   `position: fixed;`  :matahari selalu berada di posisi yang sama di layar, tidak ikut bergeser saat scroll.

   `bottom: 150px;`    :diposisikan di tengah bawah layar, dengan koreksi margin agar benar-benar simetris.

   `width & height`: 100px` : matahari berbentuk lingkaran berukuran sedang.

   `border-radius`: 50%` :membuatnya bulat sempurna.

  `background`: radial-gradient(circle, #fbbf24, 
  #f59e0b`:gradasi dari kuning cerah ke oranye, menciptakan efek bola bercahaya.

  `box-shadow`: 0 0 60px rgba(251,191,36,0.6)` :menambahkan      cahaya lembut di sekeliling, membuatnya terlihat bersinar

  `<div class="star"></div>`

  `<div class="sun"></div>`

  `<div class="cloud cloud1"></div>`

  `<div class="cloud cloud2"></div>`

  `<div class="mountain mountain1"></div>`

  `<div class="mountain mountain2"></div>`

  `<div class="bird"></div>`

  `<div class="bird bird2"></div>`

  Analsisinya:
  Potongan kode ini adalah kerangka visual untuk ilustrasi pemandangan alam (langit, matahari, awan, gunung, burung) berbasis `<div>` yang akan dibentuk dan dianimasikan menggunakan CSS. Jadi HTML ini hanya “tulang”, sedangkan wujud dan keindahannya muncul dari CSS.

`<header>`

`<div class="profil">`

`<img src="images/foto-profil.jpg" alt="Foto Abd Syafaat S">`

`<h1>Abd Syafaat S</h1>`

`</div>`

`<nav>`

`<a href="#tentang">Tentang Saya</a>`

`<a href="#hobi">Hobi</a>`

`<a href="#proyek">Proyek Tugas</a>`

`<a href="#kontak">Kontak</a>`

`</nav>`

Analisisnya:

`<img>` digunakan untuk foto profil ->sumbernya images/foto-profil.jpg, alt="Foto Abd Syafaat S" bagus untuk aksesibilitas (membantu screen reader & jika gambar gagal dimuat),`<h1>` menampilkan nama Anda -> tepat, karena ini identitas utama halaman.
`</header>`,Menggunakan anchor `<a>` untuk mengarahkan ke bagian lain dalam halaman (#tentang, #hobi, #proyek, #kontak).

`<section id="tentang">`

`<h2>Tentang Saya</h2>`

`<div class="card">`
      `<p>`Halo, saya `<b>`Abd Syafaat S.`</b> `Saya berasal dari Enrekang tepatnya di Salukanan yang terkenal dengan salah satu beras termahal di Indonesia yaitu pulu mandoti, sekarang saya berumur 19 tahun , Saya anak ke dua dari tiga bersaudara dari bapak seorang petani dan ibu rumah tangga . Saya tertarik pada olahraga dan saya suka naik gunung.`</p>`

  `</div>`

`  </section>`

Analisisnya:
`<section id="tentang">` ->bagus untuk memisahkan bagian "Tentang Saya". ID ini juga sesuai dengan navigasi di header (#tentang).
`<h2>` ->tepat digunakan, karena` <h1> `biasanya dipakai untuk judul utama di header. Ini menjaga hirarki heading yang baik untuk SEO dan aksesibilitas.
`<div class="card">` ->berguna untuk styling, memberi kesan konten dibungkus seperti kartu.
`<p>` ->teks deskripsi sudah rapi dalam paragraf.

`<section id="hobi">`

`<h2>Hobi</h2>`

`<div class="card">`

`<ul>`

`<li>Futsal</li>`

`<li>Voli</li>`

`<li>Naik gunung Latimojong</li>`

`<li>Butuh info Balu Bialo</li>`

`<li>Butuh info Bawakaraeng</li>`

`</ul>`

`</div>`

`</section>`

Analisisnya:
`<section id="hobi">` ->sudah tepat untuk memisahkan bagian Hobi dalam halaman, konsisten dengan navigasi di header (#hobi).
`<h2> ->` menjaga hierarki heading yang benar (bagian ini memang subjudul dari halaman).
`<div class="card">` -> berfungsi sebagai pembungkus konten, cocok untuk styling visual.
`<ul> `-> penggunaan daftar tak berurutan (bullet points) sudah sesuai untuk menampilkan hobi.

`<section id="proyek">`

`<h2>Proyek Tugas</h2>`

`<div class="card">`

`<p>Berikut beberapa proyek dan tugas yang sudah saya kerjakan di gitHub.</p>`

`<a href="https://github.com/Bhosson" target="_blank">github.com/Bhosson</a>`

`</div>`

`</section>`

Analisisnya:
`<section id="proyek">` ->sudah tepat untuk memisahkan bagian proyek/tugas dalam portfolio, konsisten dengan navigasi di header (#proyek).
`<h2>` -> menjaga hierarki heading dengan benar.
`<div class="card">` -> bagus untuk membungkus konten agar bisa diberi style khusus.
`<p>` -> digunakan untuk deskripsi singkat, sudah tepat.
`<a>` -> link eksternal menuju profil GitHub, dengan target="_blank" supaya terbuka di tab baru -> sangat baik dari sisi UX.

`<section id="kontak">`

`<h2>Kontak</h2>`

`<div class="card">`

`<p>Email: abd4318@sma.belajar.id</p>`

`<p>GitHub: <a href="https://github.com/Bhosson" target="_blank">github.com/Bhosson</a></p>`

`<p>WhatsApp: <a href="https://wa.me/628123456789" target="_blank" class="whatsapp-link">+62 812-3456-789</a></p>`

`</div>`

`</section>`

Anlisisnya:
`<section id="kontak">` -> sudah tepat sebagai blok khusus untuk informasi kontak, konsisten dengan navigasi di header (#kontak).
`<h2>` -> tepat digunakan sebagai judul bagian.
`<div class="card">` -> memberi ruang styling agar kontak tampil rapi dan menonjol.
`<p>` -> digunakan untuk setiap baris kontak, membuatnya sederhana dan mudah dibaca.
`<a>` -> sudah dipakai untuk GitHub & WhatsApp, dengan target="_blank" → bagus untuk membuka di tab baru.

`<footer>`

`<p>© 2025 Abd Syafaat S  dengan NIM 240210502012 Mahasiswa Teknik Komputer</p>`

`</footer>`

`</body>`

`</html>`

Analisisnya:
`<footer>` -> sudah tepat digunakan, karena ini bagian bawah halaman yang biasanya berisi hak cipta, informasi tambahan, atau link singkat.
`<p>` -> isi teks disajikan sebagai paragraf, cukup sederhana.
Penempatan sudah benar: berada sebelum `</body>` dan diakhiri dengan `</html>.`

