<?php
$comment = $_POST['comment'] ?? '';

$Link = mysqli_connect('localhost', 'root', '', 'parsnashr');

if (mysqli_connect_errno()) {
    echo 'خطا در ارتباط با دیتابیس!';
} else {

    $query = "INSERT INTO comments (comment) VALUES ('$comment')";

    if (mysqli_query($Link, $query) === true) {
        print ('
        <script>
            alert("نظر شما با موفقیت ثبت شد");
            location.replace("index.php");
        </script>
        ');
    } else {
        print ('
        <script>
            alert("خطا در ثبت نظر");
            location.replace("index.php");
        </script>
        ');
    }
}
?>