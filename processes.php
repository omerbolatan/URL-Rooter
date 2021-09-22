<?php
   
   if (isset($_POST['longurl'])) 
   {

    $urlmi = trim(filter_input(INPUT_POST, 'longurl', FILTER_VALIDATE_URL));

    if ($_POST['longurl']=="") 
    {
        die("<p>Uzun URL Kısmı Boş Bırakılamaz.</p>");
        # code...
    }

    else if (!filter_var($urlmi, FILTER_VALIDATE_URL)) 
    {
        die("<p>URL Şu Şekilde Olmalıdır: https://ornek.com </p>");
    }

    else
    {
        include 'baglan.php';
        $longurl = $_POST['longurl'];
        $opsionalurl = $_POST['opsionalurl'];
        $opsionalhttp = "https://$opsionalurl.com";
            if (isset($longurl)) {

                $ara=$baglan->query("select * from urlislem where longurl like '%$longurl%' ");//longurl sütununda değişkenimizi çektik varsa.
                $miktar=$ara->rowCount();//verilerin hepsini saydırdık.

                    if($miktar>0){


                        
                      echo"Bu Link Daha Önceden Kayıt Edilmiş.";
                      die();
                         }


                         else{
                             if ($opsionalurl =="") {
                                    $rand = mt_rand();
                                    $foropsional ="https://$rand.com";
                                    $ekle = "INSERT INTO urlislem (longurl, shorturl)
                                    VALUES ('$longurl', '$foropsional')";
                                    $baglan->exec($ekle);
                                    echo "Kısaltma Başarılı. Kısaltılmış Linkiniz: $foropsional";
                             }
                             else {
                                $opsionalhttp = strtolower($opsionalhttp);
                                $ekle = "INSERT INTO urlislem (longurl, shorturl)
                                VALUES ('$longurl', '$opsionalhttp')";
                                $baglan->exec($ekle);
                                echo "Kısaltma Başarılı. Kısaltılmış Linkiniz: $opsionalhttp";
                             }
                        }

                    }
    }
    }

?>
