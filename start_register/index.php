<?php

include "baglan.php";


$sql = "SELECT * FROM ogrenci";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Start - Resgister</title>
</head>

<body>

    <header>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="h1 display-1 text-center">SİSTEM</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-primary">Tüm Öğrenciler</a>
                        <a href="Ekle.php" class="btn btn-outline-primary">Öğrenci Ekle</a>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main>

        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ad</th>
                                <th>Soyad</th>
                                <th>İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)){ ?>
                            <tr>
                                <td><?=$satir['ogrno']?></td>
                                <td><?=$satir['ograd']?></td>
                                <td><?=$satir['ogrsoyad']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="detay.php?ogrno;=<?=$satir['ogrno']?>" class="btn btn-success">Detay</a>
                                        <a href="#" class="btn btn-secondary">Güncelle</a>
                                        <a href="#" class="btn btn-danger">Kaldır</a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



    </main>
    <footer></footer>
</body>
</html>