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
        <div class="container mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2">
                <i class="fas fa-sparkles text-primary-500 text-xl"></i>
                <div>
                    <div class="font-semibold">PeraHizmet</div>
                    <div class="text-xs text-gray-500">Profesyonel Temizlik</div>
                </div>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="ev-temizligi.php" class="group relative text-sm hover:text-primary-500 transition-colors py-2">
                    Ev Temizliği
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary-500 transform scale-x-0 group-hover:scale-x-100 transition-transform"></span>
                </a>
                <a href="bos-ev-temizligi.php" class="group relative text-sm hover:text-primary-500 transition-colors py-2">
                    Boş Ev Temizliği
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary-500 transform scale-x-0 group-hover:scale-x-100 transition-transform"></span>
                </a>
                <a href="ofis-temizligi.php" class="group relative text-sm hover:text-primary-500 transition-colors py-2">
                    Ofis Temizliği
                    <span class="absolute bottom-0 left-0 w-full h-0.5 bg-primary-500 transform scale-x-0 group-hover:scale-x-100 transition-transform"></span>
                </a>
            </nav>

            <div class="flex items-center gap-2">
                <button onclick="toggleLang()" class="px-3 py-1 text-sm rounded-full border border-primary-500 text-primary-500 hover:bg-primary-50 transition-colors">
                    <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'EN' ? 'EN' : 'TR'; ?>
                </button>
            </div>
        </div>
    </header>

