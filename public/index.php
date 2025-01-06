<?php require_once 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img 
            src="img/oturma.png"
            alt="OTURMA ODASI" 
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
<section id="hizmetler" class="py-16">
    <div class="container mx-auto px-4">
        <!-- Hizmet Kartları -->
        <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-6">
            <!-- Ev Temizliği -->
            <a href="/ev-temizligi.php" class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="relative h-48 overflow-hidden">
                    <img 
                        src="/images/home-cleaning.jpg" 
                        alt="Ev Temizliği" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-xl font-bold text-white mb-1">Ev Temizliği</h3>
                        <p class="text-gray-200 text-sm">Eviniz için profesyonel hizmet</p>
                    </div>
                </div>
                <div class="p-4 border-t border-gray-100">
                    <div class="flex items-center justify-between">
                        <span class="text-primary-500 font-medium">Detaylı Bilgi</span>
                        <i class="fas fa-arrow-right text-primary-500 transform group-hover:translate-x-2 transition-transform"></i>
                    </div>
                </div>
            </a>

            <!-- Ofis Temizliği -->
            <a href="/ev-temizligi.php" class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="relative h-48 overflow-hidden">
                    <img 
                        src="/images/office-cleaning.jpg" 
                        alt="Ofis Temizliği" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-xl font-bold text-white mb-1">Ofis Temizliği</h3>
                        <p class="text-gray-200 text-sm">İş yeriniz için özel çözümler</p>
                    </div>
                </div>
                <div class="p-4 border-t border-gray-100">
                    <div class="flex items-center justify-between">
                        <span class="text-primary-500 font-medium">Detaylı Bilgi</span>
                        <i class="fas fa-arrow-right text-primary-500 transform group-hover:translate-x-2 transition-transform"></i>
                    </div>
                </div>
            </a>

            <!-- Boş Ev Temizliği -->
            <a href="/ev-temizligi.php" class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="relative h-48 overflow-hidden">
                    <img 
                        src="/images/empty-house-cleaning.jpg" 
                        alt="Boş Ev Temizliği" 
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <h3 class="text-xl font-bold text-white mb-1">Boş Ev Temizliği</h3>
                        <p class="text-gray-200 text-sm">Taşınma öncesi ve sonrası</p>
                    </div>
                </div>
                <div class="p-4 border-t border-gray-100">
                    <div class="flex items-center justify-between">
                        <span class="text-primary-500 font-medium">Detaylı Bilgi</span>
                        <i class="fas fa-arrow-right text-primary-500 transform group-hover:translate-x-2 transition-transform"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Stats Section - Yukarı Taşındı -->
<section class="py-10 bg-primary-600 text-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-center gap-12">
            <div class="text-center">
                <div class="text-2xl font-bold">1000+</div>
                <p class="text-primary-100 text-xs uppercase tracking-wider mt-1">Mutlu Müşteri</p>
            </div>
            <div class="text-center border-l border-r border-primary-500/30 px-12">
                <div class="text-2xl font-bold">5+</div>
                <p class="text-primary-100 text-xs uppercase tracking-wider mt-1">Yıllık Tecrübe</p>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold">%100</div>
                <p class="text-primary-100 text-xs uppercase tracking-wider mt-1">Müşteri Memnuniyeti</p>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Style Reviews -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Müşteri Deneyimleri</h2>
            <div class="w-20 h-1 bg-primary-500 mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-6xl mx-auto">
            <!-- WhatsApp Style Message 1 -->
            <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center text-white font-bold">
                        EY
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Esra Y.</h4>
                        <p class="text-xs text-gray-500">WhatsApp • 1 gün önce</p>
                    </div>
                    <div class="ml-auto">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>
                <div class="ml-13 bg-[#e7ffdb] rounded-lg p-3">
                    <p class="text-gray-700">Harika bir iş çıkardınız 👏 Özellikle koltukların lekelerinin çıkması beni çok mutlu etti. Hatice Hanım'a ayrıca teşekkür ederim, çok titiz çalıştı ✨</p>
                </div>
            </div>

            <!-- WhatsApp Style Message 2 -->
            <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center text-white font-bold">
                        AD
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Ahmet D.</h4>
                        <p class="text-xs text-gray-500">WhatsApp • 3 gün önce</p>
                    </div>
                    <div class="ml-auto">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>
                <div class="ml-13 bg-[#e7ffdb] rounded-lg p-3">
                    <p class="text-gray-700">Ofisimizin temizliği için düzenli olarak çalışıyoruz. Her seferinde aynı özenle yapılıyor. Camlar ve yerler pırıl pırıl oluyor ✨ Teşekkürler 🙏</p>
                </div>
            </div>

            <!-- WhatsApp Style Message 3 -->
            <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center text-white font-bold">
                        SB
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Selin B.</h4>
                        <p class="text-xs text-gray-500">WhatsApp • 2 gün önce</p>
                    </div>
                    <div class="ml-auto">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>
                <div class="ml-13 bg-[#e7ffdb] rounded-lg p-3">
                    <p class="text-gray-700">Yeni evimize taşınmadan önce temizlik için geldiler. Banyo ve mutfak fayansları tertemiz oldu. Ekip çok güler yüzlü ve işinin ehli 💯</p>
                </div>
            </div>

            <!-- WhatsApp Style Message 4 -->
            <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center text-white font-bold">
                        MK
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Mehmet K.</h4>
                        <p class="text-xs text-gray-500">WhatsApp • 4 gün önce</p>
                    </div>
                    <div class="ml-auto">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>
                <div class="ml-13 bg-[#e7ffdb] rounded-lg p-3">
                    <p class="text-gray-700">İnşaat sonrası temizlik için tercih ettik. Mükemmel iş çıkardılar 👍 Tüm mermer tozları ve inşaat artıkları temizlendi. Teşekkürler 🙏</p>
                </div>
            </div>

            <!-- WhatsApp Style Message 5 -->
            <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center text-white font-bold">
                        ZA
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Zeynep A.</h4>
                        <p class="text-xs text-gray-500">WhatsApp • 1 hafta önce</p>
                    </div>
                    <div class="ml-auto">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>
                <div class="ml-13 bg-[#e7ffdb] rounded-lg p-3">
                    <p class="text-gray-700">Düzenli ev temizliği için anlaştık, çok memnunuz. Özellikle Fatma Hanım'ın titizliği ve güler yüzü için teşekkürler 🌸 Her şey pırıl pırıl ✨</p>
                </div>
            </div>

            <!-- WhatsApp Style Message 6 -->
            <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center text-white font-bold">
                        CK
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-900">Can K.</h4>
                        <p class="text-xs text-gray-500">WhatsApp • 5 gün önce</p>
                    </div>
                    <div class="ml-auto">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>
                <div class="ml-13 bg-[#e7ffdb] rounded-lg p-3">
                    <p class="text-gray-700">Ofisimizin halıları çok kötü durumdaydı, şimdi ilk günkü gibi oldu. Profesyonel ekip ve ekipman 👌 Kesinlikle tavsiye ediyorum ⭐️</p>
                </div>
            </div>

            <!-- Daha Fazla Yorum Butonu -->
            <div class="md:col-span-2 text-center mt-8">
                <button class="bg-white px-6 py-3 rounded-lg shadow-sm hover:shadow-md transition-shadow text-primary-600 font-medium">
                    800+ Yorumun Tümünü Gör
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Slider JavaScript -->
<script>
let currentSlide = 0;
const totalSlides = 3; // Toplam slide sayısı

function updateDots() {
    const dotsContainer = document.getElementById('sliderDots');
    dotsContainer.innerHTML = '';
    
    for(let i = 0; i < totalSlides; i++) {
        const dot = document.createElement('button');
        dot.className = `w-2 h-2 rounded-full transition-colors ${i === currentSlide ? 'bg-primary-500' : 'bg-gray-300'}`;
        dot.onclick = () => goToSlide(i);
        dotsContainer.appendChild(dot);
    }
}

function goToSlide(index) {
    currentSlide = index;
    const slider = document.getElementById('testimonialSlider');
    slider.style.transform = `translateX(-${index * 100}%)`;
    updateDots();
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    goToSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    goToSlide(currentSlide);
}

// Auto slide her 5 saniyede bir
setInterval(nextSlide, 5000);

// İlk yüklemede dotları oluştur
updateDots();
</script>

<!-- İletişim Section -->
<section id="iletisim" class="py-20 bg-gradient-to-br from-primary-50 to-white relative overflow-hidden">
    <!-- Dekoratif Elementler -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-primary-100 rounded-full filter blur-3xl opacity-50 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-primary-100 rounded-full filter blur-3xl opacity-50 translate-x-1/2 translate-y-1/2"></div>
    
    <div class="container mx-auto px-4 relative">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Bizimle İletişime Geçin</h2>
            <p class="text-gray-600 max-w-xl mx-auto">
                Size en uygun temizlik hizmeti için hemen iletişime geçin
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- İletişim Bilgileri -->
            <div class="space-y-8">
                <!-- İletişim Kartları -->
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-phone text-primary-500"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Telefon</h3>
                            <a href="tel:+902125550123" class="text-lg font-semibold text-gray-900 hover:text-primary-500 transition-colors">
                                +90 (212) 555 01 23
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-envelope text-primary-500"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">E-posta</h3>
                            <a href="mailto:info@perahizmet.com" class="text-lg font-semibold text-gray-900 hover:text-primary-500 transition-colors">
                                info@perahizmet.com
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow group">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-primary-50 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform">
                            <i class="fas fa-map-marker-alt text-primary-500"></i>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-500">Adres</h3>
                            <p class="text-lg font-semibold text-gray-900">İstanbul, Türkiye</p>
                        </div>
                    </div>
                </div>

                <!-- Sosyal Medya -->
                <div class="flex items-center gap-4 pt-4">
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:shadow-lg transition-shadow hover:scale-110 transform duration-200">
                        <i class="fab fa-whatsapp text-green-500"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:shadow-lg transition-shadow hover:scale-110 transform duration-200">
                        <i class="fab fa-instagram text-pink-500"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md hover:shadow-lg transition-shadow hover:scale-110 transform duration-200">
                        <i class="fab fa-facebook text-blue-500"></i>
                    </a>
                </div>
            </div>Z

            <!-- İletişim Formu -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="relative">
                            <input type="text" 
                                   class="w-full px-4 py-3 bg-gray-50 rounded-lg focus:ring-2 focus:ring-primary-500 transition-all outline-none peer"
                                   placeholder=" "
                                   required
                            />
                            <label class="absolute left-4 top-3 text-gray-400 transition-all peer-focus:-top-6 peer-focus:text-sm peer-focus:text-primary-500 peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-sm">
                                Adınız
                            </label>
                        </div>

                        <div class="relative">
                            <input type="text" 
                                   class="w-full px-4 py-3 bg-gray-50 rounded-lg focus:ring-2 focus:ring-primary-500 transition-all outline-none peer"
                                   placeholder=" "
                                   required
                            />
                            <label class="absolute left-4 top-3 text-gray-400 transition-all peer-focus:-top-6 peer-focus:text-sm peer-focus:text-primary-500 peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-sm">
                                Soyadınız
                            </label>
                        </div>
                    </div>

                    <div class="relative">
                        <input type="tel" 
                               class="w-full px-4 py-3 bg-gray-50 rounded-lg focus:ring-2 focus:ring-primary-500 transition-all outline-none peer"
                               placeholder=" "
                               required
                        />
                        <label class="absolute left-4 top-3 text-gray-400 transition-all peer-focus:-top-6 peer-focus:text-sm peer-focus:text-primary-500 peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-sm">
                            Telefon
                        </label>
                    </div>

                    <div class="relative">
                        <textarea 
                            class="w-full px-4 py-3 bg-gray-50 rounded-lg focus:ring-2 focus:ring-primary-500 transition-all outline-none resize-none peer"
                            rows="4"
                            placeholder=" "
                            required
                        ></textarea>
                        <label class="absolute left-4 top-3 text-gray-400 transition-all peer-focus:-top-6 peer-focus:text-sm peer-focus:text-primary-500 peer-[:not(:placeholder-shown)]:-top-6 peer-[:not(:placeholder-shown)]:text-sm">
                            Mesajınız
                        </label>
                    </div>

                    <button type="submit" 
                            class="w-full py-4 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors flex items-center justify-center gap-2 group">
                        <span>Gönder</span>
                        <i class="fas fa-paper-plane transform group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

