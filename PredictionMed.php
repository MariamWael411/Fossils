
<?php include("insert/PredictionMed.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/predictionMed.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <title>statistical website</title>
</head>
<body>

 
<div class="header-banner">
 <img src="imgs/stethoscope.png" class ="header_icon">
 <span> Medical Prediction</span>
</div>
<div class="form-container">
<h1 id="title">Prediction Result</h1>
<br>
<img src="imgs/document.png" alt="" class="icons">
<h3>Entered information</h3>
<br>
<img src="imgs/age.png" alt="" class="icons">

<p>Age</p>
<?php echo"<span class='data'>".$age."</span>" ?>
<hr>
<img src="imgs/presure.png" alt="" class="icons">
<p>Blood Pressure</p>
<?php echo"<span class='data'>".$blood."</span>" ?>
<hr>
<img src="imgs/suger.png" alt="" class="icons">
<p>Sugar Level</p>.
<?php echo"<span class='data'>".$sugar."</span>" ?>
<hr>
<img src="imgs/images.png" alt="" class="icons">
<p>Disease</p>
<?php echo"<span class='data'>".$disease."</span>" ?>

<hr>
<div class="Prediction">

<p id="Pred_p">Predicted Disease</p>
<?php echo"<h1 id='Pred_h1'>".$disease2."  </h1>" ?>

</div>

<a href="medical_entry.php" id="back">Back</a>
<a href="dataviewMed.php" id="dataview">View Data</a>

</div>