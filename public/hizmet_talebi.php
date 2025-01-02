<?php
require_once 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $stmt = $pdo->prepare('INSERT INTO hizmet_talepleri (sehir, bolge, sure, siklik) VALUES (?, ?, ?, ?)');
        $stmt->execute([
            $_POST['sehir'],
            $_POST['bolge'],
            $_POST['duration'],
            $_POST['frequency']
        ]);
        
        header('Location: bos-ev-temizligi.php?success=true');
        exit;
    } catch(PDOException $e) {
        echo "Hata: " . $e->getMessage();
        die();
    }
}
?>

