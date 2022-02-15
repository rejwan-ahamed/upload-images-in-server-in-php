<?php

if (isset($_FILES['image'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $fille_name = $_FILES['image']['name'];
    $fille_tmpname = $_FILES['image']['tmp_name'];

    // move_uploaded_file($fille_tmpname, "upload images/" .  $fille_name);

    if (move_uploaded_file($fille_tmpname, "upload images/" .  $fille_name)) {
        echo "file uploded successfuly";
    } else {
        echo "file not uploded";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <!-- <input type="submit"> -->
        <button type="submit"> submit</button>
    </form>
</body>

</html>