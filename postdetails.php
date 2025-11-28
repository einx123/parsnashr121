<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include('header.php'); ?>
    <br>
    <?php include('menu.php'); ?>
    <br>

    <div class="main">
        <?php
        $link = mysqli_connect('localhost', 'root', '', 'parsnashr');
        if (mysqli_connect_errno()) {
            die('خطا در ارتباط با دیتابیس!');
        }

        $codedet = $_GET['id'];

        $query = "SELECT * FROM posts WHERE headabout = '$codedet'";
        $result = mysqli_query($link, $query);

        $queryC = "SELECT * FROM comments";
        $resultC = mysqli_query($link, $queryC);
        ?>

        <div class="news">
            <ul>
                <li>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <h3><?php echo $row['headabout']; ?></h3>
                        <p><?php echo $row['about']; ?></p>
                        <pre><?php echo $row['details']; ?></pre>

                        <img src="postupload/<?php echo $row['file']; ?>" alt="News Image"
                            style="max-width:300px; max-height:300px;">

                        <form method="POST" action="commdetails.php?id=<?php echo $codedet; ?>">
                            <input type="text" placeholder="نظر خود را بنویسید" name="comment">
                            <button type="submit">ارسال نظر</button>
                        </form>

                        <h4>نظرات:</h4>
                        <?php
                        while ($rowC = mysqli_fetch_assoc($resultC)) {
                            ?>
                            <p><?php echo $rowC['comment']; ?></p>
                            <?php
                        }
                    }
                    ?>

                </li>
            </ul>
        </div>  

    </div>

    <?php include('footer.php'); ?>
</body>

</html>