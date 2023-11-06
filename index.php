<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="form.css">
    <title>User Registration</title>
</head>
<body>
    
    <h1>User Details</h1>
    <div class="container">
    <form action="save.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <div class="gender">
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Others</label>
        </div>

        <br>
        <label for="city" >City:</label>
        <select name="city" class=city>
            <option value="" disabled selected>Select your city</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Chennai">Chennai</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Pune">Pune</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Surat">Surat</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Indore">Indore</option>
            <option value="Thane">Thane</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Visakhapatnam">Visakhapatnam</option>
            <option value="Patna">Patna</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Ludhiana">Ludhiana</option>
            <option value="Agra">Agra</option>
            <option value="Nashik">Nashik</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Varanasi">Varanasi</option>
            <option value="Madurai">Madurai</option>
            <option value="Meerut">Meerut</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="Amritsar">Amritsar</option>
            <option value="Allahabad">Allahabad</option>
            <option value="Chandigarh">Chandigarh</option>
        </select><br>

        <div class="buttons_bar">
            <div>
                <input class="button_submit" type="submit" value="Submit">
            
                <input class="button_reset" type="reset" value="Reset">
            </div>
            <div>
                <a href="list.php" class="view_users">View List</a>
            </div>
        </div>
    </form>
</body>
</html>
