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
                        primary: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e'
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col">
    <header class="border-b bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <!-- Top Bar -->
            <div class="py-2 border-b">
                <div class="flex justify-between items-center">
                    <div class="text-sm text-gray-600">
                        <span class="mr-4"><i class="fas fa-phone mr-1"></i> +90 (212) 555 0123</span>
                        <span><i class="fas fa-envelope mr-1"></i> info@perahizmet.com</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="#" class="text-gray-600 hover:text-primary-500"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-600 hover:text-primary-500"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-600 hover:text-primary-500"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Main Navigation -->
            <div class="py-4">
                <div class="flex items-center justify-between">
                    <a href="index.php" class="flex items-center gap-2">
                        <i class="fas fa-sparkles text-primary-500 text-2xl"></i>
                        <div>
                            <div class="font-bold text-xl">PeraHizmet</div>
                            <div class="text-xs text-gray-500">Profesyonel Temizlik</div>
                        </div>
                    </a>

                    <!-- Service Icons Navigation -->
                    <nav class="hidden lg:flex items-center space-x-8">
                        <a href="/ev-temizligi.php" class="nav-item flex flex-col items-center text-white/90 hover:text-white">
                            <div class="glass-effect w-12 h-12 rounded-xl flex items-center justify-center mb-1">
                                <i class="fas fa-home text-lg"></i>
                            </div>
                            <span class="text-sm">Ev Temizliği</span>
                        </a>
                    </nav>

                    <div class="flex items-center gap-4">
                        <button onclick="toggleLang()" class="px-3 py-1 text-sm rounded-full border border-primary-500 text-primary-500 hover:bg-primary-50 transition-colors">
                            <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'EN' ? 'EN' : 'TR'; ?>
                        </button>
                        <a href="#iletisim" class="hidden md:inline-flex items-center px-6 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Randevu Alll
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

