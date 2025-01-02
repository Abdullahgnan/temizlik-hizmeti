<?php
$host = 'localhost';
$dbname = 'temizlik_hizmeti';
$username = 'root';
$password = 'Abd.1998';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Veritabanı bağlantısı başarılı."; // Successful connection message
} catch(PDOException $e) {
    if ($e->getCode() == 1049) {
        echo "Veritabanı bulunamadı. Lütfen 'temizlik_hizmeti' veritabanını oluşturduğunuzdan emin olun.";
    } else {
        echo "Bağlantı hatası: " . $e->getMessage();
    }
    die();
}
?>

