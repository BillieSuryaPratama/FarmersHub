<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmersHub - Platform E-Commerce Pertanian</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .slide-up {
            opacity: 0;
            transform: translateY(30px);
            animation: slideUp 0.8s ease-out forwards;
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .bounce-in {
            animation: bounceIn 1s ease-out;
        }

        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-2xl mr-3">🌾</span>
                        <span class="text-2xl font-bold gradient-text">FarmersHub</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#beranda" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Beranda</a>
                    <a href="#why-us" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Why us?</a>
                    <a href="#cara-kerja" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Cara Kerja</a>
                    <a href="#tentang" class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Tentang</a>
                <div class="flex items-center space-x-3">
                    <a href="{{ url('/register') }}" class="text-purple-600 hover:text-purple-700 px-4 py-2 rounded-lg font-medium transition-colors">
                        Daftar
                    </a>
                    <a href="{{ url('/login') }}" class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-2 rounded-lg font-medium transition-colors">
                        Masuk
                    </a>
                </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="text-gray-700 hover:text-purple-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda" class="pt-16 gradient-bg min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="slide-up">
                    <h1 class="text-5xl md:text-6xl font-bold text-white mb-6 leading-tight">
                        Hubungkan <span class="text-yellow-300">Petani</span> & <span class="text-green-300">Konsumen</span>
                    </h1>
                    <p class="text-xl text-gray-200 mb-8 leading-relaxed">
                        Platform e-commerce pertanian yang mempertemukan petani dengan konsumen secara langsung.
                        Dapatkan hasil panen segar dengan harga terbaik, tanpa perantara.
                    </p>
                    <div class="flex">
                        <a href="{{ url('/login') }}" class="bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors text-lg">
                            Mulai Berbelanja
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="float-animation">
                        <div class="relative">
                            <div class="absolute inset-0 bg-white rounded-3xl shadow-2xl opacity-20"></div>
                            <div class="relative bg-white rounded-3xl p-8 shadow-2xl">
                                <div class="text-center">
                                    <div class="w-16 h-16 bg-green-500 rounded-full mx-auto mb-4 flex items-center justify-center">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Produk Segar</h3>
                                    <p class="text-gray-600">Langsung dari kebun ke lokasi Anda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="why-us" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Mengapa Pilih FarmersHub?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Platform yang dirancang khusus untuk memudahkan petani dan konsumen dalam bertransaksi hasil pertanian
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="card-hover bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl border border-green-200 text-center">
                    <div class="flex justify-center mb-6">
                        <div class="text-5xl">🌾</div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Langsung dari Petani</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Tanpa perantara, harga lebih adil bagi petani & konsumen. Hubungkan konsumen langsung dengan petani lokal.
                    </p>
                </div>

                <div class="card-hover bg-gradient-to-br from-yellow-50 to-yellow-100 p-8 rounded-2xl border border-yellow-200 text-center">
                    <div class="flex justify-center mb-6">
                        <div class="text-5xl">💰</div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Harga Terjangkau</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Tanpa biaya tambahan dari pihak ketiga, FarmersHub memastikan kamu mendapatkan harga terbaik untuk hasil pertanian berkualitas.
                    </p>
                </div>

                <div class="card-hover bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-2xl border border-purple-200 text-center">
                    <div class="flex justify-center mb-6">
                        <div class="text-5xl">📱</div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Akses Mudah</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Website yang mudah digunakan kapan saja, di mana saja — cocok untuk semua kalangan.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- How It Works Section -->
    <section id="cara-kerja" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Cara Kerja Platform</h2>
                <p class="text-xl text-gray-600">Proses sederhana dalam 3 langkah</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center bounce-in">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                        1
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Daftar & Masuk</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Daftar sebagai pengguna baru atau masuk jika sudah memiliki akun. Untuk menjadi petani, ajukan upgrade setelah login.
                    </p>
                </div>

                <div class="text-center bounce-in" style="animation-delay: 0.2s;">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                        2
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Jual & Beli</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Petani terverifikasi dapat upload produk dengan foto dan deskripsi. Konsumen browse, pilih, dan beli produk favorit.
                    </p>
                </div>

                <div class="text-center bounce-in" style="animation-delay: 0.4s;">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                        3
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Transaksi Aman</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Pembayaran aman, pengiriman terpercaya, dan sistem review untuk membangun kepercayaan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">Apa Kata Mereka?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <p class="text-gray-700 italic">"Sangat membantu! Saya bisa jual hasil panen langsung tanpa ribet."</p>
                    <div class="mt-4 font-semibold text-purple-600">Budi, Petani Sayur</div>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <p class="text-gray-700 italic">"Harganya lebih murah dan barangnya segar banget!"</p>
                    <div class="mt-4 font-semibold text-purple-600">Riskilia, Konsumen</div>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <p class="text-gray-700 italic">"FarmersHub bantu saya temukan pasar baru tiap minggu."</p>
                    <div class="mt-4 font-semibold text-purple-600">Pak Reno, Petani Padi</div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="tentang" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Tentang FarmersHub</h2>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        FarmersHub adalah platform e-commerce pertanian yang dirancang untuk mengatasi kesenjangan antara petani dan konsumen.
                        Kami percaya bahwa teknologi dapat membantu menciptakan ekosistem pertanian yang lebih adil dan berkelanjutan.
                    </p>
                    <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                        Dengan menghilangkan perantara yang merugikan, kami membantu petani mendapatkan harga yang layak untuk hasil panen mereka,
                        sementara konsumen mendapatkan produk segar dengan harga terjangkau.
                    </p>
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <span class="text-gray-700 font-medium">Mendukung petani lokal Indonesia</span>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-blue-500 rounded-3xl transform rotate-6"></div>
                    <div class="relative bg-white rounded-3xl p-8 shadow-2xl">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900">Untuk Petani</h4>
                                <p class="text-gray-600 text-sm">Jangkauan pasar lebih luas</p>
                            </div>
                            <div class="text-center">
                                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                    </svg>
                                </div>
                                <h4 class="font-bold text-gray-900">Untuk Konsumen</h4>
                                <p class="text-gray-600 text-sm">Produk segar harga terjangkau</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Siap Bergabung dengan FarmersHub?</h2>
            <p class="text-xl text-gray-300 mb-8">
                Mulai perjalanan Anda bersama komunitas petani dan konsumen yang saling mendukung
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/register') }}" class="bg-green-500 hover:bg-green-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-colors text-center">
                    Daftar Sekarang
                </a>
                <a href="{{ url('/login') }}" class="border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-lg font-semibold text-lg transition-colors text-center">
                    Sudah Punya Akun? Masuk
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="col-span-2">
                    <div class="flex items-center mb-4">
                        <div class="h-8 w-8 gradient-bg rounded-lg mr-3"></div>
                        <span class="text-2xl font-bold">FarmersHub</span>
                    </div>
                    <p class="text-gray-400 mb-4 max-w-md">
                        Platform e-commerce pertanian yang menghubungkan petani dengan konsumen secara langsung untuk menciptakan ekosistem pertanian yang lebih adil.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Platform</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Untuk Petani</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Untuk Konsumen</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cara Kerja</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Kebijakan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Dukungan</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Bantuan</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Kontak</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 FarmersHub</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation classes when elements come into view
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-up');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.card-hover').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
