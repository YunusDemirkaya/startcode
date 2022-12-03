<?php
/* Sürücü isteğiyle bir MySQL veritabanına bağlanalım */
$dsn = 'mysql:dbname=kutuphane;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $baglan = new PDO($dsn, $user, $password);
}catch (PDOException $e) {
    echo 'Bağlantı Kurulamadı: ' . $e->getMessage();
}
?>