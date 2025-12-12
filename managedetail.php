<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پاسرنشر</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php include('header.php'); ?>
    <br>
    <?php include('menu.php'); ?>
    <br>

    <?php
    $headabout = $_POST['headabout'] ?? '';
    $about = $_POST['about'] ?? '';
    $moreabout = $_POST['moreabout'] ?? '';

    $file = $_FILES['file']['name'] ?? '';
    $tempname = $_FILES['file']['tmp_name'] ?? '';
    $folder = "newsupload/" . ($file ?? '') ?? '';

    $link = mysqli_connect('localhost', 'root', '', 'parsnashr');

    if (mysqli_connect_errno()) {
        echo 'خطا در اتصال به دیتابیس!';
    } else {

        $query = "
            INSERT INTO news (headabout, about, file, moreabout, author)
            VALUES ('$headabout', '$about', '$file', '$moreabout', '$author')
        ";

        if (mysqli_query($link, $query)) {


            if (!empty($file)) {
                move_uploaded_file($tempname, $folder);
            }


            echo '
            <script>
                alert("اطلاعات با موفقیت ذخیره شد");
                location.replace("sitenews.php");
            </script>';
        } else {
            echo '
            <script>
                alert("خطا در ذخیره اطلاعات!");
                location.replace("manage.php");
            </script>';
        }
    }
    ?>

    <br>
    <?php include('footer.php'); ?>

</body>

</html>