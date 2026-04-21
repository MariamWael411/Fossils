<?php
session_start();
include 'db.php';

$sql="SELECT blood_pressure,age,sugar_level,disease from medicaldata";
$result=mysqli_query($conn,$sql);

$sql2= "SELECT COUNT(*) as numOfCol FROM medicaldata";
$result2=mysqli_query($conn,$sql2);

$count=mysqli_fetch_assoc($result2)['numOfCol'];
$arr_age=[];
$arr_blood=[];
$arr_sugar=[];
$arr_disease=[];
$i=0;
while ($row=mysqli_fetch_assoc($result)) {
$arr_age[$i]=$row['age'];
$arr_blood[$i]=$row['blood_pressure'];
$arr_sugar[$i]=$row['sugar_level'];
$arr_disease[$i]=$row['disease'];
$i++;

}

$age=$arr_age[$count-1];
$blood=$arr_blood[$count-1];
$sugar=$arr_sugar[$count-1];
$disease=$arr_disease[$count-1];


if($sugar>140){
    $disease2="Diabetes";
    
}else if( $blood>135){

$disease2="Hypertension";
 
}else{
    $disease2="normal";
     
}

?>