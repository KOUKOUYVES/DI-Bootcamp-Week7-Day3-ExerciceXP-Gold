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
    <h1 style="text-align: center;">ExerciceXP-Gold 2 Motif Utilisant Des Boucles For</h1><br>
    <div class="container">
    <form method="post" action="login.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Votre Nom</label>
                <input type="text" name="username" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>
        <?php
           session_start();

           // Check if the form has been submitted
           if(isset($_POST['username'])) {
             // Store the name in a session variable
             $_SESSION['username'] = $_POST['username'];
           
             // Redirect to welcome page
             header("Location: bienvenu.php");
             exit;
           }
           
           // If the user is not logged in
           if(!isset($_SESSION['username'])) {
             header("Location: auth.php");
             exit;
           }
           ?>
           
           <!-- Welcome.php -->
           <?php
            session_start();  
            // Check if the user is logged in
            if(isset($_SESSION['username'])) {
                echo "Welcome, " . $_SESSION['username'];
            } else {
                echo "Sorry, we don't recognize you. Please <a href='login.php'>login</a>.";
            }

        ?>
    </div>
</body>
</html>