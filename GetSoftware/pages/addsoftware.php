<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addsoftwarestyle.css">
    <title>add a software</title>

</head>

<body>

    <?php include '../include/database.php'; ?>

    <form method="POST">

        <input type="input" class="input" name="softwarename" id="softwarename" placeholder="Nom du logiciel" required>
        <!-- mettre le nom du logiciel -->
        <input type="input" class="input" name="softwareimage" id="softwareimage" placeholder="Nom exacte de l'image du logiciel" required>
        <!-- nom de l'image du logiciel -->
        <input type="input" class="input" name="softwareurl" id="softwareurl" placeholder="URL de la page" required>
        <!-- URL de la page --> <br>
        <!-- <input type="checkbox" class="input" name="free" id="free" required>
        <label for="free">gratuit ?</label> -->
        <!-- le logiciel est gratuit ? --> <br>
        <textarea class="input descInput" name="softwaredesc1" id="softwaredesc1" placeholder="Description 1 du logiciel" minlength="50" maxlength="3000"></textarea>
        <!-- description1 du logiciel -->
        <textarea class="input descInput" name="softwaredesc2" id="softwaredesc2" placeholder="Description 2 du logiciel" minlength="50" maxlength="3000"></textarea>
        <!-- description2 du logiciel -->
        <input type="input" class="input" name="softwarecreator" id="softwarecreator" placeholder="créateur du logiciel" required>
        <!-- Éditeur du logiciel -->

        <select class="input form-send" name="imageornot" id="imageornot">
            <option value="0" selected>aucune image</option>
            <option value="1">1 image</option>
            <option value="2">2 images</option>
        </select>

        <input type="submit" class="input form-send" name="formsend" id="formsend">
    </form>



    <?php

    // unlink("../software file/file.txt");

    // mkdir("src/" . $dossier);
    // include '../include/softwarefile.php';

    if (isset($_POST['formsend'])) {

        $softwarename =  '';
        $softwareimage = '';
        $softwareurl =  '';
        $softwaredesc1 = '';
        $softwaredesc2 = '';
        $softwarecreator = '';

        $softwarename =  $_POST['softwarename'];
        $softwareimage = $_POST['softwareimage'];
        $softwareurl =  $_POST['softwareurl'];
        $softwaredesc1 = $_POST['softwaredesc1'];
        $softwaredesc2 = $_POST['softwaredesc2'];
        $softwarecreator = $_POST['softwarecreator'];
        $date = date('Y-m-d');
        $setimage = $_POST['imageornot'];

        setcookie("SetImage", $setimage, 0);
        setcookie("SoftwareName", $softwarename, 0);
        setcookie("SoftwareDesc1", $softwaredesc1, 0);
        setcookie("SoftwareDesc2", $softwaredesc2, 0);
        setcookie("SoftwareCreator", $softwarecreator, 0);

        // $sql = "INSERT INTO softwareid (SoftNames, ImageName, PageURL, AddedAt) VALUES ('{$softwarename}', '{$softwareimage}', '{$softwareurl}', '{$date}')";
        // $db->exec($sql);
        // $sql = "CREATE TABLE {$softwarename} (SoftName VARCHAR(100) PRIMARY KEY NOT NULL, Desc1 TEXT(1000), Desc2 TEXT(1000), Video VARCHAR(255), SoftEditor VARCHAR(255) NOT NULL, IMG1 VARCHAR(255), IMG2 VARCHAR(255))";
        // $db->exec($sql);
        // $sql = "INSERT INTO softwaredetail (SoftName, Desc1, Desc2, SoftEditor) VALUES ('{$softwarename}', '{$softwaredesc1}', '{$softwaredesc2}', '{$softwarecreator}')";
        // $db->exec($sql);

        // echo "commande éxécuté avec succes";
        sleep(0.2);

  ?> <script> location.replace("continueadding.php") </script> <?php } ?>


</body>

</html>