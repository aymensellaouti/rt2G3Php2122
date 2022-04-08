<?php
session_start();
// 1 - récupérer le login et le mot de passe
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
// 2 - Vérifier les credentials :
    // 2-1 si ok
    if ($email == 'admin@admin.com' && $password === '0000') {
        // stocker l'image chez le serveur
        $_SESSION['username']=$email;
        $file = $_FILES['picture'];
         if (isset($file) && $file['name']) {
             copy(
                 $file['tmp_name'],
                 "assets/images/".uniqid().$file['name']
             );
         }
        //Envoyer vers la page home
        header('location:index.php');
    } else {
        // 2-2 si ko Renvoyer vers la page login et lui afficher un message d'erreur
        header('location:login.php?errorMessage=veuillez vérifier vos credentials');
    }
