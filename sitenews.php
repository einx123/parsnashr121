<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اخبار سایت</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('header.php'); ?>
    <br>
    <?php include('menu.php'); ?>
    <br>

    <div class="main">
        <h2>اخبار سایت</h2>

        <?php
        // اتصال به دیتابیس
        $link = mysqli_connect('localhost', 'root', '', 'parsnashr');

        if (mysqli_connect_errno()) {
            echo 'خطا در اتصال به دیتابیس!';
        } else {

            $query = "SELECT * FROM news";
            $result = mysqli_query($link, $query);
            ?>
            <div class="news">
                <ul>
                    <li>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <pre><?php echo $row['author']; ?></pre>

                            <h3><?php echo $row['headabout']; ?></h3>

                            <p><?php echo $row['about']; ?></p>

                            <img src="newsupload/<?php echo $row["file"]; ?>" alt="News Image"
                                style="max-width:300px; max-height:300px;">

                            <p>
                                <a href="newsdetail.php?id=<?php echo $row['headabout']; ?>">
                                    اطلاعات خبر
                                </a>
                            </p>

                            <hr>
                            <?php
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <?php
        }
        ?>
    </div>

    <?php include('footer.php'); ?>
</body>

</html>