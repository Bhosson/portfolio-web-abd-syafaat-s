1.Struktur Dasar HTML

`<!DOCTYPE html>`
`<html lang="id">`
`<head>`
  `<meta charset="UTF-8">`
  `<meta name="viewport" `content="width=device-width, `initial-scale=1.0">`
  `<title>Galeri Foto - Abd Syafaat S</title>`

  `<!DOCTYPE html> `→ mendefinisikan HTML5.

`<html lang="id"> `→ bahasa utama halaman: Bahasa Indonesia.

`<meta charset="UTF-8">` → dukungan karakter internasional.

`<meta name="viewport"...>` → membuat halaman responsif.

`<title>` → judul tab browser: Galeri Foto - Abd Syafaat S.

2.CSS Reset dan Global Style

* {
  `margin: 0;`
 ` padding: 0;`
  `box-sizing: border-box;`
  `scroll-behavior: smooth;`
}

`body {`
  `font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;`
  `background: linear-gradient(135deg, #064e3b, #065f46, #064e3b);`
  `color: #1f2937;`
  `line-height: 1.7;`
}

Reset CSS untuk konsistensi layout.

scroll-behavior: smooth; → scroll ke anchor lebih halus.

Font modern & clean.

Background gradient hijau gelap selaras dengan halaman index.html.

3.Header

`header {`
 ` background: rgba(5, 150, 105, 0.92);`
  `color: white;`
  `padding: 20px 40px;`
  `display: flex;`
  `flex-direction: column;`
  `align-items: center;`
  `text-align: center;`
  `position: sticky;`
  `top: 0;`
  `z-index: 1000;`
  `box-shadow: 0 4px 10px rgba(0,0,0,0.3);`
}`

Header berwarna hijau transparan dengan bayangan.

Posisi sticky → selalu tampil di atas.

Judul besar: Galeri Foto.

Navigasi sederhana dengan 2 link:

Beranda → index.html

Galeri → galeri.html

4.Navigasi

`nav {`
 ` display: flex;`
 ` gap: 25px;`
 ` flex-wrap: wrap;`
 ` margin-top: 15px;`
 ` justify-content: center; `
}
`nav a {`
  `color: white;`
  `font-weight: bold;`
  `text-decoration: none;`
  `transition: color 0.3s ease;`
}
`nav a:hover {`
  `color: #bbf7d0;`
}

Navigasi rapi dengan flexbox.

Efek hover → warna berubah jadi hijau muda.

5.Section Galeri Foto
`<section>`
 ` <h2>Foto Kegiatan</h2>`
 ` <div class="gallery">`
  `  <img src="images/foto1.jpg" alt="Foto 1">`
  `  <img src="images/foto2.jpg" alt="Foto 2">`
  `  <img src="images/foto3.jpg" alt="Foto 3">`
  `  <img src="images/foto4.jpg" alt="Foto 4">`
 ` </div>`
`</section>`

Judul section: Foto Kegiatan.

Galeri menggunakan grid layout.

6.Style Galeri

`.gallery {`
 ` display: grid;`
 ` grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));`
 ` gap: 20px;`
 ` max-width: 1000px;`
 ` margin: 0 auto;`
}
`.gallery img {`
 ` width: 100%;`
 ` height: 200px;`
 ` border-radius: 15px;`
 ` object-fit: cover;`
 ` box-shadow: 0 8px 16px rgba(0,0,0,0.2);`
 ` transition: transform 0.3s ease;`
}
`.gallery img:hover {`
 ` transform: scale(1.05);`
}

Grid → otomatis menyesuaikan jumlah kolom berdasarkan lebar layar.

Semua gambar ukuran seragam (height: 200px) dengan object-fit: cover → proporsional tanpa distorsi.

Efek hover → gambar membesar sedikit (scale(1.05)).

Border radius + shadow → tampilan lebih modern.

7.Footer

`footer {`
 ` background: #047857;`
 ` color: #f9fafb;`
 ` text-align: center;`
 ` padding: 15px;`
 ` margin-top: 30px;`
 ` font-size: 0.9rem;`
`}

Footer sederhana dengan warna hijau tua.

Isi copyright + identitas.

KESIMPULAN:
Struktur sederhana & bersih → fokus ke tampilan galeri.Responsif berkat grid auto-fit.
Estetis dengan warna konsisten ke halaman utama.
Foto seragam ukuran → rapi & konsisten.
Navigasi minimalis tapi cukup (Beranda + Galeri).