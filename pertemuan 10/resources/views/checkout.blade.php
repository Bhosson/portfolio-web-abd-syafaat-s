<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Risol - Selesaikan Pembelian</title>
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
            <h1 class="text-3xl font-extrabold text-white tracking-wider">DAPUR RISOL</h1>
            <nav class="flex space-x-4">
                <a href="/" class="text-white hover:text-yellow-300 transition duration-300">Tentang Kami</a>
                <a href="/menu" class="text-white hover:text-yellow-300 transition duration-300">Menu Risol</a>
                <a href="/checkout" class="text-white font-semibold border-b-2 border-yellow-300 relative">
                    🛒 Keranjang (<span id="cart-count">0</span>)
                </a>
            </nav>
        </div>
    </header>

    <!-- Konten Checkout -->
    <div class="container mx-auto max-w-5xl py-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-red-700 text-center mb-10">Detail Pembelian Anda</h2>

        <div class="grid lg:grid-cols-2 gap-8">
            
            <!-- Kolom Kiri: Ringkasan Pesanan & Tombol Pembatalan -->
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-xl h-fit">
                <h3 class="text-2xl font-bold text-yellow-600 mb-4 border-b pb-2">Ringkasan Keranjang</h3>
                
                <ul id="cart-items" class="space-y-3">
                    <li class="text-gray-500">Keranjang masih kosong...</li>
                </ul>

                <div class="mt-6 pt-4 border-t-2 border-dashed border-gray-300">
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-semibold">Total Harga:</span>
                        <span class="text-3xl font-extrabold text-red-700" id="total-price">Rp 0</span>
                    </div>
                </div>

                <!-- Tombol Batal dan Kembali ke Menu -->
                <div class="flex flex-col gap-3 mt-6">
                    <button onclick="showConfirmationModal()" 
                            class="w-full bg-red-500 text-white py-3 rounded-lg font-bold shadow-md hover:bg-red-600 transition duration-300">
                        Batalkan Pesanan
                    </button>
                    <button class="w-full bg-gray-200 text-gray-700 py-3 rounded-lg font-semibold hover:bg-gray-300 transition" onclick="window.location.href='menu.html'">
                        ← Tambah Risol Lagi
                    </button>
                </div>
            </div>
            
            <!-- Kolom Kanan: Formulir & Kontak -->
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-xl">
                <h3 class="text-2xl font-bold text-red-700 mb-6 border-b pb-2">Lengkapi Data Pengiriman</h3>
                
                <form id="purchase-form" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text" id="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor WA </label>
                        <input type="number" id="phone" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500">
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Pengiriman</label>
                        <textarea id="address" rows="3" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-yellow-500 focus:border-yellow-500"></textarea>
                    </div>
                    
                    <button type="button" class="w-full bg-yellow-500 text-red-800 font-bold py-4 rounded-lg shadow-lg hover:bg-yellow-400 transition duration-300 transform hover:scale-[1.01]" onclick="simulatePurchase()">
                        SELESAIKAN PEMBELIAN
                    </button>
                </form>

                <!-- Informasi Kontak WA -->
                <div class="mt-8 pt-6 border-t border-gray-200 text-center">
                    <h4 class="text-xl font-bold text-red-700 mb-3">KONTAK PEMESANAN (WA)</h4>
                    <!-- NOMOR WHATSAPP BARU -->
                    <p class="text-2xl font-extrabold text-green-600 mb-3">082395047659</p>
                    <!-- Link WA juga diperbarui -->
                    <a href="https://wa.me/6282395047659" target="_blank" class="inline-flex items-center justify-center bg-green-500 text-white font-bold py-2 px-6 rounded-full shadow-md hover:bg-green-600 transition">
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal Konfirmasi Pembatalan -->
    <div id="confirmation-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-xl p-8 max-w-md w-full shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modal-content-confirm">
            <h3 class="text-2xl font-bold text-red-600 mb-4">Konfirmasi Pembatalan</h3>
            <p class="text-gray-700 mb-6">Anda yakin ingin membatalkan pesanan? Semua item di keranjang akan dihapus dan Anda akan kembali ke halaman menu.</p>
            <div class="flex justify-end space-x-4">
                <button onclick="hideConfirmationModal()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    Tidak, Lanjutkan Belanja
                </button>
                <button onclick="clearCartAndReset()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-semibold">
                    Ya, Batalkan & Reset
                </button>
            </div>
        </div>
    </div>
    
    <!-- Modal untuk mengganti alert() -->
    <div id="custom-modal" class="fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center p-4 z-50 hidden">
        <div class="bg-white rounded-lg shadow-2xl w-full max-w-md p-6 transform transition-all">
            <h4 id="modal-title" class="text-2xl font-bold mb-4 text-red-700"></h4>
            <div id="modal-content-alert" class="text-gray-700 whitespace-pre-wrap mb-6"></div>
            <button id="modal-close" class="w-full bg-red-700 text-white py-3 rounded-lg font-semibold hover:bg-red-800 transition">Tutup</button>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 mt-10">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; Dapur Risol Enak.</p>
        </div>
    </footer>

    <script>
        // Logika Keranjang dan Local Storage
        const cart = JSON.parse(localStorage.getItem('risolCart')) || [];
        const cartList = document.getElementById('cart-items');
        const totalPriceElement = document.getElementById('total-price');
        const cartCountElement = document.getElementById('cart-count');
        let total = 0;

        function updateCartStatus() {
            cartCountElement.textContent = cart.length;
        }

        function renderCart() {
            updateCartStatus();
            
            if (cart.length === 0) {
                cartList.innerHTML = '<li class="text-center py-4 text-gray-500">Keranjang Anda masih kosong.</li>';
                
                // Tambahkan pesan peringatan jika keranjang kosong
                const purchaseButton = document.querySelector('#purchase-form button');
                purchaseButton.classList.remove('bg-yellow-500', 'hover:bg-yellow-400');
                purchaseButton.classList.add('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
                purchaseButton.disabled = true;

                return;
            }

            // Hitung frekuensi setiap item
            const itemMap = {};
            cart.forEach(item => {
                if (itemMap[item.name]) {
                    itemMap[item.name].count++;
                } else {
                    itemMap[item.name] = { name: item.name, price: item.price, count: 1 };
                }
            });

            // Tampilkan item
            cartList.innerHTML = '';
            total = 0;
            
            Object.values(itemMap).forEach(item => {
                const subTotal = item.price * item.count;
                total += subTotal;

                const listItem = document.createElement('li');
                listItem.className = 'flex justify-between border-b pb-2';
                listItem.innerHTML = `
                    <span class="text-gray-700">${item.count}x ${item.name}</span>
                    <span class="font-semibold">Rp ${(subTotal).toLocaleString('id-ID')}</span>
                `;
                cartList.appendChild(listItem);
            });

            totalPriceElement.textContent = `Rp ${total.toLocaleString('id-ID')}`;
            
            // Aktifkan tombol pembelian jika keranjang tidak kosong
            const purchaseButton = document.querySelector('#purchase-form button');
            purchaseButton.classList.add('bg-yellow-500', 'hover:bg-yellow-400');
            purchaseButton.classList.remove('bg-gray-300', 'text-gray-500', 'cursor-not-allowed');
            purchaseButton.disabled = false;
        }
        
        // FUNGSI BARU UNTUK KONFIRMASI PEMBATALAN
        function showConfirmationModal() {
            const modal = document.getElementById('confirmation-modal');
            const modalContent = document.getElementById('modal-content-confirm');
            
            if (cart.length === 0) {
                 showModal("Keranjang Kosong", "Tidak ada pesanan untuk dibatalkan. Silakan kembali ke menu.");
                 return;
            }
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            // Trigger animation
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function hideConfirmationModal() {
            const modal = document.getElementById('confirmation-modal');
            const modalContent = document.getElementById('modal-content-confirm');
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300); // Tunggu sampai animasi selesai
        }

        // FUNGSI UTAMA RESET KERANJANG
        function clearCartAndReset() {
            localStorage.removeItem('risolCart');
            console.log('Keranjang berhasil direset.');
            
            // Arahkan kembali ke halaman menu
            window.location.href = 'menu.html';
        }

        // FUNGSI PEMBELIAN SUDAH ADA, HANYA DIPASTIKAN NOMOR WA BENAR
        function simulatePurchase() {
            if (cart.length === 0) {
                showModal("Keranjang Kosong", "Mohon tambahkan Risol ke keranjang terlebih dahulu di halaman Menu.");
                return;
            }

            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;

            if (!name || !phone || !address) {
                showModal("Data Belum Lengkap", "Mohon lengkapi Nama, Nomor WA, dan Alamat Pengiriman Anda.");
                return;
            }
            
            // Format Pesanan untuk WhatsApp
            const orderDetails = Object.values(
                cart.reduce((acc, item) => {
                    acc[item.name] = (acc[item.name] || { ...item, count: 0 });
                    acc[item.name].count++;
                    return acc;
                }, {})
            ).map(item => `* ${item.count}x ${item.name} (@Rp ${item.price.toLocaleString('id-ID')})`).join('\n');

            
            const waMessage = `Halo Dapur Risol Enak! Saya ingin memesan:\n\n*RINCIAN PESANAN (${cart.length} pcs):*\n${orderDetails}\n*TOTAL HARGA: Rp ${total.toLocaleString('id-ID')}*\n\n*DETAIL PENGIRIMAN:*\nNama: ${name}\nWA: ${phone}\nAlamat: ${address}\n\nMohon segera diproses. Terima kasih!`;
            
            // NOMOR WHATSAPP BARU
            const waNumber = '6282395047659'; 
            
            // Encode pesan agar aman di URL
            const encodedMessage = encodeURIComponent(waMessage);
            
            // Buat link WhatsApp
            const whatsappLink = `https://wa.me/${waNumber}?text=${encodedMessage}`;

            // 1. Bersihkan keranjang
            localStorage.removeItem('risolCart');
            
            // 2. Redirect ke WhatsApp
            window.location.href = whatsappLink;
        }

        // --- Fungsi Modal Sederhana (Pengganti alert()) ---
        function showModal(title, content) {
            let modal = document.getElementById('custom-modal');
            let closeModal = document.getElementById('modal-close');
            
            if (closeModal) {
                 closeModal.onclick = () => {
                    modal.classList.add('hidden');
                 };
            }
            
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-content-alert').textContent = content;
            
            // Atur warna judul menjadi merah untuk error/peringatan
            const titleElement = document.getElementById('modal-title');
            titleElement.classList.remove('text-green-600');
            titleElement.classList.add('text-red-700');
            
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
        
        document.addEventListener('DOMContentLoaded', renderCart);
    </script>
</body>
</html>
