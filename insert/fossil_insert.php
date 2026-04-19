<?php
// insert/insert_fossils.php
include 'db.php'; // استدعاء كابل الاتصال (لأنهم في نفس الفولدر)

if (isset($_POST['save_fos'])) {
    // 1. سحب البيانات من الفورم (تأكدي أن الـ name في الـ HTML مطابق لهنا)
    $f_type  = $_POST['type']; 
    $f_age   = $_POST['age'];
    $f_depth = $_POST['deep']; 
    $f_loc   = $_POST['loc']; 
    
    // 2. تحديد رقم المستخدم (مؤقتاً 1 لأن جدول الحفريات مرتبط بجدول المستخدمين)
    $user_id = 1; 

    // 3. جملة SQL للإدخال
    $sql = "INSERT INTO fossilsdata (user_id, fossil_type, age_million_years, depth, location) 
            VALUES ('$user_id', '$f_type', '$f_age', '$f_depth', '$f_loc')";

    // 4. تنفيذ العملية والتأكد من النجاح
    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('تم حفظ بيانات الحفرية بنجاح!');
                window.location.href='../fossil_entry.php'; 
              </script>";
    } else {
        // في حالة وجود خطأ (مثلاً لو مفيش مستخدم برقم 1 في الجدول التاني)
        echo "Error: " . mysqli_error($conn);
    }
}
?>