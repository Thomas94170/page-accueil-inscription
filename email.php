<?php

// include_once('exercice-recrutement.html');

$inscription = 'Merci de vous être inscrit!';
$error = 'E-mail non valide, veuillez recommencer';



if (isset($_POST['valider'])) {
    if (isset($_POST['email'])) {
        if (!empty($_POST['email'])) {
            $email = htmlspecialchars($_POST['email']);
            echo '<div>' . $inscription . '</div>';
            echo '<div>L\'adresse ' . $email . ' est bien enregistré</div>';
        } else {
            echo '<div class="alert alert-success text-center">' . $error . '</div>';
        }
    }
}

// if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//     $message = 'Merci de vous êtes inscris à notre Newsletter !';
//     echo '<div class="alert alert-success text-center">' . $inscription . '</div>';
// } else {
//     $error = 'L\'addresse email que vous avez renseignée n\'est pas valide';
//     echo '<div class="alert alert-danger text-center">' . $error . '</div>';
// }
