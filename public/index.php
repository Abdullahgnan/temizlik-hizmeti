<?php require_once 'includes/header.php'; ?>

<section class="py-20 text-center">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold max-w-4xl mx-auto leading-tight">
            Profesyonel Temizlik Hizmetleri Parmaklarınızın Ucunda
        </h1>
        <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
            Ev ve ofisiniz için uzman temizlik profesyonelleriyle bağlantı kurun. Kaliteli hizmet, güvenilir profesyoneller ve kusursuz sonuçlar.
        </p>
        <a href="#iletisim" class="inline-block mt-8 px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-lg transition-colors">
            Hemen Başlayın
        </a>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Hizmetlerimiz</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $services = [
                [
                    'icon' => 'fa-home',
                    'title' => 'Ev Temizliği',
                    'description' => 'Eviniz için profesyonel temizlik hizmetleri',
                    'features' => [
                        'Tüm odaların detaylı temizliği',
                        'Mutfak ve banyo dezenfeksiyonu',
                        'Zemin temizliği ve vakumlama',
                        'Toz alma ve yüzey temizliği'
                    ]
                ],
                [
                    'icon' => 'fa-building',
                    'title' => 'Boş Ev Temizliği',
                    'description' => 'Boş mülkler için kapsamlı temizlik',
                    'features' => [
                        'Taşınma öncesi/sonrası temizlik',
                        'Pencere ve çerçeve temizliği',
                        'Dolap ve depo temizliği',
                        'Zemin yenileme'
                    ]
                ],
                [
                    'icon' => 'fa-city',
                    'title' => 'Ofis Temizliği',
                    'description' => 'Ticari temizlik çözümleri',
                    'features' => [
                        'Çalışma alanı dezenfeksiyonu',
                        'Ortak alan bakımı',
                        'Tuvalet temizliği',
                        'Atık yönetimi'
                    ]
                ]
            ];

            foreach ($services as $service): ?>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <i class="fas <?php echo $service['icon']; ?> text-2xl text-blue-500"></i>
                        <div>
                            <h3 class="text-xl font-semibold"><?php echo $service['title']; ?></h3>
                            <p class="text-sm text-gray-500 mt-1"><?php echo $service['description']; ?></p>
                        </div>
                    </div>
                    <ul class="space-y-2">
                        <?php foreach ($service['features'] as $feature): ?>
                            <li class="text-sm flex items-center gap-2">
                                <span class="h-1.5 w-1.5 bg-blue-500 rounded-full"></span>
                                <?php echo $feature; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="iletisim" class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">İletişim</h2>
        <div class="max-w-md mx-auto">
            <form action="musteri_ekle.php" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Ad</label>
                    <input type="text" name="ad" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Soyad</label>
                    <input type="text" name="soyad" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Telefon</label>
                    <input type="tel" name="telefon" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Hizmet Türü</label>
                    <select name="hizmet_turu" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Seçiniz</option>
                        <option value="ev">Ev Temizliği</option>
                        <option value="bos_ev">Boş Ev Temizliği</option>
                        <option value="ofis">Ofis Temizliği</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Gönder
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

