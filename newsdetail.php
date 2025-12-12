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

        $query = "SELECT * FROM news WHERE headabout = '$codedet'";
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
                        <pre><?php echo $row['moreabout']; ?></pre>

                        <img src="postupload/<?php echo $row['file']; ?>" alt="News Image"
                            style="max-width:300px; max-height:300px;">

                      <?php
                    }
                    ?>

                </li>
            </ul>
        </div>

    </div>

    <?php include('footer.php'); ?>
</body>
<?php /*
my number is
09213235645
call me if you have any problem in this source codes
or message me on telegram @mmdparham91
or email me at parhamtaghipour9@gmail.com
or message me at instagram @parham.mp3

*/?>
</html>





