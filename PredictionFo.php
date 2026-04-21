
<?php include("insert/PredictionFo.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/predictionFo.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <title>statistical website</title>
</head>
<body>

 
<div class="header-banner">
    <img src="imgs/skeleton.png" class ="header_icon"><span>Fossils Prediction</span>
</div>
<div class="form-container">
<h1 id="title">Prediction Result</h1>
<br>
<img src="imgs/document.png" alt="" class="icons">
<h3>Entered information</h3>
<br>
<img src="imgs/age.png" alt="" class="icons">

<p>Age(million years)</p>
<?php echo"<span class='data'>".$age."</span>" ?>
<hr>
<img src="imgs/location.png" alt="" class="icons">
<p>Location</p>
<?php echo"<span class='data'>".$location."</span>" ?>
<hr>
<img src="imgs/depth.png" alt="" class="icons">
<p>Depth</p>.
<?php echo"<span class='data'>".$depth."</span>" ?>
<hr>
<img src="imgs/fosill_type.png" alt="" class="icons">
<p>Fossil Type</p>
<?php echo"<span class='data'>".$type."</span>" ?>

<hr>
<div class="Prediction">

<p id="Pred_p">Predicted Period</p>
<?php echo"<h1 id='Pred_h1'>".$period." Period </h1>" ?>
<?php echo"<p id='Pred_p2'>"."( ".$data." )"." </p>" ?>
</div>

<a href="fossil_entry.php" id="back">Back</a>
<a href="dataviewFo.php" id="dataview">View Data</a>

</div>