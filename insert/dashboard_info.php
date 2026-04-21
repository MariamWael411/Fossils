<?php
include 'db.php'; // تأكدي أن الاتصال بالقاعدة شغال

// 1. تحديد نوع المجال من الرابط (Default هو medical)
$type = isset($_GET['type']) ? $_GET['type'] : 'medical';

if ($type == 'fossils') {
    $table = "fossilsdata";
    $calc_col = "age_million_years"; // العمود الرقمي للحسابات
    $cat_col = "fossil_type";      // عمود الفئات للرسم البياني
    $title = "Fossils Dashboard";
} else {
    $table = "medicaldata";
    $calc_col = "age";               // العمود الرقمي للحسابات
    $cat_col = "disease";          // عمود الفئات للرسم البياني
    $title = "Medical Dashboard";
}

// --- 2. حسابات زميلتك (Statistical Analysis) ---
$res_avg = mysqli_query($conn, "SELECT AVG($calc_col) as avg_val FROM $table");
$avg = round(mysqli_fetch_assoc($res_avg)['avg_val'], 2);

$res_std = mysqli_query($conn, "SELECT STDDEV($calc_col) as std_val FROM $table");
$std = round(mysqli_fetch_assoc($res_std)['std_val'], 2);

// --- 3. حسابات الـ Dashboard (Visual Data) ---
$res_total = mysqli_query($conn, "SELECT COUNT(*) as total FROM $table");
$total = mysqli_fetch_assoc($res_total)['total'];

// جلب توزيع الفئات للرسومات
$labels = []; $counts = [];
$res_dist = mysqli_query($conn, "SELECT $cat_col, COUNT(*) as c FROM $table GROUP BY $cat_col");
while($row = mysqli_fetch_assoc($res_dist)) {
    $labels[] = $row[$cat_col];
    $counts[] = $row['c'];
}

// --- Histogram (Age Distribution) ---
$hist_labels = ['0-50', '51-100', '101+'];
$hist_counts = [0, 0, 0];

$res_hist = mysqli_query($conn, "SELECT $calc_col FROM $table");

while ($row = mysqli_fetch_assoc($res_hist)) {
    $value = $row[$calc_col];

    if ($value <= 50) {
        $hist_counts[0]++;
    } elseif ($value <= 100) {
        $hist_counts[1]++;
    } else {
        $hist_counts[2]++;
    }
}


// --- Line Chart (Growth by Date) ---
$line_labels = [];
$line_data = [];

$res_line = mysqli_query($conn, "
    SELECT DATE(created_at) as d, COUNT(*) as c
    FROM $table
    GROUP BY DATE(created_at)
    ORDER BY d ASC
");

$total_so_far = 0;

while ($row = mysqli_fetch_assoc($res_line)) {
    $total_so_far += $row['c'];

    $line_labels[] = $row['d'];
    $line_data[] = $total_so_far;
}

?>