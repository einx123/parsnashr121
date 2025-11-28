<?php
session_start();
session_destroy();
if (session_destroy() == true) {
    ?>
    <script>
        alert("خداحافظ!");
        location.replace('index.php');
    </script>
    <?php
} else {
    ?>
    <script>
               
        alert("خطا در خروج از حساب کاربری!");
        location.replace('index.php');
    </script>
    <?php
}
;
?>