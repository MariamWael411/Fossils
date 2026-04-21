
<?php include 'insert/db.php';?>
<?php

$query="SELECT age_million_years,depth FROM fossilsdata";

    $result=mysqli_query($conn, $query);
   $arr_age;
   $arr_depth;
$result_age=0;
$result_depth=0;
$sumAge=0;
$sumDep=0;
$count= 0;
    if(mysqli_num_rows($result)> 0){
while($row=mysqli_fetch_assoc($result)){
$arr_age[$count]= $row["age_million_years"];
$arr_depth[$count]= $row["depth"];
$result_age+=$row["age_million_years"];
$result_depth+=$row["depth"];


$count++;

}}

$mean_age=$result_age/$count;
$mean_depth=$result_depth/$count;

for($i= 0;$i<$count;$i++){
$sumAge+=pow(($mean_age-$arr_age[$i]),2);

}
for($i= 0;$i<$count;$i++){
$sumDep+=pow(($mean_depth-$arr_depth[$i]),2);

}
$divi_Ag=$sumAge/$count;
$divi_depth=$sumDep/$count;
$stander_age=sqrt($divi_Ag);
$stan_Dep=sqrt($divi_depth);


sort($arr_age);
sort($arr_depth);
$middle=floor($count/2);
if($count%2== 1){

$median_age=$arr_age[$middle];
$median_depth=$arr_depth[$middle];
}else{
    $median_age=$arr_age[$middle-1];
    $median_depth=$arr_depth[$middle-1];
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
    
    <link rel="stylesheet" href="css/fossilAn.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <title>statistical website</title>
</head>
<body>
<div class="header-banner">
    <img src="imgs/analysis.png" class ="header_icon"><span>Analysis</span>
</div>


<p>Fossils Statistical Analysis</p>

<a href="dashboard.php?type=fossils">View DashBoard</a>

<div class="mean_age">
<h3>Mean Age</h3>
<hr>

<?php 
echo "<h4 class='num'>".round($mean_age,2)."</h4>"; 

?>



</div>


<div class="median_age">
<h3>Median Age</h3>
<hr>
<?php 
echo "<h4 class='num'>".round($median_age,2)."</h4>";

?>
</div>


<div class="standard">
<h3>Standard Deviation</h3>
<hr>
<?php 
echo "<h4 class='num'>".round($stander_age,2)."</h4>";

?>
</div>

<div class="mean_depth">
<h3>Mean Depth</h3>
<hr>
<?php 
echo "<h4 class='num'>".round($mean_depth,2)."</h4>";

?>
</div>


<div class="median_depth">
<h3>Median Depth</h3>
<hr>
<?php 
echo "<h4 class='num'>".round($median_depth,2)."</h4>";

?>
</div>


<div class="standard-depth">
<h3>Standard Deviation</h3>
<hr>
<?php 
echo "<h4 class='num'>".round($stan_Dep,2)."</h4>";

?>
</div>






</body>
</html>