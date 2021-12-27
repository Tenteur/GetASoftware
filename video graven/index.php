<?php ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>

<body>

    <form method="POST">
        <input type="password" name="password" id="password" placeholder="votre mot de passe" required>
        <input type="submit" name="formsend" id="formsend">
    </form>

    <?php

    include 'database.php';
    global $db;



    if (isset($_POST['formsend'])) {

        extract($_POST);
        
        if(!empty($password)){

            $options = [
                'cost' => 12,
            ];
            $hashpass = password_hash("$password", PASSWORD_BCRYPT, $options);


            $q = $db->prepare("INSERT INTO users(pseudo,email,password) VALUES(:pseudo,:email,:password)");
            $q->execute([
                'pseudo' => 'pasdeuxprenom',
                'email' => 'pasdeuxmail@outlook.fr',
                'password' => $hashpass
            ]);


        }
        
    }

    ?>

</body>

</html>