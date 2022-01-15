<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dernière étape !</title>
</head>

<body>

    <form action="../include/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="UploadFile" id="UploadFile">
        <input type="submit" value="envoyer une image" name="submit">
    </form>

    <?php
    echo $_COOKIE['SetImage'];
    echo $_COOKIE['SoftwareName'];
    if (isset($_COOKIE['SoftwareDesc1'])) {
        echo $_COOKIE['SoftwareDesc1'];
    }
    if (isset($_COOKIE['SoftwareDesc2'])) {
        echo $_COOKIE['SoftwareDesc2'];
    }
    echo $_COOKIE['SoftwareCreator'];
    ?>
</body>

</html>