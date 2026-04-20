
<?php include 'insert/db.php';?>
<?php

$query="SELECT age,sugar_level FROM medicaldata";

    $result=mysqli_query($conn, $query);
   $arr_age;
   $arr_sugar;
$result_age=0;
$result_sugar=0;
$sumAge=0;
$sumSug=0;
$count= 0;
    if(mysqli_num_rows($result)> 0){
while($row=mysqli_fetch_assoc($result)){
$arr_age[$count]= $row["age"];
$arr_sugar[$count]= $row["sugar_level"];
$result_age+=$row["age"];
$result_sugar+=$row["sugar_level"];


$count++;

}}

$mean_age=$result_age/$count;
$mean_sugar=$result_sugar/$count;

for($i= 0;$i<$count;$i++){
$sumAge+=pow(($mean_age-$arr_age[$i]),2);

}
for($i= 0;$i<$count;$i++){
$sumSug+=pow(($mean_sugar-$arr_sugar[$i]),2);

}
$divi_Ag=$sumAge/$count;
$divi_Sug=$sumSug/$count;
$stander_age=sqrt($divi_Ag);
$stan_sug=sqrt($divi_Sug);


sort($arr_age);
sort($arr_sugar);
$middle=floor($count/2);
if($count%2== 1){

$median_age=$arr_age[$middle];
$median_sugar=$arr_sugar[$middle];
}else{
    $median_age=$arr_age[$middle-1];
    $median_sugar=$arr_sugar[$middle-1];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/medicalAn.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <title>statistical website</title>
</head>
<body>
<div class="header-banner">
    <img src="imgs/analysis.png" class ="header_icon"><span>Analysis</span>
</div>


<p>Medical Statistical Analysis</p>

<a href="dashboard.php?type=medical">View DashBoard</a>

<div class="mean_age">
<h3>Mean Age</h3>
<hr>

<?php 
echo "<h4 class='num'>".$mean_age."</h4>"; 

?>



</div>


<div class="median_age">
<h3>Median Age</h3>
<hr>
<?php 
echo "<h4 class='num'>".$median_age."</h4>";

?>
</div>


<div class="standard">
<h3>Standard Deviation</h3>
<hr>
<?php 
echo "<h4 class='num'>".$stander_age."</h4>";

?>
</div>

<div class="mean_Sugar">
<h3>Mean Sugar</h3>
<hr>
<?php 
echo "<h4 class='num'>".$mean_sugar."</h4>";

?>
</div>


<div class="median_Sugar">
<h3>Median Sugar</h3>
<hr>
<?php 
echo "<h4 class='num'>".$median_sugar."</h4>";

?>
</div>


<div class="standard-Sugar">
<h3>Standard Deviation</h3>
<hr>
<?php 
echo "<h4 class='num'>".$stan_sug."</h4>";

?>
</div>






</body>
</html>