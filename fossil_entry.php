<link rel="stylesheet" href="css/fossil_entry.css">
<div class="header-banner">
    <img src="imgs/fossil_icon2.jpeg" class ="header_icon"><span>Fossils Data Entry</span>
</div>
<div class="form-container">
    <form method="POST">
        <div class="input-group">
            <img src="imgs/fosill_type.png"> <label>Fossil Type:</label>
            <select name="t">
                <option value="Ammonite">Ammonite</option>
            </select>
        </div>
        <div class="input-group">
            <img src="imgs/fossil_age.png"> <label>Age (m.y):</label>
            <input type="number" name="a" placeholder="Enter Age">
        </div>
        <div class="input-group">
            <img src="imgs/depth.png"> <label>Depth:</label>
            <input type="number" name="d" placeholder="Enter Depth">
        </div>
        <div class="input-group">
            <img src="imgs/location.png"> <label>Location:</label>
            <input type="text" name="l" placeholder="Enter Location">
        </div>
        <button type="submit" name="save_fos" class="submit-btn">Submit</button>
    </form>
</div>