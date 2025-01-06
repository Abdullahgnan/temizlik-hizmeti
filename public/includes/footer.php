<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Hakkımızda -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-gray-800">Hakkımızda</h4>
                <p class="text-gray-600 mb-4">
                    Profesyonel temizlik hizmetleriyle yaşam alanlarınızı daha sağlıklı ve konforlu hale getiriyoruz.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="text-primary-500 hover:text-primary-600">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-primary-500 hover:text-primary-600">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-primary-500 hover:text-primary-600">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Hizmetlerimiz -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-gray-800">Hizmetlerimiz</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-600 hover:text-primary-500">Ev Temizliği</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary-500">Ofis Temizliği</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary-500">Boş Ev Temizliği</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary-500">Cam Temizliği</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary-500">Halı Yıkama</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary-500">Dezenfeksiyon</a></li>
                </ul>
            </div>

            <!-- İletişim -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-gray-800">İletişim</h4>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-primary-500"></i>
                        <span class="text-gray-600">Merkez Ofis: İstanbul, Türkiye</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-phone text-primary-500"></i>
                        <span class="text-gray-600">+90 (212) 555 0123</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-envelope text-primary-500"></i>
                        <span class="text-gray-600">info@perahizmet.com</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-clock text-primary-500"></i>
                        <span class="text-gray-600">Çalışma Saatleri: 09:00 - 18:00</span>
                    </li>
                </ul>
            </div>

            <!-- Bültenimize Katılın -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-gray-800">Bültenimize Katılın</h4>
                <p class="text-gray-600 mb-4">
                    En güncel kampanya ve haberlerden haberdar olun.
                </p>
                <form class="flex gap-2">
                    <input 
                        type="email" 
                        placeholder="E-posta adresiniz" 
                        class="flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500"
                    >
                    <button 
                        type="submit" 
                        class="px-4 py-2 bg-primary-500 text-white rounded-lg hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500"
                    >
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="border-t mt-16 pt-8 text-center text-gray-600">
            © <?php echo date('Y'); ?> PeraHizmet. Tüm hakları saklıdır.
        </div>
    </div>
</section>

<div class="fixed bottom-8 right-8 z-50">
    <a 
        href="https://wa.me/905555555555" 
        target="_blank"
        class="flex items-center gap-2 bg-primary-500 text-white px-6 py-3 rounded-full hover:bg-primary-600 transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200"
    >
        <i class="fas fa-headset text-2xl"></i>
        <span class="font-medium">Bizimle İletişime Geçin</span>
    </a>
</div>

</body>
</html>

