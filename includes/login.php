<?php

if (isset($_POST['formlogin'])) {
    extract($_POST);

    if (!empty($lemail) && !empty($lpassword)) {

        $q = $db->prepare("SELECT * FROM users WHERE email = :email");
        $q->execute(['email' => $lemail]);
        $result = $q->fetch();
echo'1';
        if ($result == true) {
            //le compte existe bien
            echo'2';
            if (password_verify($lpassword, $result['password'])) {
                echo "Le mot de passe est bon, connexion en cours";
            } else {
                echo "Le mot de passe n'est pas correct";
            }
        } else {
            echo "Le compte portant l'email " . $lemail . " n'existe pas";
        }
    } else {
        echo "Veuillez compléter l'ensemble des champs";
    }
}
