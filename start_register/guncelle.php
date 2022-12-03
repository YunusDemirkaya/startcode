<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Start - Update</title>
</head>

<body>

    <header>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="h1 display-1 text-center">Register</div>
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

        <div class="container">
            <form action="" method="post" class="row mt-4 g-3">
                <input type="hidden" name="ogrno" value="">
                <div class="col-6">
                    <label for="ad" class="form-label">Adınız</label>
                    <input type="text" class="form-control" name="ad">
                </div>
                <div class="col-6">
                    <label for="sad" class="form-label">Soyadınız</label>
                    <input type="text" class="form-control" name="sad">
                </div>
                <div class="col-6">
                    <label for="sınıf" class="form-label">sınıf</label>
                    <input type="text" class="form-control" name="sınıf">
                </div>
                <div class="col-6">
                    <label for="dtarih" class="form-label">Doğum Tarihi</label>
                    <input type="date" class="form-control" name="dtarih">
                </div>
                <div class="col">
                    <label for="" class="form-label">Kız
                        <input type="radio" name="cins" value="K">
                    </label>
                    <label for="" class="form-label">Erkek
                        <input type="radio" name="cins" value="E">
                    </label>
                </div>
                <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
            </form>
        </div>

    </main>
    <footer></footer>





</body>

</html>