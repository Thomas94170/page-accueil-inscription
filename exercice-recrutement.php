<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="exo-styles.css">
</head>

<body>
    <!-- <?php
            include("menu.php");
            ?> -->


    <br><br><br><br><br><br>



    <div>
        <div class="countdown d-flex justify-content-center fst-italic text-light text-center" id="compte_a_rebours"></div>
        <p class="d-flex justify-content-center fst-italic text-light text-center formulaire">Il arrive bientot... Inscrivez-vous afin d'être informé!</p>
        <br>
        <div class="d-flex justify-content-center fst-italic text-light text-center formulaire">
            <div class=" fst-italic text-warning text-center">
                <form class="d-flex justify-content-center" action="#" method="POST">
                    <div class="form-group champ">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <button type="submit" name='valider' class="btn btn-light">S'inscrire</button>
                </form>
            </div>

            <br>
        </div>
        <br>
        <br>
        <br>
        <div class="d-flex justify-content-center fst-italic text-light text-center">
            <span class="logo">
                <img src="./fb.png" alt="facebook" srcset="" width="40px" height="40px">
            </span>

            <span class="logo">
                <img src="twitter.png" alt="twitter" srcset="" width="40px" height="40px">
            </span>
            <span class="logo">
                <img src="insta.png" alt="insta" srcset="" width="40px" height="40px">
            </span>
            <span class="logo">
                <img src="google.png" alt="google" srcset="" width="40px" height="40px">
            </span>
        </div>
    </div>
    <?php
    $inscription = 'Merci de vous être inscrit !';
    $error = 'E-mail non valide, veuillez recommencer';



    if (isset($_POST['valider'])) {
        if (isset($_POST['email'])) {
            if (!empty($_POST['email'])) {
                $email = htmlspecialchars($_POST['email']);
                echo '<div class="alert alert-success  text-center inscription">' . $inscription . '</div>';
                echo '<div  class="alert alert-success text-center inscription">L\'adresse ' . $email . ' est bien enregistré !</div>';
            } else {
                echo '<div class="alert alert-success text-center inscription">' . $error . '</div>';
            }
        }
    }
    ?>


    <div id="particles-js"></div>
    <br>








    <!-- <?php
            include("footer.php");
            ?> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./comptes a rebours en JS/script.js"></script>
    <script src="./anim-js/particles.js"></script>
    <script src="./anim-js/particles.min.js"></script>
    <script src="./anim-js/app.js"></script>

</body>

</html>