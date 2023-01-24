<?php
$allowed_ext = array("png", "jpg", "jpeg", "gif");
if (isset($_POST["submit"])) {
    if (!empty($_FILES["upload"]["name"])) {
        $file_name = $_FILES["upload"]["name"];
        $file_size = $_FILES["upload"]["name"];
        $file_dir = $_FILES["upload"]["name"];
        $target_dir = "uploads/$file_name";

        //Get file extension
        $file_ext = explode(".", $file_name);
        $file_ext = strtolower(end($file));
        // echo $file_Ext;

        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);
                echo `<p style="color:green;">File Uploaded!</p>`;
            }
        } else {
            $message = `<p style="color:red;">Please choose a file</p>`;

        }

    }
    print_r($_FILES);

} else {
    $message = `<p style="color: red;" >Please choose a file </p>`;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">

        Select image to upload:
        <input type="file" name="upload">
        <input type="text" value="Submit" name="submit">
    </form>

</body>

</html>