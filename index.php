<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>GetASoftware - download software easily</title>

</head>

<body>
    <header class="header">
        <h1 class="header-text">téléchargez des logiciels sans souci, facilement et rapidement !</h1>
    </header>

    <?php include 'include/database.php'; ?>

    <form method="GET">
        <input type="input" class="input research-input" name="searchsoft" id="searchsoft" placeholder="recherchez votre logiciel" required>
        <input type="checkbox" class="input check-input" name="free" id="free" placeholder="gratuit ?">
        <label for="free">Scales</label>
        <input type="submit" class="input form-send" id="formsend">
    </form>

    <a href="addsoftware.php">clique moi</a>


    <div class="SoftList">
    <?php

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

    if (isset($_GET['searchsoft'])) {
        $searchsoft = $_GET['searchsoft'];

        $searchopt = "SELECT * FROM softwareid WHERE SoftNames LIKE '%{$searchsoft}%'";

        $q = $db->query("{$searchopt}");

        while ($softwareid = $q->fetch()) {
            $imagedir = $actual_link . "/src/image/" . $softwareid['ImageName'];

            $siteurl = $softwareid['PageURL'];
            $softname = $softwareid['SoftNames'];

    ?> <div class="softdiv">
                <a href="<?php echo $siteurl ?>" class="SoftName">
                    <h4><?php echo $softname ?></h4>
                </a>
                <img src="<?php echo $imagedir ?>" alt="<?php echo 'logo de ' . $softwareid['SoftNames'] ?>" class="SoftwareIMG">
            </div>

    <?php
    
        }
    }

    ?>

    </div>

    <h2 class="inutile">ipsum dolor sit amet consectetur adipisicing elit. Tempore odio expedita facilis aperiam dolorem eos consequuntur eveniet officia labore culpa repudiandae tempora obcaecati, aspernatur sit rerum veniam nulla magnam cumque.</h2>

</body>

</html>