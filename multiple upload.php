<?php
if (isset($_POST["sub"])) {
    $tmp = $_FILES["att"]["tmp_name"];
    $fname = $_FILES["att"]["name"];
    $dest = "uploads/";

    foreach ($tmp as $ind => $file) {
        if (!empty($tmp)) {
            $ext = pathinfo($fname[$ind], PATHINFO_EXTENSION);
            $fn = "attach-" . rand() . "-" . time() . ".$ext";
            if (move_uploaded_file($file, $dest . $fn)) {
                echo "Uploaded succesfully";
            } else {
                echo "Upload error";
            }
        } else {
            echo "select file";
        }
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <h2>Upload Here</h2>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        Attach :<input type="file" name="att[]" multiple><br /><br />
        <input type="submit" name="sub" value="upload">
    </form>
</body>

</html>