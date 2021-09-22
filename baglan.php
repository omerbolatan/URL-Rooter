<?php
//PDO KULLANILARAK VERİTABANI BAĞLANTISI YAPILIYOR.
try {
    $baglan = new PDO("mysql:host=localhost;dbname=frndmurl", "neo", "Omer.1968");
} catch ( PDOException $hata ){
    print $hata->getMessage();
}
?>