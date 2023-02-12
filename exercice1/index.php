<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><br><br>
    <h1 style="text-align: center;">ExerciceXP-Gold 1 Sum Of The Digits</h1>
    <div class="container">
        <form method="post" action="login.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Votre Nom</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Votre Mot de passe</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

            <?php
                session_start();

                // Si le formulaire a été soumis
                if(isset($_POST['submit'])) {
                    // Récupération des données de formulaire
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                
                    // Vérification des données de connexion
                    if($username == "NomUtilisateur" && $password == "MotDePasse") {
                        $_SESSION['username'] = $username;
                        header("Location: index.php");
                        exit;
                    } else {
                        $msg = "Nom d'utilisateur ou mot de passe incorrect.";
                    }
                }
                
                // Si l'utilisateur n'est pas connecté
                if(!isset($_SESSION['username'])) {
                    header("Location: login.php");
                    exit;
                }
            ?>
    </div>
</body>
</html>