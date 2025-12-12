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
    $file = $_FILES["file"]["name"] ?? '';
    $tempname = $_FILES["file"]["tmp_name"] ?? '';
    $folder = "postupload/" . $file ?? '';
    $details = $_POST['details'] ?? '';
    $author = $_POST['author'] ?? '';
    $link = mysqli_connect('localhost', 'root', '', 'parsnashr');

    if (mysqli_connect_errno()) {
        echo 'خطا در ارتباط با دیتابیس!';
    } else {
        $query = "INSERT INTO posts (headabout, about, file,details,author) VALUES ('$headabout', '$about', '$file','$details','$author')";


        if (mysqli_query($link, $query) === true) {
            move_uploaded_file($tempname, $folder);
            print ('
        <script>
            alert("اطلاعات با موفقیت ذخیره شد");
            location.replace("index.php");
        </script>
        ');
        } else {
            print ('
        <script>
            alert("خطا در ذخیره سازی اطلاعات");
            location.replace("postmake.php");
        </script>
        ');
        }
    }

    ?>
    <br>
    <?php include('footer.php'); ?>

</body>

</html>