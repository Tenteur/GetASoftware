<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "detail de: " . $_GET['detail'];?></title>
    <?php include '../include/database.php'; ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5179921350383124" crossorigin="anonymous"></script>
    <?php include '../reusable/pages/header.html' ?>
</head>

<body>

    <?php
    $url = $_GET['detail'];
    $opt1 = "";
    $q = $db->query("SELECT * FROM softwaredetail WHERE SoftName LIKE '{$url}'");

    $softwareid = $q->fetch();
    var_dump($softwareid);
    echo $softwareid['Desc1']
    ?>

</body>

</html>