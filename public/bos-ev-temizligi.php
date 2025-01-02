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
                        <span class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full">
                            <i class="fas fa-spray-can mr-2"></i>
                            Derin temizlik ve dezenfeksiyon
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full">
                            <i class="fas fa-hard-hat mr-2"></i>
                            İnşaat sonrası temizlik
                        </span>
                        <span class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full">
                            <i class="fas fa-box-open mr-2"></i>
                            Dolap içi temizlik
                        </span>
                    </div>
                </div>
                <div class="relative h-[400px] rounded-lg overflow-hidden">
                    <img 
                        src="/images/empty-house-cleaning.jpg" 
                        alt="Boş Ev Temizliği" 
                        class="absolute inset-0 w-full h-full object-cover"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-broom text-2xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Detaylı Temizlik</h3>
                    <p class="text-gray-600">En ince ayrıntısına kadar profesyonel temizlik hizmeti</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Profesyonel Ekip</h3>
                    <p class="text-gray-600">Deneyimli ve güvenilir temizlik personeli</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-blue-50 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tools text-2xl text-blue-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Özel Ekipman</h3>
                    <p class="text-gray-600">Modern ve etkili temizlik ekipmanları</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ and Booking Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- FAQ Section -->
                <div>
                    <h2 class="text-2xl font-bold mb-8">Sıkça Sorulan Sorular</h2>
                    <div class="space-y-4">
                        <div class="border rounded-lg">
                            <button class="w-full text-left px-6 py-4 focus:outline-none" onclick="toggleFAQ(this)">
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold">Ev temizliği için nasıl sipariş verebilirim?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </button>
                            <div class="hidden px-6 pb-4">
                                <p class="text-gray-600">Web sitemiz üzerinden form doldurarak veya müşteri hizmetlerimizi arayarak kolayca sipariş verebilirsiniz.</p>
                            </div>
                        </div>
                        <div class="border rounded-lg">
                            <button class="w-full text-left px-6 py-4 focus:outline-none" onclick="toggleFAQ(this)">
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold">Temizlik malzemelerini kim sağlıyor?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </button>
                            <div class="hidden px-6 pb-4">
                                <p class="text-gray-600">Tüm temizlik malzemeleri ve ekipmanları firmamız tarafından sağlanmaktadır.</p>
                            </div>
                        </div>
                        <div class="border rounded-lg">
                            <button class="w-full text-left px-6 py-4 focus:outline-none" onclick="toggleFAQ(this)">
                                <div class="flex justify-between items-center">
                                    <span class="font-semibold">Çalışanlar sigortalı mıdır?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </button>
                            <div class="hidden px-6 pb-4">
                                <p class="text-gray-600">Evet, tüm çalışanlarımız sigortalıdır ve düzenli sağlık kontrollerinden geçmektedir.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Form -->
                <div>
                    <h2 class="text-2xl font-bold mb-8">Hizmet Alın</h2>
                    <form action="hizmet_talebi.php" method="POST" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Şehir</label>
                            <select name="sehir" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option value="istanbul">İstanbul</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Bölge</label>
                            <select name="bolge" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500">
                                <option value="atasehir">Ataşehir (Batı)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Süre Belirle</label>
                            <input type="range" min="1" max="8" value="4" class="w-full" id="duration">
                            <div class="text-center mt-2"><span id="durationValue">4</span> Saat</div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Hangi Sıklıkla Temizlensin</label>
                            <div class="grid grid-cols-2 gap-4">
                                <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                                    <input type="radio" name="frequency" value="one-time" class="mr-2">
                                    <span>Tek Seferlik</span>
                                </label>
                                <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                                    <input type="radio" name="frequency" value="weekly" class="mr-2">
                                    <span>Haftalık</span>
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition-colors">
                            Hizmet Al
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('.fas');
    content.classList.toggle('hidden');
    icon.classList.toggle('fa-chevron-up');
    icon.classList.toggle('fa-chevron-down');
}

const durationInput = document.getElementById('duration');
const durationValue = document.getElementById('durationValue');
durationInput.addEventListener('input', (e) => {
    durationValue.textContent = e.target.value;
});
</script>

<?php require_once 'includes/footer.php'; ?>

