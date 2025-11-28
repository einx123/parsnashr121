<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="menu">
    <ul>
        <a href="index.php"><li>خانه</li></a>
        <a href="sitenews.php"><li>اخبار های سایت</li></a>

        <?php
        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] == true) {
            echo '<a href="exit.php"><li>خروج</li></a>';
            echo '<a href="postmake.php"><li>+</li></a>';
        }
        else {
            echo '<a href="signup.php"><li>ساخت حساب</li></a>';
            echo '<a href="login.php"><li>ورود</li></a>';
        }

        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] == true && isset($_SESSION["state_user"]) && $_SESSION["state_user"] == "admin") {
            echo '<a href="manage.php"><li>مدیریت</li></a>';
        }
        ?>
    </ul>
</div>
