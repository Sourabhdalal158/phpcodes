<html>
<head><title> TECHNIA INSTITUTE OF ADVANCE STUDIES</head></title>
<style>
    H1{background: rgb(206, 188, 32);
        background-attachment: fixed;
        border-radius: 10px;
 }
</style>


<H1 align="center"> REGISTRATION FORM</h1> 
<form action="Back.php">
    <label for="name"> Name:</label>
    <div>

    <input type="text" id="name">
    </div>
    <br>
    <div>

        Father Name:<input type="text">
    </div>
    <br>
    <div>

        Mother Name:<input type="text" ><br>
    </div>
    <br>
    <div>
        Fees Amount:<input type="number">
    </div>
    <br>
    <div>
        <label for="car">Car</label>
        <select name="mycar" id="car">
            <option value="ind">Indica</option>
            <option value="ino">Innova Crysta</option>
            <option value="ind">EcoSport</option>
            <option value="ino">Honda City</option>
        </select>
    </div>
    <br>
    <div>
        Email:<input type="email">
    </div>
    <br>
    <div>

        Date of Birth:<input type="date">
    </div>
    <br>
    <div>

        Gender: Male<input type="radio" name="mygender"> Female<input type="radio" name="mygender">Others<input type="radio" name="mygender">
    </div>
<br>
<div>
    Other Details:<br><textarea name="mytext" cols="60" rows="10"></textarea>
</div>
<input type="submit" value="Submit Now">
<input type="reset" value="Reset Now">
</form>
</body>

</body>
</html>
