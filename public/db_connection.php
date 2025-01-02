<?php
$host = 'localhost';
$dbname = 'temizlik_hizmeti';
$username = 'root';
$password = 'Abd.1998';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Veritabanı bağlantısı başarılı.";
} catch(PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
    die();
}

// Bağlantı başarılıysa, tabloyu kontrol et
try {
    $stmt = $pdo->query("SELECT 1 FROM musteriler LIMIT 1");
    echo " Müşteriler tablosu mevcut.";
} catch(PDOException $e) {
    echo " Müşteriler tablosu bulunamadı: " . $e->getMessage();
}
?>

