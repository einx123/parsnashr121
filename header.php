<?php
//هرکاری میخوای با این فایل بکن ولی هرگز این if رو پاک نکن و یا تو فایل های دیگه اگر این فایل استفاده و include شده ننویس!!!!این یه هشدار نیست یه دستوره!!!!
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1>پارسنشر</h1>
    </div>
</body>
</html> 