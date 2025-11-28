<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پاسرنشر</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <?php
    session_start();
    include('header.php');
    ?>
    <br>
    <?php include('menu.php'); ?>
    <br>

    <?php
    // جلوگیری از ورود کاربران معمولی
    if (
        isset($_SESSION["state_login"]) &&
        $_SESSION["state_login"] == true &&
        isset($_SESSION["state_user"]) &&
        $_SESSION["state_user"] == "public"
    ) {
        echo '
        <script>
            alert("نوع کاربری شما به این صفحه دسترسی ندارد!");
            location.replace("index.php");
        </script>';
        exit;
    }

    // گرفتن نام نویسنده از سشن
    $username = $_SESSION['username'] ?? 'ناشناس';
    ?>

    <div class="form">
        <form method="POST" action="managedetail.php" enctype="multipart/form-data">

            <input type="text" placeholder="نام توضیحات" required name="headabout">
            <input type="text" placeholder="توضیحات کوتاه" required name="about">

            <textarea name="moreabout" placeholder="توضیحات بیشتر"></textarea>

            <input type="file" name="file">

            <br>
            <button type="submit">به اشتراک گذاشتن</button>
            <button type="reset">انصراف</button>

            <!-- نام نویسنده (پنهانی) -->
            <input type="hidden" name="author" value="<?php echo $username; ?>">

        </form>




        
    </div>

    <br>
    <?php include('footer.php'); ?>

</body>

</html>