<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="http://localhost/phpmyadmin/favicon.ico" type="image/x-icon">
    <title>GetASoftware - download software easily</title>
    <?php include 'include/database.php'; ?>
</head>

<body>
    <header class="header">
        <h1 class="header-text">téléchargez des logiciels sans souci, facilement et rapidement !</h1>
    </header>

    

    <form method="GET">
        <input type="input" class="input research-input" name="searchsoft" id="searchsoft" placeholder="recherchez votre logiciel">

        <input type="checkbox" class="input check-input" name="free" id="free">
        <label for="free">Logiciel gratuit</label>
        
        <input type="checkbox" class="input check-input" name="pay" id="pay">
        <label for="pay">logiciel payant</label>
        
        <input type="checkbox" class="input check-input" name="trial" id="trial">
        <label for="trial">logiciel en version d'essai</label>

        <input type="submit" class="input form-send" id="formsend">
    </form>

    <a href="addsoftware.php">clique moi</a>

    <?php

    $opt2 = "";
    $opt3 = "";
    $opt4 = "";
    
    if (isset($_GET['free'])) {
        $opt2 = " AND free = 'free'";
    }
    if (isset($_GET['trial'])) {
        $opt3 = " AND free = 'trial'";
    }
    if (isset($_GET['pay'])) {
        $opt4 = " AND free = 'pay'";
    }
    ?>

    <div class="SoftList">
        <?php

        

        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

        if (isset($_GET['searchsoft'])) {
            
            $searchsoft = $_GET['searchsoft'];

            $opt1 = "SELECT * FROM softwareid WHERE SoftNames LIKE '%{$searchsoft}%'";
            

            $searchconcated = $opt1 . $opt2 . $opt3 . $opt4;

            $q = $db->query("{$searchconcated}");

            while ($softwareid = $q->fetch()) {

                $imagedir = $actual_link . "/src/image/" . $softwareid['ImageName'];

                $siteurl = $softwareid['PageURL'];
                $softname = $softwareid['SoftNames'];
                $softwareurl = "pages/softwaredetail.php?detail=" . $softwareid['SoftNames'] ;

        ?>  <div class="softdiv" onclick="location.href='<?php echo $softwareurl ?>';">
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