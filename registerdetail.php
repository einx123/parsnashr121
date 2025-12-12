<?php
session_start();
$username = $_POST['username'];
$surname = $_POST['surname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];


if ($password != $repassword) {
    echo ' <script> alert("رمز شما یکسان نمیباشد!"); </script> ';
    exit;
}
$link = mysqli_connect('localhost', 'root', '', 'parsnashr');

if (mysqli_connect_errno()) {
    echo 'خطا در ارتباط با دیتابیس!';
} else {
    $query = "INSERT INTO users (username, surname, lastname, password, email, type) VALUES ('$username', '$surname', '$lastname', '$password', '$email', 'user')";

    if (mysqli_query($link, $query) === true) {
        echo '<script> alert("شما با موفقیت وارد شدید!"); location.replace("index.php"); </script>';

    } else {
        echo ' <script> alert("خطا در ذخیره سازی اطلاعات!"); location.replace("index.php"); </script> ';

    }
}
$check_query = $link->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
$check_query->bind_param("ss", $username, $email);
$check_query->execute();
$result = $check_query->get_result();

if ($result->num_rows > 0) {
    echo '<script>
            alert("نام کاربری یا ایمیل وارد شده قبلاً ثبت شده است!");
            history.back();
          </script>';
    $check_query->close();
    exit;
}

$check_query->close();
?>