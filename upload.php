<?php
if (isset($_POST["sub"])) {
    $tmp = $_FILES["att"]["tmp_name"];
    $fname = $_FILES["att"]["name"];
    if (!empty($tmp)) {
        $dest = "uploads/";
        if (move_uploaded_file($tmp, $dest . $fname)) {
            echo "Uploaded succesfully";
        } else {
            echo "Upload error";
        }
    } else {
        echo "select file";
    }
    echo $tmp;
}

?>


<!DOCTYPE html>
<html>

<head>
    <h2>Upload Here</h2>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        Attach :<input type="file" name="att"><br /><br />
        <input type="submit" name="sub" value="upload">
    </form>
</body>

</html>