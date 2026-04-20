

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fossil_entry.css">
    
    <title>statistical website</title>
</head>
<body>
    

<div class="header-banner">
    <img src="imgs/skeleton.png" class ="header_icon"><span>Fossils Data Entry</span>
</div>
<div class="form-container">
    <form action="insert/fossil_insert.php" method="POST">
        <div class="input-group">
            <img src="imgs/fosill_type.png"> <label>Fossil Type:</label>
            <select name="type">
                <option value="Ammonite">Ammonite</option>
                <option value="Bone">Bone</option>
                <option value="Shell">Shell</option>
                <option value="Plant">Plant</option>
                <option value="Tooth">Tooth</option>
                <option value="FootPrint">FootPrint</option>
            </select>
        </div>
        <div class="input-group">
            <img src="imgs/fossil_age.png"> <label>Age (m.y):</label>
            <input type="number" name="age" placeholder="Enter Age">
        </div>
        <div class="input-group">
            <img src="imgs/depth.png"> <label>Depth:</label>
            <input type="number" name="deep" placeholder="Enter Depth">
        </div>
        <div class="input-group">
            <img src="imgs/location.png"> <label>Location:</label>
            <input type="text" name="loc" placeholder="Enter Location">
        </div>
        <button type="submit" name="save_fos" class="submit-btn">Submit</button>
    </form>
</div>
<a href="index.php" id="back">Back</a>
</body>
</html>