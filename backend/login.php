<?php

    if(isset($_POST['email']) || isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'irfanaziiz945@gmail.com'  && $password == '1') {
            header('Location:./../dashboard.php');
        } 
        else {
            echo "email atau password salah";
        }
    }
?>