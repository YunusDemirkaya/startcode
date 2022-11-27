<?php 

    if (isset($_POST['submit'])){
        $post_name = $_POST['name'];
        $post_surname = $_POST['surname'];
        $post_mail = $_POST['mail'];

        echo $post_name;
        echo $post_surname;
        echo $post_mail;
    }


?>