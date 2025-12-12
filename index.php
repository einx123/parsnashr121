<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پاسرنشر</title>
    <link rel="stylesheet" href="styles.css">
    <script src="sticky-menu.js"></script>

</head>
<body>
                                                           
    <?php include('header.php'); ?>
<br>
    <?php include('menu.php'); ?>
<br><div class="main">
        <h2>نشر ها
           <?php
        $link = mysqli_connect('localhost', 'root', '', 'parsnashr');
        if (mysqli_connect_errno()) {
            echo 'خطا در ارتباط با دیتابیس!';
        } else {
            $query = "SELECT * FROM posts ";
            $result = mysqli_query($link, $query);
            ?>
            <div class="news">
                <ul>
                    <li>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                     
                            ?><pre><?php echo $row['author']; ?></pre>
                            <h3><?php
                            echo ($row['headabout'])
                                ?></h3>
                            <p><?php echo ($row['about']) ?></p>
                            <img src="postupload/<?php echo ($row["file"]) ?>" alt="posts Image"
                                style="max-width:300px; max-height:300px;">
                              <p>  <a href="postdetails.php?id=<?php echo($row['headabout']) ?>">توظیحات بیشتر</a></p>
                            <?php

                            echo '<hr>';
         
                        }
        }
        ?>
                </li>
            </ul>
        </div>
        <?php
 
?>

    </h2>
</div>
<br>
    <?php include('footer.php'); ?>

</body>
</html>
