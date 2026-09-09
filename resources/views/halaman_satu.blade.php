<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayo Membaca - Ruang Literasi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-amber-100 text-slate-800 font-sans min-h-screen flex flex-col justify-between relative bg-cover bg-center bg-no-repeat" 
      style="background-image: url('https://i.pinimg.com/736x/90/e0/9f/90e09f9e7a8bc61f0979b219f344c1b6.jpg');"> 

    <!-- OVERLAY DIPERBAIKI: Transparansi dibuat tipis (30-40%) supaya gambar Pinterest terlihat jelas -->
    <div class="absolute inset-0 bg-amber-50/30 backdrop-blur-[2px]"></div>

    <div class="relative z-10 flex flex-col min-h-screen justify-between">
        <!-- Header & Navbar Quotes -->
        <header class="bg-amber-100/90 border-b border-amber-200/80 sticky top-0 z-20 backdrop-blur-md">
            <!-- Banner Quotes Semangat Membaca -->
            <div class="bg-rose-900 text-rose-100 py-1.5 px-4 text-center text-xs italic font-medium shadow-xs">
                💬 "Buku adalah pengusung peradaban. Tanpa buku, sejarah itu hening." — Barbara Tuchman
            </div>

            <!-- Navbar Utama -->
            <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-black text-rose-700 tracking-wide">📖 BacaYuk</h1>
                <nav class="space-x-4 text-sm font-bold">
                    <a href="/" class="text-rose-700 border-b-2 border-rose-700 pb-1">Beranda</a>
                    <a href="/rekomendasi" class="text-slate-800 hover:text-rose-700 transition">Rekomendasi Buku</a>
                </nav>
            </div>
        </header>

        <!-- Content Utama -->
        <main class="max-w-2xl mx-auto px-6 py-12 text-center my-auto">
            <!-- Card Konten diberi background putih transparan agar teks tetap terbaca di atas foto -->
            <div class="bg-white/85 p-8 rounded-3xl border border-amber-200/60 shadow-xl backdrop-blur-sm">
                <span class="bg-rose-100 text-rose-800 border border-rose-200 text-xs px-3.5 py-1.5 rounded-full font-extrabold uppercase tracking-wider shadow-xs">
                    Gerakan Mading Digital
                </span>

                <h2 class="text-3xl sm:text-5xl font-black text-slate-900 mt-5 mb-4 leading-tight">
                    Satu Halaman Setiap Hari, <br>Ubah Masa Depanmu
                </h2>

                <p class="text-slate-700 text-base mb-8 max-w-lg mx-auto leading-relaxed">
                    Membaca bukan cuma soal menyelesaikan buku, tapi tentang membuka jendela dunia baru. Mulai kebiasaan membaca 10 menit hari ini!
                </p>

                <div class="flex justify-center gap-4">
                    <a href="/rekomendasi" class="bg-rose-700 hover:bg-rose-800 text-white font-extrabold px-7 py-3.5 rounded-2xl shadow-lg shadow-rose-700/20 transition">
                        Lihat Rekomendasi Buku &rarr;
                    </a>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-amber-100/90 border-t border-amber-200/80 py-4 text-center text-xs text-slate-700 font-semibold backdrop-blur-md">
            Gerakan Literasi Sekolah — XI RPL 1
        </footer>
    </div>

</body>
</html>