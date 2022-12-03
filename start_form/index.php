<?php

require 'config.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Start Code - Form</title>
</head>



<body>


    <section>


        <div class="container">
            <h1 class="heading">Form</h1>

            <form action="function.php" method="POST">
                <label for="kullaniciadi">Adınız</label>
                <input type="text" name="kullaniciadi" id="kullaniciadi" placeholder="Adınız">

                <label for="sifre">Soyadınız</label>
                <input type="password" name="sifre" id="sifre" placeholder="Sifreniz">

                <label for="mail">E-Posta</label>
                <input type="mail" name="mail" id="mail" placeholder="E-Posta">

                <button type="submit" name="submit">Gönder</button>
            </form>

            <!-- <table border="2">
                <tr>
                    <th>ID</th>
                    <th>Kullanıcı Adı</th>
                    <th>Şifre</th>

                </tr>

            </table> -->
            <?php
            //     $sorgu = "Select * from `form_table`";
            //     $sonuc = $db->query($sorgu);

            //     While($satir = $sonuc->fetch_assoc())
            //     {
            // echo $satir['id'];
            //     }


            ?>



        </div>

    </section>





</body>

</html>