<?php 

/* Veritabanı bağlantısı */

$db = 'mysql:dbname;=projects;host=localhost';
$user = 'root';
$password = '';


try {

    $baglan = new PDO($db, $user, $password);
} catch (PDOException $e) {
    echo 'Bağlantı Kurulamadı: ' . $e->getMessage();
}










?>