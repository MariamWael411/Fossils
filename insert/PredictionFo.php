<?php
session_start();
include 'db.php';

$sql="SELECT fossil_type,age_million_years,depth,location from fossilsdata";
$result=mysqli_query($conn,$sql);

$sql2= "SELECT COUNT(*) as numOfCol FROM fossilsdata";
$result2=mysqli_query($conn,$sql2);

$count=mysqli_fetch_assoc($result2)['numOfCol'];
$arr_age=[];
$arr_type=[];
$arr_depth=[];
$arr_location=[];
$i=0;
while ($row=mysqli_fetch_assoc($result)) {
$arr_age[$i]=$row['age_million_years'];
$arr_type[$i]=$row['fossil_type'];
$arr_depth[$i]=$row['depth'];
$arr_location[$i]=$row['location'];
$i++;

}

$age=$arr_age[$count-1];
$type=$arr_type[$count-1];
$depth=$arr_depth[$count-1];
$location=$arr_location[$count-1];


if($age>145){
    $period="Jurassic";
    $data="Older than 145 million years";
}else if( $age>= 66){

$period= "Cretaceous";
 $data="66-145 million years";
}else{
    $period= "Cenozoic";
     $data="Younger than 66 million years";
}

?>