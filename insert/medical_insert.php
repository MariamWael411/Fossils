<?php
include 'db.php'; // لأنه معاه في نفس الفولدر

if (isset($_POST['save_med'])) {
    $age = $_POST['age'];
    $bp = $_POST['bp'];
    $sugar = $_POST['sugar'];
    $disease = $_POST['disease'];
    $user_id = 1; // حطي 1 مؤقتاً (تأكدي إن فيه يوزر ID رقم 1 في جدول users)

    $sql = "INSERT INTO medicaldata (user_id, age, blood_pressure, sugar_level, disease) 
            VALUES ('$user_id', '$age', '$bp', '$sugar', '$disease')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('تم الحفظ بنجاح!'); window.location.href='../medical_entry.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>