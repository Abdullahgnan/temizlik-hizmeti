<?php require_once 'includes/header.php'; ?>

<main class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl font-bold mb-4">Boş Ev Temizliği</h1>
                    <p class="text-xl text-gray-600 mb-6">Taşınma öncesi ve sonrası için özel temizlik</p>
                    <div class="flex flex-wrap gap-4">
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-spray-can mr-2"></i>
                            Derin temizlik ve dezenfeksiyon
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-hard-hat mr-2"></i>
                            İnşaat sonrası temizlik
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-box-open mr-2"></i>
                            Dolap içi temizlik
                        </span>
                    </div>
                </div>
                <div class="relative h-[400px] rounded-lg overflow-hidden shadow-lg">
                    <img 
                        src="/images/empty-house-cleaning.jpg" 
                        alt="Boş Ev Temizliği" 
                        class="absolute inset-0 w-full h-full object-cover"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Hizmet Detayları</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-broom text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Detaylı Temizlik</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>Duvar silme</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>Kapı ve pencere temizliği</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>Tüm yüzeylerin dezenfeksiyonu</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-tools text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">İnşaat Sonrası</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>İnşaat artıkları temizliği</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>Boya ve alçı temizliği</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>Cam ve çerçeve temizliği</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-spray-can text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Özel İşlemler</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>Kireç çözücü uygulaması</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>Leke çıkarma</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            <span>Parlatma işlemleri</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Hizmet Alın</h2>
                <form action="hizmet_talebi.php" method="POST" class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ad Soyad</label>
                        <input type="text" name="name" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Telefon</label>
                        <input type="tel" name="phone" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">E-posta</label>
                        <input type="email" name="email" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Adres</label>
                        <input type="text" name="address" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ev Büyüklüğü (m²)</label>
                        <input type="number" name="size" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Hizmet Tarihi</label>
                        <input type="date" name="service_date" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Özel İstekler</label>
                        <textarea name="notes" rows="4" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="w-full bg-primary-500 text-white py-3 px-6 rounded-lg hover:bg-primary-600 transition-colors">
                            Randevu Al
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>

