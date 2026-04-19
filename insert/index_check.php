<?php
session_start();

// الاختبار الأمني: لو مفيش ID للمستخدم في السيشن، يرجعه للوجن
if (!isset($_SESSION['u_id'])) {
    header("Location: login.php");
    exit();
}
?>