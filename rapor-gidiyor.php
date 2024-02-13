<?php
// Form verilerini alma
$personelAdi = $_POST['personelAdi'];
$magazaSecimi = $_POST['magazaSecimi'];
$sehirSecimi = $_POST['sehirSecimi'];
$satisAdeti = $_POST['satisAdeti'];
$raporTarihi = $_POST['raporTarihi'];
$urunSecimi = $_POST['urunSecimi'];
$toplamTutar = $_POST['toplamTutar'];

// Verileri kullanarak işlemleri gerçekleştir, örneğin veritabanına kaydet veya nereden alıyorsan oraya at kra.

// Başarılı bir yanıt gönder
echo "Raporunuz başarıyla yöneticiye gönderildi!";
?>
