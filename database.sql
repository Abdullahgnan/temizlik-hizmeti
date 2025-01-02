-- Hizmet talepleri tablosunu oluştur
CREATE TABLE IF NOT EXISTS hizmet_talepleri (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sehir VARCHAR(50) NOT NULL,
    bolge VARCHAR(100) NOT NULL,
    sure INT NOT NULL,
    siklik ENUM('one-time', 'weekly') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

