<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('header.php'); ?>
    <br>
    <?php include('menu.php'); ?>
    <br>

    <div class="form">
        <?php
        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] == true) {
            echo "
            <script>
            alert('شما قبلا وارد شدید و به این صفحه دسترسی ندارید');
            location.replace('index.php');
            </script>
            ";
        }
        ?>

        <form action="registerdetail.php" method="post">
            <input type="text" name="username" required minlength="6" maxlength="50" placeholder="نام کاربری"><br>
            <input type="text" name="surname" required maxlength="50" placeholder="نام"><br>
            <input type="text" name="lastname" maxlength="50" placeholder="نام خانوادگی (اختیاری)"><br>
            <input type="email" name="email" required placeholder="ایمیل"><br>
            <input type="password" name="password" required maxlength="100" minlength="8" placeholder="پسوورد"><br>
            <input type="password" name="repassword" required maxlength="100" minlength="8" placeholder="بازنویسی پسوورد"><br>
            <button type="submit">ساخت حساب</button>
            <button type="reset">انصراف</button>
            <?php
       
            ?>
        </form>
    </div>

    <?php include('footer.php'); ?>
</body>

<?

?>
</html>
