
<?php include 'insert/db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/dataviewFo.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <title>statistical website</title>
</head>
<body>
<div class="header-banner">
 <img src="imgs/view.png" class ="header_icon">
 <span> Data View</span>
</div>
<p>Viewing Fossil data in a table</p>
<div class="form-container">

<table id="mytable">
<img src="imgs/search.png" alt="" id="icon_search">
<thead>

<tr>

<th>Fossil Type</th>
<th>Age Million Years</th>
<th>Depth</th>
<th>location</th>
</tr>


<tbody>
    <?php 
    $query="SELECT * FROM fossilsdata";
    $result=mysqli_query($conn, $query);

    if(mysqli_num_rows($result)> 0){
while($row=mysqli_fetch_assoc($result)){
    echo"<tr>";
echo"<td>".$row["fossil_type"]."</td>";
echo"<td>".$row["age_million_years"]."</td>";
echo"<td>".$row["depth"]."</td>";
echo"<td>".$row["location"]."</td>";
 echo"</tr>";
}


 }

?>
</tbody>
</thead>
</table>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
    $('#mytable').DataTable();
});
</script>
<script>
$('#mytable').DataTable({
    language: {
        search: "",  
        searchPlaceholder: "Search...."
    }
});




</script>
<a href="dashboard.php?type=fossils" class="btn">View Fossils Dashboard</a>

</body>
</html>