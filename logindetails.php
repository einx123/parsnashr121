<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <title>ورود به حساب</title>
</head>

<body>

    <?php

    $username = $_POST['username'];
    $password = $_POST['password'];



    $link = mysqli_connect("localhost", "root", "", "parsnashr");
    if (!$link) {
        die("خطا در اتصال به پایگاه داده!");
    }

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $_SESSION["state_login"] = true;

        if ($row["type"] == 1 || $row["type"] == "admin") {
            $_SESSION["state_user"] = "admin";
        } else {
            $_SESSION["state_user"] = "public";
        }

        $_SESSION["username"] = $row["username"];
        $_SESSION["surname"] = $row["surname"];

        echo "<script>
        alert('{$row['surname']} عزیز، وارد حساب خود شدید!');
        location.replace('index.php');
    </script>";
    } else {
        echo "<script>
        alert('نام کاربری یا کلمه عبور اشتباه است!');
        window.location='login.php';
    </script>";
    }

    mysqli_close($link);
    ?>

</body>

</html>








