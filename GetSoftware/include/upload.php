
<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["UploadFile"]["name"]);
$filename = pathinfo($target_file, PATHINFO_FILENAME);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["UploadFile"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    // echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["UploadFile"]["size"] > 500000) {
    // echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["UploadFile"]["tmp_name"], $target_file)) {
        // echo "The file " . htmlspecialchars(basename($_FILES["UploadFile"]["name"])) . " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
}

    function generateRandomString($length = 30) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
    }

    $newName = "../src/image/" . generateRandomString() . "." . $imageFileType;

    rename($target_file, $newName);

    


?>