<style>
    h3{
        text-align:center;
    }
    </style>
    <h3> Student Information </h3><br>

<div class="container" style="position:relative; height:500px; width: 550px; top: 150px; left: 50px;">
    <form action="index.php" name="myform" method="POST">
        
        <label for="username"> Enter Username: </label> 
        <input type="text" id="username" name="username" autofocus="on" placeholder="Username" required> <br>
        <label for="email"> Enter Email: </label>
        <input type="text" id="email" name="email" placeholder="Email" pattern=".+@gmail.com" required><br>
        <label for="contact">Contact</label> 
        <input type="tel" id="contact" name="contact" placeholder="contact" pattern="[0-9]{10}"><br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="Male" value = "Male">
        <label for="Male">Male</label>
        <input type="radio" name="gender" id="Female" value = "Female">
        <label for="Female">Female</label><br>
        <label for="city"> City </label>
        <select name="city" id="city">
            <option value="Mumbai">Mumbai</label>
            <option value="Delhi">Delhi</label>
            <option value="Mussoorie">Mussoorie</label>
            <option value="Nanital">Nanital</label>
            <option value="Chennai">Chennai</label>
            <option value="Pune">Pune</label>
            <option value="Bangalore">Bangalore</label>
            <option value="Hyderabad">Hyderabad</label>
            <option value="Lucknow">Lucknow</label>
        </select><br>
        <input type="submit" name="submit" value="submit">
    </form>
</div>