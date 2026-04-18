<link rel="stylesheet" href="css/medical_entry.css">
<div class="header-banner">
 <img src="imgs/medical_icon2.jpeg" class ="header_icon"><span> Medical Data Entry</span>
</div>
<div class="form-container">
    <form method="POST">
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
            </select>
        </div>
        <button type="submit" name="save_med" class="submit-btn">Submit</button>
    </form>
</div>