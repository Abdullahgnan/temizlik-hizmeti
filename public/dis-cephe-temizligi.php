<?php require_once 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-bold mb-6">Dış Cephe Temizliği</h1>
            <p class="text-lg text-gray-600 mb-8">
                Profesyonel ekip ve ekipmanlarla binanızın dış cephesi ilk günkü gibi
            </p>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <!-- Paket Seçimi -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Küçük Binalar için Paket -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">5 Kat ve Altı</h3>
                        <div class="text-3xl font-bold text-primary-600">₺4500</div>
                        <p class="text-gray-500 text-sm mt-2">Küçük Binalar</p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>5 kata kadar binalar için</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Profesyonel ekipmanlar</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Özel temizlik malzemeleri</span>
                        </div>
                    </div>

                    <button onclick="selectPackage('5kat', 4500)" class="w-full py-3 px-4 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                        Seç ve Devam Et
                    </button>
                </div>

                <!-- Orta Boy Binalar için Paket -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100 transform scale-105">
                    <div class="absolute top-0 right-0 bg-primary-500 text-white px-3 py-1 rounded-tr-lg rounded-bl-lg text-sm">
                        En Popüler
                    </div>
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">6-10 Kat</h3>
                        <div class="text-3xl font-bold text-primary-600">₺7500</div>
                        <p class="text-gray-500 text-sm mt-2">Orta Boy Binalar</p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>6-10 kat arası binalar</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Endüstriyel ekipmanlar</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Özel temizlik çözümleri</span>
                        </div>
                    </div>

                    <button onclick="selectPackage('10kat', 7500)" class="w-full py-3 px-4 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                        Seç ve Devam Et
                    </button>
                </div>

                <!-- Yüksek Binalar için Paket -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">10+ Kat</h3>
                        <div class="text-3xl font-bold text-primary-600">₺12000</div>
                        <p class="text-gray-500 text-sm mt-2">Yüksek Binalar</p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>10 kat üzeri binalar</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>İleri teknoloji ekipmanlar</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Kapsamlı güvenlik önlemleri</span>
                        </div>
                    </div>

                    <button onclick="selectPackage('15kat', 12000)" class="w-full py-3 px-4 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                        Seç ve Devam Et
                    </button>
                </div>
            </div>

            <!-- Seçim ve İletişim Formu (Başlangıçta gizli) -->
            <div id="bookingForm" class="mt-12 bg-white rounded-2xl shadow-lg p-8 hidden">
                <h3 class="text-2xl font-bold mb-6">Detaylı Bilgi Formu</h3>
                
                <form id="contactForm" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Kişisel Bilgiler -->
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Ad Soyad</label>
                                <input type="text" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Telefon</label>
                                <input type="tel" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">E-posta</label>
                                <input type="email" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Bina Adresi</label>
                                <textarea required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Bina Detayları -->
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Bina Yaşı</label>
                                <input type="number" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Cephe Tipi</label>
                                <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500">
                                    <option>Cam Giydirme</option>
                                    <option>Kompozit</option>
                                    <option>Mermer/Granit</option>
                                    <option>Boyalı Cephe</option>
                                    <option>Diğer</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Ek Notlar</label>
                                <textarea class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500" rows="3" placeholder="Varsa özel durumları belirtiniz..."></textarea>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <span class="font-medium">Tahmini Fiyat:</span>
                                    <span id="totalPrice" class="text-2xl font-bold text-primary-600">₺0</span>
                                </div>
                                <p class="text-sm text-gray-500 mt-2">* Kesin fiyat ücretsiz keşif sonrası belirlenecektir.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button type="submit" class="px-8 py-3 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                            Bilgi Talebi Gönder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
let selectedPackage = {
    type: '',
    basePrice: 0
};

function selectPackage(type, price) {
    selectedPackage.type = type;
    selectedPackage.basePrice = price;
    document.getElementById('bookingForm').classList.remove('hidden');
    document.getElementById('bookingForm').scrollIntoView({ behavior: 'smooth' });
    document.getElementById('totalPrice').textContent = `₺${price}`;
}

document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Form gönderimi veya yönlendirme
    alert('Talebiniz alındı. En kısa sürede sizinle iletişime geçeceğiz.');
});
</script>

<?php require_once 'includes/footer.php'; ?> 