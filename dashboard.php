<?php include 'insert/dashboard_info.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="header">
        <h1><?php echo $title; ?></h1>
        <p>Insights for <?php echo ucfirst($type); ?> Data</p>
    </div>

    <div class="top-cards">
        <div class="card"><h3>Total Records</h3><p><?php echo $total; ?></p></div>
        <div class="card"><h3>Average Value</h3><p><?php echo $avg; ?></p></div>
        <div class="card"><h3>Std Deviation</h3><p><?php echo $std; ?></p></div>
    </div>

    <div class="charts-grid">
        <div class="chart-box"><h4>Category Distribution</h4><canvas id="barChart"></canvas></div>
        <div class="chart-box"><h4>Percentage Breakdown</h4><canvas id="pieChart"></canvas></div>
        <div class="chart-box"><h4>Growth Trend</h4><canvas id="lineChart"></canvas></div>
        <div class="chart-box"><h4>Data Distribution</h4><canvas id="histChart"></canvas></div>
    </div>

    <div style="text-align: center; margin-top: 15px;">
        <a href="<?php echo ($type == 'medical' ? 'dataviewMed.php' : 'dataviewFo.php'); ?>" class="btn">Back to Data Table</a>
    </div>

    <script>
        const ctxCfg = { maintainAspectRatio: false };
        const dbLabels = <?php echo json_encode($labels); ?>; // الأسماء من الـ Database
        const dbData = <?php echo json_encode($counts); ?>;   // الأرقام من الـ Database


const histLabels = <?php echo json_encode($hist_labels); ?>;

const histData = <?php echo json_encode($hist_counts); ?>;

const lineLabels = <?php echo json_encode($line_labels); ?>;
const lineData = <?php echo json_encode($line_data); ?>;

        // الرسم البياني بالأعمدة (يعرض الأسماء)
        new Chart(document.getElementById('barChart'), { 
            type: 'bar', 
            data: { labels: dbLabels, datasets: [{ label: 'Cases', data: dbData, backgroundColor: '#3b71ca' }] }, 
            options: ctxCfg 
        });

        // الرسم البياني الدائري (يعرض الأسماء كنسب مئوية)
        new Chart(document.getElementById('pieChart'), { 
            type: 'pie', 
            data: { labels: dbLabels, datasets: [{ data: dbData, backgroundColor: ['#3b71ca', '#50e3c2', '#f5a623', '#ff5a5f'] }] }, 
            options: ctxCfg 
        });

      

  new Chart(document.getElementById('lineChart'), { 
    type: 'line',
    data: { 
        labels: lineLabels,
        datasets: [{ 
            label: 'Growth Over Time',
            data: lineData,
            borderColor: '#3b71ca',
            fill: true,
            tension: 0.3
        }] 
    },
    options: {
        maintainAspectRatio: false,
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Date'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Records'
                },
                beginAtZero: true
            }
        }
    }
});


        new Chart(document.getElementById('histChart'), { 
    type: 'bar',
    data: { 
        labels: histLabels,
        datasets: [{ 
            label: 'Age Distribution',
            data: histData,
            backgroundColor: '#50e3c2'
        }] 
    },
    options: ctxCfg 
});
    </script>
</body>
</html>