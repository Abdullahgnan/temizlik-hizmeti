<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeraHizmet - Profesyonel Temizlik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7'
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .header-gradient {
            background: linear-gradient(to right, #7dd3fc, #0ea5e9);
            position: relative;
            overflow: hidden;
        }

        .header-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.5;
        }

        .nav-item {
            position: relative;
            overflow: hidden;
        }

        .nav-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            transform: translateX(-101%);
            transition: transform 0.3s ease;
        }

        .nav-item:hover::after {
            transform: translateX(0);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .glass-effect:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <div class="header-gradient">
        <!-- Top Bar -->
        <div class="border-b border-white/10">
            <div class="container mx-auto px-4 py-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-6">
                        <a href="tel:+902125550123" class="flex items-center text-white/90 hover:text-white group">
                            <div class="glass-effect p-1.5 rounded-full mr-2">
                                <i class="fas fa-phone text-xs"></i>
                            </div>
                            <span class="text-sm">+90 (212) 555 0123</span>
                        </a>
                        <a href="mailto:info@perahizmet.com" class="hidden md:flex items-center text-white/90 hover:text-white group">
                            <div class="glass-effect p-1.5 rounded-full mr-2">
                                <i class="fas fa-envelope text-xs"></i>
                            </div>
                            <span class="text-sm">info@perahizmet.com</span>
                        </a>
                    </div>
                    <div class="flex items-center space-x-3">
                        <a href="#" class="glass-effect p-2 rounded-full text-white/90 hover:text-white">
                            <i class="fab fa-whatsapp text-sm"></i>
                        </a>
                        <a href="#" class="glass-effect p-2 rounded-full text-white/90 hover:text-white">
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                        <a href="#" class="glass-effect p-2 rounded-full text-white/90 hover:text-white">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="/" class="flex items-center group">
                    <div class="w-12 h-12 glass-effect rounded-xl flex items-center justify-center group-hover:bg-white/30">
                        <span class="text-white font-bold text-2xl">P</span>
                    </div>
                    <div class="ml-3">
                        <h1 class="text-white text-2xl font-bold">PeraHizmet</h1>
                        <p class="text-white/80 text-xs">Profesyonel Temizlik</p>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="nav-item flex flex-col items-center text-white/90 hover:text-white">
                        <div class="glass-effect w-12 h-12 rounded-xl flex items-center justify-center mb-1">
                            <i class="fas fa-home text-lg"></i>
                        </div>
                        <span class="text-sm">Ev Temizliği</span>
                    </a>
                    <a href="#" class="nav-item flex flex-col items-center text-white/90 hover:text-white">
                        <div class="glass-effect w-12 h-12 rounded-xl flex items-center justify-center mb-1">
                            <i class="fas fa-building text-lg"></i>
                        </div>
                        <span class="text-sm">Ofis Temizliği</span>
                    </a>
                    <a href="#" class="nav-item flex flex-col items-center text-white/90 hover:text-white">
                        <div class="glass-effect w-12 h-12 rounded-xl flex items-center justify-center mb-1">
                            <i class="fas fa-key text-lg"></i>
                        </div>
                        <span class="text-sm">Boş Ev Temizliği</span>
                    </a>
                </nav>

                <!-- Right Side -->
                <div class="flex items-center space-x-4">
                    <a href="#randevu" class="bg-white text-brand-500 px-6 py-2.5 rounded-lg hover:bg-opacity-90 transition-all text-sm font-medium shadow-lg shadow-brand-500/20">
                        <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'EN' ? 'Book Now' : 'Randevu Al'; ?>
                    </a>
                    <div class="flex items-center space-x-2 ml-4">
                        <button onclick="setLanguage('TR')" class="glass-effect px-3 py-1.5 rounded-lg text-white/90 hover:text-white text-sm <?php echo (!isset($_COOKIE['lang']) || $_COOKIE['lang'] === 'TR') ? 'bg-white/30' : ''; ?>">
                            TR
                        </button>
                        <button onclick="setLanguage('EN')" class="glass-effect px-3 py-1.5 rounded-lg text-white/90 hover:text-white text-sm <?php echo (isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'EN') ? 'bg-white/30' : ''; ?>">
                            EN
                        </button>
                    </div>
                    <button class="lg:hidden glass-effect p-2 rounded-lg text-white/90 hover:text-white">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Dil değiştirme script'i -->
    <script>
        function setLanguage(lang) {
            document.cookie = `lang=${lang};path=/;max-age=${60*60*24*365}`;
            window.location.reload();
        }
    </script>
</body>
</html> 