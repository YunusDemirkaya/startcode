<?php 



try {

    $db = new PDO("mysql:host=localhost; dbname=form; charset=utf8", 'root', '');

}
catch(Exception $e)
{
     echo $e->getMessage();
}

























// $servername = "localhost";
// $database = "veritabaniadi";
// $username = "root";
// $password = "";


// //Bağlantı oluşturma

// $db = mysqli_connect($servername, $username, $kullaniciadi, $sifre);

// //Bağlantı Kontrolü

// if(!$db) {

//     die("Başarısız Bağlantı: " . mysqli_connect_error());
// }

// echo "Bağlantı Başarılı";
// mysqli_close($db);























?>