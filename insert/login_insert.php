<?php
// insert/login_proc.php
session_start();
include 'db.php';

// التأكد إن البيانات مبعوتة عن طريق POST (الزرار)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // لو الخانات فاضية ميعملش حاجة ويرجعه للوجن
    if(empty($email) || empty($pass)) {
        header("Location: ../login.php");
        exit();
    }

    // البحث في قاعدة البيانات
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // لو البيانات صح (لقى مستخدم)
        $user = mysqli_fetch_assoc($result);
        $_SESSION['u_id'] = $user['user_id'];
        $_SESSION['u_name'] = $user['name'];
        
        // التوجه لصفحة الـ index
        header("Location: ../index.php");
        exit();
    } else {
        // لو البيانات غلط (ملقاش مستخدم)
        echo "<script>
                alert('خطأ: البريد الإلكتروني أو كلمة المرور غير صحيحة');
                window.location.href='../login.php';
              </script>";
        exit();
    }
}
?>