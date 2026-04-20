
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/medical_entry.css">
    <title>statistical website</title>
</head>

<body>
    

<div class="header-banner">
 <img src="imgs/stethoscope.png" class ="header_icon">
 <span> Medical Data Entry</span>
</div>
<div class="form-container">
    <form action="insert/medical_insert.php" method="POST">
        <div class="input-group">
            <img src="imgs/user.png"> <label>Age:</label>
            <input type="number" name="age" placeholder="Enter Age">
        </div>
        <div class="input-group">
            <img src="imgs/presure.png"> <label>Blood Pressure:</label>
            <input type="text" name="bp" placeholder="Enter Blood Pressure">
        </div>
        <div class="input-group">
            <img src="imgs/suger.png"> <label>Sugar Level:</label>
            <input type="number" name="sugar" placeholder="Enter Sugar Level">
        </div>
        <div class="input-group">
            <img src="imgs/images.png"> <label>Disease:</label>
            <select name="disease">
                <option value="Healthy">Healthy</option>
                <option value="Diabetes">Diabetes</option>
                <option value="Hypertention">Hypertention</option>
                <option value="Heart Disease">Heart Disease</option>
                <option value="Asthma">Asthma</option>
            </select>
        </div>
        <button type="submit" name="save_med" class="submit-btn">Submit</button>
    </form>
</div>
</body>
</html>