<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('header.php'); ?>
    <br>
    <?php include('menu.php'); ?>
    <br>
    <div class="form">
        <?php
        if (isset($_SESSION["state_login"]) AND $_SESSION["state_login"] == true) {
            echo "
           <script>
           alert('شما قبلا وارد شدید و به این صفحه دسترسی ندارید');
           location.replace('index.php');
           </script>
           ";
        }
        ?>

        <form action="logindetails.php" method="post">
            <input type="text" name="username" required minlength="6" maxlength="50" placeholder="نام کاربری"><br>
            <input type="password" name="password" required maxlength="100" minlength="8" placeholder="پسوورد"><br>
            <button type="submit">ورود</button><button type="reset">انصراف</button>
        </form>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>