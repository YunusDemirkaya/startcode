<?php 

if (isset($_POST['submit'])){
    $post_name = $_POST['name'];
    $post_surname = $_POST['surname'];
    $post_mail = $_POST['mail'];

}


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
            <h1 class="heading">Sonuçlar</h1>


            <form>

                <p>Adınız: <br><b><?php echo $post_name; ?><b></p>

                <hr>
                <p>Soyadınız: <br><b><?php echo $post_surname; ?><b></p>

                <hr>
                <p>Mail Adresiniz: <br><b><?php echo $post_mail; ?><b></p>
                <hr>


            </form>

 
            <a style="padding: 10px 15px; background-color:red; color: white; text-decoration:none; font-size: 16px; border-radius:10px;"  href="/universecode/Start/">Form Ekranı</a>




        </div>

    </section>





</body>

</html>