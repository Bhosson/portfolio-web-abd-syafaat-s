<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Varian Risol - Dapur Risol Enak</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header & Navigasi -->
    <header class="bg-red-700 shadow-lg sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <h1 class="text-3xl font-extrabold text-white tracking-wider">DAPUR RISOL </h1>
            <nav class="flex space-x-4">
                <a href="/" class="text-white hover:text-yellow-300 transition duration-300">Tentang Kami</a>
                <a href="/menu" class="text-white font-semibold border-b-2 border-yellow-300">Menu Risol</a>
                <a href="/checkout" id="nav-cart" class="text-white hover:text-yellow-300 transition duration-300 relative">
                    🛒 Keranjang (<span id="cart-count">0</span>)
                </a>
            </nav>
        </div>
    </header>

    <!-- Konten Utama: Daftar Produk -->
    <div class="container mx-auto max-w-6xl py-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-red-700 text-center mb-10">Pilih Varian Risol Favorit Anda </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card Produk 1: Risol Mayo Original -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition duration-300 ease-in-out">
                <!-- GAMBAR DIRAPIKAN: w-full h-48 object-cover -->
                <img src="foto2.jpg" 
                     onerror="this.onerror=null; this.src='https://placehold.co/400x200/e74c3c/ffffff?text=FOTO+RISOL+MAYO';">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-red-700 mb-2">Risol Mayo</h3>
                    <!-- KETERANGAN 3PCS DIPINDAH KE DESKRIPSI -->
                    <p class="text-gray-600 mb-4">Isian mayones spesial, potongan sosis premium, dan telur rebus. Harga untuk **3 /pcs**.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-extrabold text-yellow-600">Rp 10.000</span>
                        <button class="bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-800 transition duration-300" 
                                onclick="addToCart('Risol Mayo (3/pcs)', 10000)">
                            + Tambah
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Produk 2: Risol Ayam Suir -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition duration-300 ease-in-out">
                <!-- GAMBAR DIRAPIKAN: w-full h-48 object-cover -->
                <img src="foto5.jpg"
                     onerror="this.onerror=null; this.src='https://placehold.co/400x200/f39c12/ffffff?text=FOTO+RISOL+AYAM';">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-red-700 mb-2">Risol Ayam Suir</h3>
                    <!-- KETERANGAN 3PCS DIPINDAH KE DESKRIPSI -->
                    <p class="text-gray-600 mb-4">Ragout creamy dengan potongan ayam dan bumbu kaya rasa. Favorit klasik. Harga untuk **3 /pcs**.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-extrabold text-yellow-600">Rp 10.000</span>
                        <button class="bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-800 transition duration-300" 
                                onclick="addToCart('Risol Ayam Suir (3/pcs)', 10000)">
                            + Tambah
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Produk 3: Risol Coklat -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition duration-300 ease-in-out">
                <!-- GAMBAR DIRAPIKAN: w-full h-48 object-cover -->
                <img src="foto3.jpg"
                     onerror="this.onerror=null; this.src='https://placehold.co/400x200/c0392b/ffffff?text=FOTO+RISOL+COKLAT';">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-red-700 mb-2">Risol Coklat</h3>
                    <!-- KETERANGAN 3PCS DIPINDAH KE DESKRIPSI -->
                    <p class="text-gray-600 mb-4">Daging lelehan coklat yang berlimpah dan manis. Cocok untuk dessert. Harga untuk **3 /pcs**.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-extrabold text-yellow-600">Rp 10.000</span>
                        <button class="bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-800 transition duration-300" 
                                onclick="addToCart('Risol Coklat (3/pcs)', 10000)">
                            + Tambah
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Produk 4: Risol Wagyu -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition duration-300 ease-in-out">
                <!-- GAMBAR DIRAPIKAN: w-full h-48 object-cover -->
                <img src="foto4.jpg"
                     onerror="this.onerror=null; this.src='https://placehold.co/400x200/3498db/ffffff?text=FOTO+RISOL+WAGYU';">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-red-700 mb-2">Risol Wagyu</h3>
                    <!-- KETERANGAN 3PCS DIPINDAH KE DESKRIPSI -->
                    <p class="text-gray-600 mb-4">Risol premium dengan isian daging wagyu cincang berbumbu. Rasa mewah! Harga untuk **3 /pcs**.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-extrabold text-yellow-600">Rp 10.000</span>
                        <button class="bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-800 transition duration-300" 
                                onclick="addToCart('Risol Wagyu (3/pcs)', 10000)">
                            + Tambah
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Card Produk 5: Risol Carbonara Ayam Jagung -->
            <div class="bg-white rounded-xl shadow-xl overflow-hidden transform hover:scale-[1.02] transition duration-300 ease-in-out">
                <!-- GAMBAR DIRAPIKAN: w-full h-48 object-cover -->
                <img src="foto6.jpg"
                     onerror="this.onerror=null; this.src='https://placehold.co/400x200/27ae60/ffffff?text=FOTO+RISOL+CARBONARA';">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-red-700 mb-2">Risol Carbonara Ayam Jagung</h3>
                    <!-- KETERANGAN 3PCS DIPINDAH KE DESKRIPSI -->
                    <p class="text-gray-600 mb-4">Risol dengan isian saus carbonara creamy, potongan ayam, dan jagung manis. Harga untuk **3 /pcs**.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-3xl font-extrabold text-yellow-600">Rp 10.000</span>
                        <button class="bg-red-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-800 transition duration-300" 
                                onclick="addToCart('Risol Carbonara (3/pcs)', 10000)">
                            + Tambah
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/checkout" class="inline-block bg-yellow-500 text-red-800 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-yellow-400 transition duration-300 transform hover:scale-105">
                Lanjut ke Keranjang & Checkout
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-10">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2024 Dapur Risol Enak.</p>
            <p class="mt-2 text-sm">Hubungi kami via WhatsApp: <a href="https://wa.me/6282395047659" class="text-green-400 hover:text-green-300 font-medium">082395047659</a></p>
        </div>
    </footer>

    <script>
        // Logika Keranjang dan Local Storage
        let cart = JSON.parse(localStorage.getItem('risolCart')) || [];
        const cartCountElement = document.getElementById('cart-count');

        function updateCartStatus() {
            // Memperbarui tampilan dan menyimpan ke Local Storage
            cartCountElement.textContent = cart.length;
            localStorage.setItem('risolCart', JSON.stringify(cart));
        }

        function addToCart(name, price) {
            cart.push({ name: name, price: price });
            updateCartStatus();
            
            // Memberikan feedback visual tanpa alert()
            const button = event.target;
            const originalText = button.textContent;
            button.textContent = 'Ditambahkan!';
            button.classList.add('bg-green-500');
            button.classList.remove('bg-red-700');
            setTimeout(() => {
                button.textContent = originalText;
                button.classList.remove('bg-green-500');
                button.classList.add('bg-red-700');
            }, 1000);
            
            console.log(`${name} ditambahkan. Total item: ${cart.length}`);
        }

        // Inisialisasi tampilan saat halaman dimuat
        document.addEventListener('DOMContentLoaded', updateCartStatus);
    </script>
</body>
</html>
