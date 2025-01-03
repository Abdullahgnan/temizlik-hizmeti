<?php require_once 'includes/header.php'; ?>

<!-- Top Banner -->
<div class="bg-primary-600 text-white py-2 text-center">
    <p class="text-sm font-medium">
        <i class="fas fa-star mr-2"></i>
        4000'İN ÜZERİNDE MÜŞTERİ MEMNUNİYETİ
    </p>
</div>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img 
            src="/images/luxury-interior.jpg" 
            alt="Luxury Interior" 
            class="w-full h-full object-cover"
        />
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl text-white">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Profesyonel Temizlik Hizmetleri
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-gray-100">
                Profesyonel ekibimiz ve titiz çalışma anlayışımızla, sizlere güvenceli hizmet veriyoruz.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#iletisim" 
                   class="inline-flex items-center px-8 py-4 rounded-lg bg-white text-primary-600 hover:bg-primary-50 transition-colors font-semibold">
                    <i class="fas fa-phone-alt mr-2"></i>
                    İletişime Geç
                </a>
                <a href="#hizmetler" 
                   class="inline-flex items-center px-8 py-4 rounded-lg border-2 border-white text-white hover:bg-white/10 transition-colors font-semibold">
                    <i class="fas fa-list-ul mr-2"></i>
                    Hizmetlerimiz
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="hizmetler" class="py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Hizmetlerimiz</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Ev ve iş yerleriniz için profesyonel temizlik çözümleri sunuyoruz
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Ev ve Ofis Temizliği -->
            <div class="group relative overflow-hidden rounded-2xl">
                <img 
                    src="/images/home-office-cleaning.jpg" 
                    alt="Ev ve Ofis Temizliği" 
                    class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-2">Ev ve Ofis Temizliği</h3>
                        <p class="text-gray-200 mb-4">Profesyonel ekibimizle ev ve iş yerleriniz için güvenilir temizlik</p>
                        <a href="/ev-temizligi.php" class="inline-flex items-center text-white hover:text-primary-200">
                            Detaylı Bilgi 
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- İnşaat Sonrası Temizlik -->
            <div class="group relative overflow-hidden rounded-2xl">
                <img 
                    src="/images/construction-cleaning.jpg" 
                    alt="İnşaat Sonrası Temizlik" 
                    class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-2">İnşaat Sonrası Temizlik</h3>
                        <p class="text-gray-200 mb-4">Yeni yapılar için detaylı ve profesyonel temizlik hizmeti</p>
                        <a href="/bos-ev-temizligi.php" class="inline-flex items-center text-white hover:text-primary-200">
                            Detaylı Bilgi 
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Dış Cephe Temizliği -->
            <div class="group relative overflow-hidden rounded-2xl">
                <img 
                    src="/images/facade-cleaning.jpg" 
                    alt="Dış Cephe Temizliği" 
                    class="w-full h-80 object-cover transform group-hover:scale-110 transition-transform duration-500"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-6">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-2">Dış Cephe Temizliği</h3>
                        <p class="text-gray-200 mb-4">Profesyonel ekip ve ekipmanla dış cephe temizliği</p>
                        <a href="/dis-cephe-temizligi.php" class="inline-flex items-center text-white hover:text-primary-200">
                            Detaylı Bilgi 
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Selection & Pricing Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Hizmet ve Fiyatlandırma</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                İhtiyacınıza en uygun temizlik hizmetini ve süresini seçin
            </p>
        </div>

        <!-- Service Type Selection -->
        <div class="grid lg:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">
            <button onclick="selectService('ev')" class="service-btn group relative bg-white rounded-2xl shadow-lg p-8 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center service-check opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-check text-primary-500"></i>
                </div>
                <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center mb-4 mx-auto group-hover:bg-primary-100 transition-colors">
                    <i class="fas fa-home text-2xl text-primary-500"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-center">Ev Temizliği</h3>
                <p class="text-gray-600 text-center">Eviniz için profesyonel temizlik hizmeti</p>
            </button>

            <button onclick="selectService('ofis')" class="service-btn group relative bg-white rounded-2xl shadow-lg p-8 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center service-check opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-check text-primary-500"></i>
                </div>
                <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center mb-4 mx-auto group-hover:bg-primary-100 transition-colors">
                    <i class="fas fa-building text-2xl text-primary-500"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-center">Ofis Temizliği</h3>
                <p class="text-gray-600 text-center">İş yeriniz için profesyonel temizlik çözümleri</p>
            </button>

            <button onclick="selectService('bosev')" class="service-btn group relative bg-white rounded-2xl shadow-lg p-8 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center service-check opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-check text-primary-500"></i>
                </div>
                <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center mb-4 mx-auto group-hover:bg-primary-100 transition-colors">
                    <i class="fas fa-key text-2xl text-primary-500"></i>
                </div>
                <h3 class="text-xl font-bold mb-2 text-center">Boş Ev Temizliği</h3>
                <p class="text-gray-600 text-center">Taşınma öncesi ve sonrası için özel temizlik</p>
            </button>
        </div>

        <!-- Person Count Selection -->
        <div class="max-w-6xl mx-auto mb-16">
            <h3 class="text-xl font-bold mb-6 text-center">Kaç Kişilik Ekip?</h3>
            <div class="grid lg:grid-cols-4 gap-6">
                <button onclick="selectPersonCount(1)" class="person-btn group relative bg-white rounded-2xl shadow-lg p-6 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                    <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center person-check opacity-0 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-check text-primary-500"></i>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center mb-3 mx-auto">
                            <i class="fas fa-user text-xl text-primary-500"></i>
                        </div>
                        <div class="text-lg font-bold mb-1">1 Kişi</div>
                        <p class="text-sm text-gray-600">Küçük alanlar için</p>
                    </div>
                </button>

                <button onclick="selectPersonCount(2)" class="person-btn group relative bg-white rounded-2xl shadow-lg p-6 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="bg-primary-500 text-white px-4 py-1 rounded-full text-sm">Önerilen</span>
                    </div>
                    <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center person-check opacity-0 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-check text-primary-500"></i>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center mb-3 mx-auto">
                            <i class="fas fa-users text-xl text-primary-500"></i>
                        </div>
                        <div class="text-lg font-bold mb-1">2 Kişi</div>
                        <p class="text-sm text-gray-600">Standart ev/ofis</p>
                    </div>
                </button>

                <button onclick="selectPersonCount(3)" class="person-btn group relative bg-white rounded-2xl shadow-lg p-6 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                    <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center person-check opacity-0 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-check text-primary-500"></i>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center mb-3 mx-auto">
                            <i class="fas fa-user-friends text-xl text-primary-500"></i>
                        </div>
                        <div class="text-lg font-bold mb-1">3 Kişi</div>
                        <p class="text-sm text-gray-600">Büyük alanlar</p>
                    </div>
                </button>

                <button onclick="selectPersonCount(4)" class="person-btn group relative bg-white rounded-2xl shadow-lg p-6 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                    <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center person-check opacity-0 group-hover:opacity-100 transition-opacity">
                        <i class="fas fa-check text-primary-500"></i>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center mb-3 mx-auto">
                            <i class="fas fa-users-cog text-xl text-primary-500"></i>
                        </div>
                        <div class="text-lg font-bold mb-1">4 Kişi</div>
                        <p class="text-sm text-gray-600">Villa/Büyük ofis</p>
                    </div>
                </button>
            </div>
        </div>

        <!-- Duration Selection -->
        <div class="grid lg:grid-cols-3 gap-8 max-w-6xl mx-auto mb-16">
            <button onclick="selectDuration(4)" class="duration-btn group relative bg-white rounded-2xl shadow-lg p-6 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center duration-check opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-check text-primary-500"></i>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold mb-2">4 Saat</div>
                    <div class="text-3xl font-bold text-primary-500 mb-2">1.400 ₺</div>
                    <p class="text-gray-600">Temel temizlik ihtiyaçları için ideal</p>
                </div>
            </button>

            <button onclick="selectDuration(6)" class="duration-btn group relative bg-white rounded-2xl shadow-lg p-6 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                    <span class="bg-primary-500 text-white px-4 py-1 rounded-full text-sm">En Çok Tercih Edilen</span>
                </div>
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center duration-check opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-check text-primary-500"></i>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold mb-2">6 Saat</div>
                    <div class="text-3xl font-bold text-primary-500 mb-2">1.800 ₺</div>
                    <p class="text-gray-600">Detaylı temizlik için önerilen</p>
                </div>
            </button>

            <button onclick="selectDuration(8)" class="duration-btn group relative bg-white rounded-2xl shadow-lg p-6 border-2 border-transparent hover:border-primary-500 transition-all duration-300">
                <div class="absolute top-4 right-4 w-8 h-8 rounded-full border-2 border-gray-200 flex items-center justify-center duration-check opacity-0 group-hover:opacity-100 transition-opacity">
                    <i class="fas fa-check text-primary-500"></i>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold mb-2">8 Saat</div>
                    <div class="text-3xl font-bold text-primary-500 mb-2">2.200 ₺</div>
                    <p class="text-gray-600">Kapsamlı temizlik hizmeti</p>
                </div>
            </button>
        </div>

        <!-- Payment Methods -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h3 class="text-xl font-bold mb-6 text-center">Ödeme Yöntemleri</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="flex flex-col items-center gap-2 p-4 rounded-lg bg-gray-50">
                        <i class="fas fa-credit-card text-2xl text-primary-500"></i>
                        <span class="text-sm font-medium">Kredi Kartı</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-4 rounded-lg bg-gray-50">
                        <i class="fas fa-university text-2xl text-primary-500"></i>
                        <span class="text-sm font-medium">Havale/EFT</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 p-4 rounded-lg bg-gray-50">
                        <i class="fas fa-home text-2xl text-primary-500"></i>
                        <span class="text-sm font-medium">Evde Ödeme</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function selectService(type) {
    // Remove active state from all service buttons
    document.querySelectorAll('.service-btn').forEach(btn => {
        btn.classList.remove('border-primary-500');
        btn.querySelector('.service-check').classList.remove('opacity-100');
    });
    
    // Add active state to selected button
    const selectedBtn = document.querySelector(`[onclick="selectService('${type}')"]`);
    selectedBtn.classList.add('border-primary-500');
    selectedBtn.querySelector('.service-check').classList.add('opacity-100');
}

function selectDuration(hours) {
    // Remove active state from all duration buttons
    document.querySelectorAll('.duration-btn').forEach(btn => {
        btn.classList.remove('border-primary-500');
        btn.querySelector('.duration-check').classList.remove('opacity-100');
    });
    
    // Add active state to selected button
    const selectedBtn = document.querySelector(`[onclick="selectDuration(${hours})"]`);
    selectedBtn.classList.add('border-primary-500');
    selectedBtn.querySelector('.duration-check').classList.add('opacity-100');
}

function selectPersonCount(count) {
    // Remove active state from all person count buttons
    document.querySelectorAll('.person-btn').forEach(btn => {
        btn.classList.remove('border-primary-500');
        btn.querySelector('.person-check').classList.remove('opacity-100');
    });
    
    // Add active state to selected button
    const selectedBtn = document.querySelector(`[onclick="selectPersonCount(${count})"]`);
    selectedBtn.classList.add('border-primary-500');
    selectedBtn.querySelector('.person-check').classList.add('opacity-100');
}
</script>

<!-- Stats Section -->
<section class="py-20 bg-primary-600 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold mb-2">4000+</div>
                <p class="text-primary-100">Mutlu Müşteri</p>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">10+</div>
                <p class="text-primary-100">Yıllık Tecrübe</p>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">50+</div>
                <p class="text-primary-100">Uzman Personel</p>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">100%</div>
                <p class="text-primary-100">Müşteri Memnuniyeti</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="iletisim" class="py-20">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Bizimle İletişime Geçin</h2>
                <p class="text-gray-600 mb-8">
                    Size en uygun temizlik hizmeti için hemen iletişime geçin
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center">
                            <i class="fas fa-phone text-primary-500"></i>
                        </div>
                        <div>
                            <div class="font-semibold">Telefon</div>
                            <a href="tel:+902125550123" class="text-gray-600 hover:text-primary-500">+90 (212) 555 01 23</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center">
                            <i class="fas fa-envelope text-primary-500"></i>
                        </div>
                        <div>
                            <div class="font-semibold">E-posta</div>
                            <a href="mailto:info@perahizmet.com" class="text-gray-600 hover:text-primary-500">info@perahizmet.com</a>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center">
                            <i class="fas fa-map-marker-alt text-primary-500"></i>
                        </div>
                        <div>
                            <div class="font-semibold">Adres</div>
                            <p class="text-gray-600">İstanbul, Türkiye</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <form class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="grid gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Ad Soyad</label>
                            <input type="text" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Telefon</label>
                            <input type="tel" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">E-posta</label>
                            <input type="email" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Mesajınız</label>
                            <textarea rows="4" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-primary-500"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                            Gönder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

