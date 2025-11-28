
        <?php
      
        //دریاف اطلاعات از فورم و ساخت متغیر از آن
        $username = $_POST['username'];
        $surname = $_POST['surname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];


        //اگر متغیر وارد شده پسوورد با ری پسسورد یکی نبود
        if ($password != $repassword) {
            echo ' <script> alert("رمز شما یکسان نمیباشد!"); </script> ';
            exit;
        }
        //اتصال به دیتابیس
        $link = mysqli_connect('localhost', 'root', '', 'parsnashr');
        //در صورت وصل نشدن به دیتابیس
        if (mysqli_connect_errno()) {
            echo 'خطا در ارتباط با دیتابیس!';
        }
        //اگر که نه 
        else {
            $query = "INSERT INTO users (username, surname, lastname, password, email, type) VALUES ('$username', '$surname', '$lastname', '$password', '$email', 'user')";
            //اگر تمامی اطلاعات با موفقست ذخیره شد
            if (mysqli_query($link, $query) === true) {
                echo '<script> alert("شما با موفقیت وارد شدید!"); location.replace("index.php"); </script>';
   
            }
            //اگر نشد چی؟؟ 
            else {
                echo ' <script> alert("خطا در ذخیره سازی اطلاعات!"); location.replace("index.php"); </script> ';
           
            }
        }
       //چک کردن اینکه اگر یوزر نیم و ایمیل قبلا وجود داشت اما فرد اینهارو برای ورود آورد چیکار کنیم؟!
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
        
        $check_query->close(); //دیگر به دنبال کئوری نگرد
        ?>
      
 