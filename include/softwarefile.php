<!DOCTYPE html>
<html lang="fr">
<head>
</head>
<body>
    <?php

    $myfile = fopen("../softwarefile/file.txt", "w") or die("Unable to open file!");
    $txt = "ddddsdsd";
    fwrite($myfile, $txt);
    
    ?>
</body>
</html>