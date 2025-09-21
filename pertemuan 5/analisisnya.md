ANALISIS PERCOBAAN 1

`1. Struktur Dasar HTML`

    `<HTML>, <HEAD>, <TITLE>, dan <BODY> sudah ada.`
    `Judul halaman adalah "contoh JavaScript".`

`2. Penggunaan <script language="JavaScript">`

    Atribut language="JavaScript" adalah cara lama (deprecated).
     Versi modern pakai <script> atau <script type="text/javascript">.

document.write()

Perintah ini menulis teks langsung ke dalam dokumen HTML.
Di bagian <HEAD>, teks "Program JavaSript Aku di kepala" akan langsung muncul di awal halaman (sebelum body).
Di bagian <BODY>, teks "Program JavaSript Aku di body" juga ditampilkan.
Hasil akhirnya, di browser muncul:

Program JavaSript Aku di kepalaProgram JavaSript Aku di body

ANALISIS PERCOBAAN 2

`1. Struktur HTML`

    Dokumen sudah diawali dengan <!DOCTYPE html> → ini standar HTML5 
    Ada elemen penting: <head>, <title>, <body> → struktur sudah benar.

`2. Event Handling (onclick)`

`Tombol <button onclick="tampilkan_nama()">klik disini</button> `diberikan event langsung di atribut HTML (onclick).`
`Ketika tombol diklik, fungsi tampilkan_nama() akan dipanggil.`
`Ini bekerja dengan baik, tapi cara inline event handler (langsung di HTML) termasuk cara lama.`
`Best practice modern → gunakan addEventListener di dalam JavaScript.`

`3. Fungsi tampilkan_nama()`

`Fungsi mengambil elemen <div id="hasil"></div>.`
`innerHTML digunakan untuk mengganti isi elemen tersebut dengan <h3>Nama Saya Adalah Abd. Syafaat s.</h3>.`
Hasil: begitu tombol diklik, teks muncul di dalam div hasil. 

ANALISIS PERCOBAAN 3

`1. Struktur HTML`

`Sudah memakai <!DOCTYPE html> → standar HTML5 `
Ada deklarasi bahasa lang="id" → bagus untuk SEO & aksesibilitas 
`<meta charset="UTF-8"> memastikan teks Indonesia tampil dengan baik`
`Tag <head> dan <body> rapi serta seimbang.`

`2. Bagian Output`

`Elemen <div id="output"></div> disiapkan sebagai wadah untuk menampilkan teks lewat JavaScript.`

`3. Kode JavaScript`

document.getElementById("output") mengambil elemen div.
Variabel out menyimpan elemen tersebut.
out.innerHTML = ... mengganti isi div dengan teks.
Backtick (`) digunakan → ini adalah template literal ES6, sehingga bisa menulis string multi-baris lebih rapi.
`Ada <br> di dalam string → memberi baris baru di tampilan.`

`4. Hasil di Browser`

Akan muncul di halaman:

Selamat Belajar Angkatan 2019

JavaScript Pemrograman WEB Teknik Komputer

PERCOBAAN 4

`1. Struktur HTML`

`Ada <HTML>, <HEAD>, <TITLE>, <BODY>, dan penutupnya → struktur valid, meskipun masih gaya lama (huruf besar).`

`2. Bagian JavaScript`

var nama = prompt("Siapa nama Anda?");
→ Memunculkan kotak dialog input di browser dengan pesan "Siapa nama Anda?".
→ Nilai yang diketik user disimpan dalam variabel nama.

document.write("Hai, " + nama);
→ Menuliskan teks "Hai, ..." ke dalam halaman.
→ Contoh jika user mengetik Budi, hasil di halaman adalah:

Hai, Budi

`3. Komentar HTML lama`

`Ada <!-- dan //--> di dalam <script>.`
Itu cara lama (tujuannya agar browser yang tidak mendukung JS mengabaikan kode).
`Saat ini sudah tidak perlu lagi, karena semua browser modern mengenali <script>.`

PERCOBAAN 5

`1. Struktur HTML`

`Terdiri dari <html>, <head>, <title>, <body>.`
`Tidak ada <!DOCTYPE html> → browser akan pakai quirks mode (tidak sesuai standar modern).`

`2. Bagian JavaScript`

window.alert("Apkah anda meninggalkan laman ini") → memunculkan kotak dialog alert di browser.
window. sebenarnya opsional, jadi cukup alert("...") pun sama saja.

`3. Eksekusi`

`Saat halaman pertama kali dimuat, browser otomatis menjalankan <script> → alert langsung muncul.`
User harus klik OK untuk menutupnya agar bisa melanjutkan interaksi dengan halaman.

PERCOBAAN 6

`1. Struktur HTML`

`Ada <HTML>, <HEAD>, <TITLE>, <BODY> → valid, tapi gaya lama (huruf besar semua).`

`2. Fungsi JavaScript`

window.confirm("Apakah anda sudah yakin ?") → memunculkan kotak dialog konfirmasi dengan dua pilihan:

OK → nilai true

Cancel → nilai false

Hasilnya disimpan dalam variabel jawaban.

document.write("Jawaban Anda: " + jawaban); → menuliskan hasil ke halaman:
Jika klik OK → tampil Jawaban Anda: true
Jika klik Cancel → tampil Jawaban Anda: false

`3. Komentar Lama`

`Ada <!-- dan //--> dalam <script>.`
Ini cara lama agar browser yang tidak support JS mengabaikan kode.
Di browser modern tidak perlu lagi.

PERCOBAAN 7

`1. truktur HTML`

`Sudah modern, ada <!DOCTYPE html>, lang, dan meta charset.`

Atribut language="Javascript" sebenarnya sudah usang (deprecated).
→` Sekarang cukup pakai <script> saja.`

`2. Variabel`

var VariabelKu; → dideklarasikan tanpa nilai (undefined).

var VariabelKu2 = 3; → langsung diberi nilai 3.

VariabelKu = 1234; → kemudian baru diisi 1234.

`3. Operasi`

document.write(VariabelKu * VariabelKu2);

→ Mengalikan 1234 * 3

→ Hasil = 3702

→ Ditulis langsung ke halaman.

PERCOBAAN 8

`1. Deklarasi Variabel`

var a = 12; → nilai awal a = 12.

var b = 4; → nilai b = 4.

`2. Fungsi`

function Perkalian_Dengan2(b) → membuat fungsi dengan parameter b.

Di dalam fungsi:

a = b * 2;

return a;


 variabel a di luar fungsi akan ditimpa karena tidak ada var/let/const baru.
Jadi a yang awalnya 12, berubah menjadi 8 (karena b = 4, 4 * 2 = 8).

`3. Pemanggilan`

Perkalian_Dengan2(b) dipanggil dengan b = 4.

Hasil 8 dikembalikan.

`4. Output`

document.write("Dua kali dari ", b, " adalah ", Perkalian_Dengan2(b));
Tampil: Dua kali dari 4 adalah 8

document.write("Nilai dari a adalah ", a);
Karena a sudah diubah di dalam fungsi, hasilnya: Nilai dari a adalah 8

Jadi hasil akhir di halaman:

Dua kali dari 4 adalah 8Nilai dari a adalah 8

PERCOBAAN 9

`1. Deklarasi Variabel`

a = 12, b = 4.

Ada fungsi Perkalian_Dengan2(b) yang menerima parameter.

`2.Isi Fungsi`

Baris a = b * 2; akan:

Mengalikan nilai parameter b dengan 2.

Menimpa nilai variabel global a.

Fungsi kemudian return a.

`3. Pemanggilan`

Perkalian_Dengan2(b) dipanggil dengan b = 4.

Maka a = 4 * 2 = 8.

Fungsi mengembalikan 8.

`4. Output`

document.write("Dua kali dari " + b + " adalah " + Perkalian_Dengan2(b));
→ Dua kali dari 4 adalah 8

document.write(", Nilai dari a adalah " + a);
→ Karena a sudah diubah jadi 8, hasilnya:
, Nilai dari a adalah 8

Dua kali dari 4 adalah 8, Nilai dari a adalah 8

PERCOBAAN 10

`1. Deklarasi Awal`

a = 12, b = 4.

`2. Fungsi`

function Perkalian_Dengan2(b) menerima parameter b.

Di dalam fungsi ada var a = b * 2;
Ini membuat variabel a baru (lokal) yang hanya berlaku di dalam fungsi.
Tidak menimpa a global (yang nilainya tetap 12).

Fungsi mengembalikan nilai a lokal.

`3. Pemanggilan`

Perkalian_Dengan2(b) dipanggil dengan b = 4.

Maka a lokal = 4 * 2 = 8.

Return = 8.

`4. Output`

document.write("Dua kali dari " + b + " adalah " + Perkalian_Dengan2(b));
menghasilkan: Dua kali dari 4 adalah 8

document.write(", Nilai dari a adalah " + a);
karena a global tetap 12, hasilnya: Nilai dari a adalah 12

Jadi output lengkap di browser:

Dua kali dari 4 adalah 8, Nilai dari a adalah 12

PERCOBAAN 11

`1. parseInt("27") → 27`

Dibaca sebagai bilangan bulat.

`2. parseInt("27.5") → 27`

Hanya ambil bagian integer sebelum titik.

`3. parseInt("27A") → 27`

Baca angka sampai sebelum huruf A.

`4. parseInt("A27.5") → NaN`

Karena diawali huruf, tidak bisa dikonversi.

`5. parseFloat("27") → 27`

Dibaca sebagai bilangan float, tapi tetap 27.

`6. parseFloat("27.5") → 27.5`

Bisa membaca angka desimal.

`7. parseFloat("27A") → 27`

Baca angka sampai sebelum huruf A.

`8. parseFloat("A27.5") → NaN`

Tidak bisa dibaca karena diawali huruf.

PERCOBAAN 12

`1. document.write("2 + 3 = " + (2 + 3));`

Hasil: 2 + 3 = 5

`2. document.write("20 + 3 = " + (20 - 3));`

Ada typo di teks: ditulis "20 + 3" tetapi operasi yang dipakai (20 - 3).
Output: 20 + 3 = 17 (membingungkan karena teks tidak sesuai operasi).

`3. document.write("20* 3 = " + (2 * 3));`

Lagi-lagi tidak konsisten: teks "20* 3" tapi operasi (2 * 3).
Output: 20 3 = 6*

`4. document.write("40 / 3 = " + (40 / 3));`

Output: 40 / 3 = 13.3333333333… (hasil pecahan).

Hasil di Browser

2 + 3 = 5

20 + 3 = 17

20* 3 = 6

40 / 3 = 13.333333333333334

PERCOBAAN 13

`1. prompt("Nilai (0-100): ", 0);`

Menampilkan dialog input ke pengguna.

Default isi awal adalah 0.

Hasil input akan tersimpan di variabel nilai dalam bentuk string.

`2. (nilai >= 60) ? "Lulus" : "Tidak Lulus";`

Ini adalah operator ternary (? :).

Jika kondisi nilai >= 60 benar → hasil = "Lulus".

Jika salah → hasil = "Tidak Lulus".

`3. document.write("Hasil: " + hasil);`

Menampilkan hasil ke halaman web.

Contoh Jalannya Program

Jika user input 75 → nilai >= 60 ✅ benar → Output:

Hasil: Lulus


Jika user input 45 → nilai >= 60 ❌ salah → Output:

Hasil: Tidak Lulus

TUGAS 1

`1. String → Number dengan Number()`

`var str1 = "123";

`var num1 = Number(str1);

"123" (string) dikonversi ke angka 123.

`2. String Float → Float dengan parseFloat()`

var str2 = "45.67";

var num2 = parseFloat(str2);


"45.67" (string) jadi angka pecahan 45.67.

`3. String Float → Integer dengan parseInt()`

var str3 = "89.99";

var num3 = parseInt(str3);

"89.99" jadi 89 (hanya bilangan bulat).

`4. Number → String dengan String()`

var angka = 2025;

var strAngka = String(angka);

2025 (number) jadi "2025" (string).

`5. Boolean → Number`

var boolTrue = true;

var boolFalse = false;

true jadi 1, false jadi 0.

`6. Number → Boolean`

var n1 = 0;

var n2 = 100;

0 → false

selain 0 (termasuk negatif) → true.

`7. String → Boolean`

var s1 = "";

var s2 = "Hello";


String kosong "" → false

String tidak kosong (misalnya "Hello") → true.


outputnya di browser:

String '123' -> Number: 123

String '45.67' -> Float: 45.67

String '89.99' -> Integer: 89

Number 2025 -> String: 2025

Boolean true -> Number: 1

Boolean false -> Number: 0

Number 0 -> Boolean: false

Number 100 -> Boolean: true

String kosong '' -> Boolean: false

String 'Hello' -> Boolean: true


TUGAS 2

`1. Deklarasi Array`
var data = [

  123,       

  "Halo Dunia",    

  true,         

  45.67,     

  null,      

  {nama: "Budi", umur: 20},

  [1, 2, 3]               

];


-> Ini adalah array dengan berbagai tipe data: number, string, boolean, null, object, bahkan array.

`2. Menampilkan isi array dengan loop`

for (var i = 0; i < data.length; i++) {

 ` document.write("Index " + i + " : " + data[i] + "<br>");`
}


:data.length → panjang array (7 elemen).

:Akan menampilkan semua elemen dari index 0 sampai 6.

`3. Akses elemen berdasarkan index`

`document.write("Elemen ke-1 (angka) : " + data[0] + "<br>");`

`document.write("Elemen ke-2 (string) : " + data[1] + "<br>");`

`document.write("Elemen ke-3 (boolean) : " + data[2] + "<br>");`


Mengakses langsung nilai di array:

-> data[0] → 123

-> data[1] → "Halo Dunia"

-> data[2] → true

`4. Akses property dari object dalam array`

`document.write("Nama dari object : " + data[5].nama + "<br>");`


Elemen ke-5 (data[5]) adalah object {nama: "Budi", umur: 20}.

data[5].nama → "Budi"

`5. Akses array di dalam array`

`document.write("Angka kedua dari array di dalam array : " + data[6][1] + "<br>");`


Elemen ke-6 (data[6]) adalah array [1, 2, 3].

data[6][1] → 2 (ingat: index dimulai dari 0).

Output di Browser:

Isi Array:

Index 0 : 123

Index 1 : Halo Dunia

Index 2 : true

Index 3 : 45.67

Index 4 : null

Index 5 : [object Object]

Index 6 : 1,2,3

Akses Elemen:

Elemen ke-1 (angka) : 123

Elemen ke-2 (string) : Halo Dunia

Elemen ke-3 (boolean) : true

Nama dari object : Budi

Angka kedua dari array di dalam array : 2

TUGAS 3

`1. HTML (Struktur)`

`Membuat layout kalkulator: layar (<input type="text">) dan tombol angka/operator (<button>).`

Tombol diberi event handler onclick untuk memanggil fungsi JavaScript.

`2. CSS (Tampilan)`

Menata tampilan kalkulator agar mirip kalkulator fisik:

border, box-shadow, border-radius → membuat efek kotak.

Ukuran tombol (width, height) sama, sehingga tampak rapi.

Layar lebih lebar (220px) supaya ekspresi panjang terlihat jelas.

`3. JavaScript (Logika)`

addToDisplay(value) → Menambah angka/operator ke layar.

clearDisplay() → Menghapus layar.

calculate() → Mengevaluasi ekspresi matematika dengan eval() dan menampilkan hasil.

TUGAS 4

`1. HTML`

Membuat 3 card perhitungan: Kubus, Balok, Tabung.

`Tiap card punya input angka, tombol hitung, dan <p> untuk menampilkan hasil.`

Tombol memanggil fungsi JavaScript dengan event onclick.

`2. CSS`

Menggunakan .card agar tiap bangun ruang tertata rapi dengan border, radius, padding.

Input dan tombol diatur agar full width dan nyaman digunakan.

Desain sederhana tapi cukup bersih dan user friendly.

`3. JavaScript`

Fungsi hitungKubus()

Hitung volume s³ dan luas permukaan 6s².

Fungsi hitungBalok()

Hitung volume p × l × t dan luas permukaan 2(pl + pt + lt).

Fungsi hitungTabung()

Hitung volume πr²t dan luas permukaan 2πr(r + t).

`Hasil ditampilkan di masing-masing <p>.`