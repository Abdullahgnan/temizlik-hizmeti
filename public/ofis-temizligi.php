<?php require_once 'includes/header.php'; ?>

<main class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl font-bold mb-4">Ofis Temizliği</h1>
                    <p class="text-xl text-gray-600 mb-6">İş yeriniz için profesyonel temizlik çözümleri</p>
                    <div class="flex flex-wrap gap-4">
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-building mr-2"></i>
                            Genel ofis temizliği
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-virus-slash mr-2"></i>
                            Dezenfeksiyon
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-recycle mr-2"></i>
                            Atık yönetimi
                        </span>
                    </div>
                </div>
                <div class="relative h-[400px] rounded-lg overflow-hidden shadow-lg">
                    <img 
                        src="/images/office-cleaning.jpg" 
                        alt="Ofis Temizliği" 
                        class="absolute inset-0 w-full h-full object-cover"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Hizmet Detayları</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-desktop text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Çalışma Alanları</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Masa ve sandalye temizliği
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Elektronik ekipman temizliği
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Zemin temizliği
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-coffee text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Ortak Alanlar</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Toplantı odaları
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Mutfak temizliği
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Dinlenme alanları
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-plus text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Özel Hizmetler</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Halı yıkama
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Cam temizliği
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Cephe temizliği
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
                <h2 class="text-3xl font-bold text-center mb-12">Teklif Alın</h2>
                <form action="hizmet_talebi.php" method="POST" class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Firma Adı</label>
                        <input type="text" name="company" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Yetkili Adı</label>
                        <input type="text" name="contact_person" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
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
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ofis Büyüklüğü (m²)</label>
                        <input type="number" name="size" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Hizmet Sıklığı</label>
                        <select name="frequency" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                            <option value="">Seçiniz</option>
                            <option value="daily">Günlük</option>
                            <option value="weekly">Haftalık</option>
                            <option value="biweekly">İki Haftada Bir</option>
                            <option value="monthly">Aylık</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Özel İstekler</label>
                        <textarea name="notes" rows="4" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <button type="submit" class="w-full bg-primary-500 text-white py-3 px-6 rounded-lg hover:bg-primary-600 transition-colors">
                            Teklif İste
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>

