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
    if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] == !true) {
        echo "
        <script>
        alert('برای ورود به این صفحه لطفا حساب کاربری خود را اول بسازید یا وارد شوید!');
        location.replace('index.php')
        </script>
        ";
    }
    ?>
    <div class="form">
        <form method="POST" action="postdetail.php" enctype="multipart/form-data">
            <input type="text" placeholder="نام توظیحات" required name="headabout">
            <input type="text" placeholder="توظیحات" required name="about">
            <textarea name="details" placeholder="توضیحات بیشتر"></textarea>
            <input type="file" name="file">
            <button type="submit">به اشتراک گذاشتن</button>
            <button type="reset">انصراف</button>
            
            <input type="hidden" name="author" value="<?php echo $username; ?>">

        </form>
    </div>



    <br>
    <?php include('footer.php'); ?>

</body>

</html>