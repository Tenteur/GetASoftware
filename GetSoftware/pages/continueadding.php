<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dernière étape !</title>
    <?php include '../include/database.php' ?>
</head>

<body>

    <form action="../include/upload.php" method="post" enctype="multipart/form-data">
        
        <?php
        $SetImage = $_COOKIE['SetImage'];
            if($SetImage == 0) {
                
            } else if($SetImage == 1){
                ?> 
                <input type="file" name="UploadFile" id="UploadFile">
                <input type="submit" value="envoyer une image" name="submit">
                <?php
            } else if($SetImage == 2){
                ?> 
                <input type="file" name="UploadFile" id="UploadFile">
                <input type="file" name="UploadFile" id="UploadFile"> 
                <input type="submit" value="envoyer une image" name="submit">
                <?php
            }
        ?>
        
    </form>

    <?php 

    ?>

</body>

</html>