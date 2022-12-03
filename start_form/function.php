<?php

require 'config.php';

if(isset($_POST['submit'])) {

    $kullaniciadi = $_POST['kullaniciadi'];
    $sifre = $_POST['sifre'];
    $mail = $_POST['mail'];

    if(!$kullaniciadi) {
        echo "Kullanıcı adı giriniz";
        header('Refresh:2; index.php');

    } elseif (!$sifre) {
        echo "lütfen sifre giriniz";
        header('Refresh:2; index.php');

    }elseif (!$mail) {
        echo "lütfen mail adresi giriniz";
        header('Refresh:2; index.php');

    } else {
        // Veritabanı kayıt işlemi
        $sorgu = $db->prepare('INSERT INTO form_table  SET kullaniciadi = ?, sifre = ?, mail = ?');
        $ekle = $sorgu->execute([
            $kullaniciadi,
            $sifre,
            $mail
        ]);
        
        if($ekle){
            echo "<b>$kullaniciadi</b> Kaydınız Başarıyla Tamamlandı.!!! <br><br> Sistem Bilgileriniz<br><b>$kullaniciadi</b><br><b>$sifre</b><br><b>$mail</b>";
            header('Refresh:2; index.php');
        } else {
            echo "Bir hata oluştu lütfen kontrol edin."; 
        }

    }
}







?>