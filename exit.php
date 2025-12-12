<?php
session_start();
session_destroy();
echo "<script>
    alert('شما با موفقیت از حساب خود خارج شدید!');
    window.location='index.php';
</script>";
?>