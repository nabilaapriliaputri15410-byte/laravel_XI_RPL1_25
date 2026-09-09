<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Buku - BacaYuk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-amber-100 text-slate-800 font-sans min-h-screen flex flex-col justify-between">

    <!-- Header & Navbar Quotes -->
    <header class="bg-amber-100 border-b border-amber-200 sticky top-0 z-20">
        <!-- Banner Quotes Semangat Membaca -->
        <div class="bg-rose-900 text-rose-100 py-1.5 px-4 text-center text-xs italic font-medium shadow-xs">
            💬 "Buku jangan pernah pergi dari hidup kita." — Reda Gaudiamo
        </div>

        <!-- Navbar Utama -->
        <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-black text-rose-700 tracking-wide">📖 BacaYuk</h1>
            <nav class="space-x-4 text-sm font-bold">
                <a href="/" class="text-slate-700 hover:text-rose-700 transition">Beranda</a>
                <a href="/rekomendasi" class="text-rose-700 border-b-2 border-rose-700 pb-1">Rekomendasi Buku</a>
            </nav>
        </div>
    </header>

    <!-- Content Utama -->
    <main class="max-w-4xl mx-auto px-6 py-10 w-full flex-grow">
        <div class="mb-8">
            <h2 class="text-3xl font-black text-slate-900 mb-1">30+ Rekomendasi Buku Pilihan</h2>
            <p class="text-slate-600 text-sm">Kumpulan buku inspiratif dari motivasi, pengalaman belajar luar negeri, ilmu kedokteran, hingga karya sastra pilihan.</p>
        </div>

        <!-- Grid Cards Buku -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

            <!-- BUKU KHUSUS: XAVIERA PUTRI -->
            <div class="bg-white p-4 rounded-2xl border-2 border-rose-300 shadow-sm flex items-center space-x-4">
                <img src="https://i.pinimg.com/1200x/bb/e5/ee/bbe5ee5b0de0d2131326f446f3257972.jpg" alt="Kimchi Convention" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-rose-200 flex-shrink-0">
                <div>
                    <span class="bg-rose-100 text-rose-800 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Pilihan Spesial</span>
                    <h3 class="font-bold text-slate-900 text-base mt-1">Kimchi Convention</h3>
                    <p class="text-xs text-rose-700 font-bold mb-1">Karya: Xaviera Putri</p>
                    <p class="text-slate-600 text-xs">Perjalanan seru adaptasi dan perjuangan belajar di Korea Selatan.</p>
                </div>
            </div>

            <!-- BUKU KHUSUS: DR. GIA PRATAMA -->
            <div class="bg-white p-4 rounded-2xl border-2 border-rose-300 shadow-sm flex items-center space-x-4">
                <img src="https://i.pinimg.com/1200x/b5/ba/f7/b5baf75f134a9451ce8247ca644c7bb0.jpg" alt="Garda Detak" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-rose-200 flex-shrink-0">
                <div>
                    <span class="bg-rose-100 text-rose-800 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase">Pilihan Spesial</span>
                    <h3 class="font-bold text-slate-900 text-base mt-1">Garda Detak</h3>
                    <p class="text-xs text-rose-700 font-bold mb-1">Karya: dr. Gia Pratama</p>
                    <p class="text-slate-600 text-xs">Kisah emosional perjuangan medis menyelamatkan detak kehidupan.</p>
                </div>
            </div>

            <!-- BUKU LAINNYA -->
            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/1200x/33/df/12/33df12f4d6e48385ee5f22468837da0c.jpg" alt="Atomic Habits" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Atomic Habits</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: James Clear</p>
                    <p class="text-slate-600 text-xs">Membangun kebiasaan kecil bermanfaat secara konsisten.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/1200x/47/5e/dd/475edd712f0e708d57fc72b6f2771b69.jpg" alt="Filosofi Teras" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Filosofi Teras</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: Henry Manampiring</p>
                    <p class="text-slate-600 text-xs">Penerapan ilmu stoisisme untuk mental yang lebih tenang.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/1200x/0a/fd/cf/0afdcf92fd7ed394d4292558f729c86f.jpg" alt="Sapiens" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Sapiens</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: Yuval Noah Harari</p>
                    <p class="text-slate-600 text-xs">Sejarah singkat umat manusia dari zaman batu hingga modern.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/736x/6d/1e/e6/6d1ee6d893a9eb15f70bdfb4deead4b0.jpg" alt="Psychology of Money" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Psychology of Money</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: Morgan Housel</p>
                    <p class="text-slate-600 text-xs">Pelajaran berharga mengenai perilaku dan pola pikir finansial.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/736x/e3/3c/dd/e33cdd4208b38d8d7f537b79e1a5ec5d.jpg" alt="Laskar Pelangi" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Laskar Pelangi</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: Andrea Hirata</p>
                    <p class="text-slate-600 text-xs">Kisah perjuangan pendidikan anak-anak di Belitung.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/1200x/62/04/dc/6204dc638dd4689a5672e8947419477e.jpg" alt="Bumi Manusia" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Bumi Manusia</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: Pramoedya Ananta Toer</p>
                    <p class="text-slate-600 text-xs">Novel sejarah perjuangan nasionalisme pada era kolonial.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/1200x/93/d0/5f/93d05fc7f147f0c65ff68d14b28cacd8.jpg" alt="Ikigai" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Ikigai</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: Héctor García & Francesc Miralles</p>
                    <p class="text-slate-600 text-xs">Rahasia hidup bahagia dan panjang umur ala Jepang.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="/images/buku8.jpg" alt="Laut Bercerita" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Laut Bercerita</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: Leila S. Chudori</p>
                    <p class="text-slate-600 text-xs">Novel fiksi sejarah tentang aktivis mahasiswa era Reformasi.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/736x/9d/ad/12/9dad12c2573197a2ac487c66e03c8e30.jpg" alt="Grit" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Grit</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: Angela Duckworth</p>
                    <p class="text-slate-600 text-xs">Kekuatan ketekunan dan semangat dalam mencapai kesuksesan.</p>
                </div>
            </div>

            <div class="bg-white/80 p-4 rounded-2xl border border-amber-200 shadow-xs flex items-center space-x-4">
                <img src="https://i.pinimg.com/736x/90/76/7d/90767d67cfcbc56521a83cbcf3e0ca2f.jpg" alt="Negeri 5 Menara" class="w-16 h-20 bg-amber-200 object-cover rounded-lg border border-amber-300 flex-shrink-0">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Negeri 5 Menara</h3>
                    <p class="text-xs text-rose-700 font-medium mb-1">Karya: A. Fuadi</p>
                    <p class="text-slate-600 text-xs">Kisah impian anak muda berprinsip Man Jadda Wajada.</p>
                </div>
            </div>

        </div>

        <div class="mt-10 text-center">
            <a href="/" class="inline-block bg-rose-700 hover:bg-rose-800 text-white font-extrabold px-6 py-3 rounded-2xl shadow-lg shadow-rose-700/20 transition">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-amber-200/80 border-t border-amber-300/60 py-4 text-center text-xs text-slate-600 font-medium">
        Gerakan Literasi Sekolah — XI RPL 1
    </footer>

</body>
</html>