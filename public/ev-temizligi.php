<?php require_once 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="relative py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <h1 class="text-4xl font-bold mb-6">Ev Temizliği Hizmeti</h1>
            <p class="text-lg text-gray-600 mb-8">
                Profesyonel ekibimizle evinizin her köşesi pırıl pırıl
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
                <!-- 1+1 / 2+1 Evler için Paket -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">4 Saat</h3>
                        <div class="text-3xl font-bold text-primary-600">₺1400</div>
                        <p class="text-gray-500 text-sm mt-2">1+1 ve 2+1 Evler</p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>1+1 ve 2+1 daireler için</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Temel temizlik hizmeti</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Standart temizlik malzemeleri dahil</span>
                        </div>
                    </div>

                    <button onclick="selectPackage('4saat', 1400, 1)" class="w-full py-3 px-4 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                        Seç ve Devam Et
                    </button>
                </div>

                <!-- 3+1 Evler için Paket -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100 transform scale-105">
                    <div class="absolute top-0 right-0 bg-primary-500 text-white px-3 py-1 rounded-tr-lg rounded-bl-lg text-sm">
                        En Popüler
                    </div>
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">6 Saat</h3>
                        <div class="text-3xl font-bold text-primary-600">₺1800</div>
                        <p class="text-gray-500 text-sm mt-2">3+1 Evler</p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>3+1 daireler için ideal</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Detaylı temizlik hizmeti</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Standart temizlik malzemeleri dahil</span>
                        </div>
                    </div>

                    <button onclick="selectPackage('6saat', 1800, 1)" class="w-full py-3 px-4 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                        Seç ve Devam Et
                    </button>
                </div>

                <!-- 4+1 ve Üzeri Evler için Paket -->
                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow p-6 border border-gray-100">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">8 Saat</h3>
                        <div class="text-3xl font-bold text-primary-600">₺2200</div>
                        <p class="text-gray-500 text-sm mt-2">4+1 ve üzeri</p>
                    </div>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>4+1 ve üzeri daireler</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Kapsamlı temizlik hizmeti</span>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <i class="fas fa-check text-primary-500 mr-2"></i>
                            <span>Standart temizlik malzemeleri dahil</span>
                        </div>
                    </div>

                    <button onclick="selectPackage('8saat', 2200, 1)" class="w-full py-3 px-4 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                        Seç ve Devam Et
                    </button>
                </div>
            </div>

            <!-- Seçim ve Ödeme Formu (Başlangıçta gizli) -->
            <div id="bookingForm" class="mt-12 bg-white rounded-2xl shadow-lg p-8 hidden">
                <h3 class="text-2xl font-bold mb-6">Rezervasyon Detayları</h3>
                
                <form id="paymentForm" class="space-y-6">
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
                                <label class="block text-sm font-medium text-gray-700 mb-1">Adres</label>
                                <textarea required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500" rows="3"></textarea>
                            </div>
                        </div>

                        <!-- Hizmet Detayları -->
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Temizlik Tarihi</label>
                                <input type="date" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Temizlik Saati</label>
                                <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary-500">
                                    <option>09:00</option>
                                    <option>10:00</option>
                                    <option>11:00</option>
                                    <option>12:00</option>
                                    <option>13:00</option>
                                    <option>14:00</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Personel Sayısı</label>
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center">
                                        <span id="currentStaffCount" class="text-lg font-medium text-gray-900"></span>
                                        <span class="text-gray-600 ml-2">Personel</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button type="button" onclick="adjustStaff(1)" class="px-3 py-1 bg-primary-100 text-primary-600 rounded-lg hover:bg-primary-200 transition-colors">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500 mt-1">* Ekstra her personel için +100₺</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Ekstra Seçenekler</label>
                                <div class="space-y-2">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="extraMaterials" onchange="updatePrice()" class="rounded text-primary-500 focus:ring-primary-500">
                                        <span class="text-gray-700">Özel Temizlik Malzemeleri (+850₺)</span>
                                    </label>
                                    <p class="text-sm text-gray-500 ml-6">Profesyonel temizlik malzemeleri ve ekipmanları</p>
                                </div>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <span class="font-medium">Toplam Tutar:</span>
                                    <span id="totalPrice" class="text-2xl font-bold text-primary-600">₺0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button type="submit" class="px-8 py-3 bg-primary-500 text-white rounded-lg hover:bg-primary-600 transition-colors">
                            Ödemeye Geç
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
    basePrice: 0,
    baseStaffCount: 0,
    currentStaffCount: 0,
    hasExtraMaterials: false
};

function selectPackage(type, price, staffCount) {
    selectedPackage.type = type;
    selectedPackage.basePrice = price;
    selectedPackage.baseStaffCount = staffCount;
    selectedPackage.currentStaffCount = staffCount;
    selectedPackage.hasExtraMaterials = false;
    
    // Checkbox'ı sıfırla
    document.getElementById('extraMaterials').checked = false;
    
    document.getElementById('currentStaffCount').textContent = staffCount;
    document.getElementById('bookingForm').classList.remove('hidden');
    document.getElementById('bookingForm').scrollIntoView({ behavior: 'smooth' });
    updatePrice();
}

function adjustStaff(change) {
    const newCount = selectedPackage.currentStaffCount + change;
    if (newCount >= selectedPackage.baseStaffCount) {
        selectedPackage.currentStaffCount = newCount;
        document.getElementById('currentStaffCount').textContent = newCount;
        updatePrice();
    }
}

function updatePrice() {
    const staffPrice = selectedPackage.basePrice * selectedPackage.currentStaffCount;
    const extraMaterialsPrice = document.getElementById('extraMaterials').checked ? 850 : 0;
    const totalPrice = staffPrice + extraMaterialsPrice;
    document.getElementById('totalPrice').textContent = `₺${totalPrice}`;
}

document.getElementById('paymentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Ödeme sayfasına yönlendirme
    window.location.href = '/odeme.php';
});
</script>

<?php require_once 'includes/footer.php'; ?>

