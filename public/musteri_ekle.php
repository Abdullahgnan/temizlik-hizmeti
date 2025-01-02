<?php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare('INSERT INTO musteriler (ad, soyad, email, telefon, hizmet_turu) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([
            $_POST['ad'],
            $_POST['soyad'],
            $_POST['email'],
            $_POST['telefon'],
            $_POST['hizmet_turu']
        ]);
        
        // Başarılı ekleme sonrası ana sayfaya yönlendir
        header('Location: index.php?success=true');
        exit;
    } catch(PDOException $e) {
        echo "Ekleme hatası: " . $e->getMessage();
        die();
    }
}
?>

