<?php

$kisaurl = $_POST['kisaurl'];
if ($kisaurl=="") {
    die("URL geçersiz.");
}
else {
    include 'baglan.php';
    $ara=$baglan->query("select * from urlislem where shorturl like '%$kisaurl%' ");//longurl sütununda değişkenimizi çektik varsa.
    $miktar=$ara->rowCount();//verilerin hepsini saydırdık.
        if($miktar>0){
            $veri = $baglan->prepare("select * from urlislem where shorturl=?;");
            $veri ->execute(array($kisaurl));
            $islem = $veri->fetch();

            $yonlendir= $islem['longurl'];
            header("Location: $yonlendir");






            
        }
        else {
            echo"Sonuç bulunamadı.";
        }


    
}


?>