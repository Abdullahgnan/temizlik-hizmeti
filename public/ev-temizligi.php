<?php require_once 'includes/header.php'; ?>

<main class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h1 class="text-4xl font-bold mb-4">Ev Temizliği</h1>
                    <p class="text-xl text-gray-600 mb-6">Eviniz için profesyonel ve detaylı temizlik hizmeti</p>
                    <div class="flex flex-wrap gap-4">
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-broom mr-2"></i>
                            Genel temizlik
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-soap mr-2"></i>
                            Banyo ve mutfak temizliği
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-primary-50 text-primary-700 rounded-full">
                            <i class="fas fa-couch mr-2"></i>
                            Mobilya temizliği
                        </span>
                    </div>
                </div>
                <div class="relative h-[400px] rounded-lg overflow-hidden shadow-lg">
                    <img 
                        src="/images/home-cleaning.jpg" 
                        alt="Ev Temizliği" 
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
                        <i class="fas fa-home text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Yaşam Alanları</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Toz alma ve süpürme
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Mobilya temizliği
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Halı ve koltuk temizliği
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-sink text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Islak Alanlar</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Banyo dezenfeksiyonu
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Mutfak hijyeni
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Fayans temizliği
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center mb-4">
                        <i class="fas fa-plus text-xl text-primary-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Ek Hizmetler</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Cam temizliği
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Balkon temizliği
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-check text-primary-500"></i>
                            Dolap içi düzenleme
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
                        <label class="block text-sm font-medium text-gray-700 mb-1">Şehir</label>
                        <select name="city" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                            <option value="">Seçiniz</option>
                            <option value="istanbul">İstanbul</option>
                            <option value="ankara">Ankara</option>
                            <option value="izmir">İzmir</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ev Büyüklüğü</label>
                        <select name="size" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                            <option value="">Seçiniz</option>
                            <option value="1+1">1+1</option>
                            <option value="2+1">2+1</option>
                            <option value="3+1">3+1</option>
                            <option value="4+1">4+1</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Notlar</label>
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

