
<!DOCTYPE html>
<html>
  <body>
   <form action="form.php" method="POST">
        <h4 class=a>Application Form:</h4>
        Username:            <input type="text" name="username" placeholder="john" required><br>
        Email:       <input type="email" name="email" placeholder="john@xyz.com" required><br>    
        Contact:        <input type="number" maxlength="10" name="contact" placeholder="0123456789" minlength="10" required><br>
        Gender: <input type="radio" name="gender" value="Male" required>Male
                <input type="radio" name="gender" value="Female" required>Female
              <input type="radio" name="gender" value="Other" required>Other <br>
        City:                <select id="city" name="city">
                                <option  selected disabled>None</option>
                                <option >Mumbai</option>
                                <option>Delhi</option>
                                <option>Jaipur</option>
                                <option>Mussoorie</option>
                                <option>Nanital</option>
                                <option>Chennai</option>
                                <option>Pune</option>
                                <option>Bangalore</option>
                                <option>Hyderabad</option>
                                <option>Lucknow</option>
                            </select><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST["submit"])){
      $username=$_POST["username"];
      $email=$_POST["email"];
      $contact=$_POST["contact"];
      $gender=$_POST["gender"];
      $city=$_POST["city"];
    }
    else
      echo "<br>No Input";
    ?>

    <table border=1px solid; style=" border-collapse: collapse">
              <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>contact</th>
                  <th>gender</th>
                  <th>city</th>
              </tr>
              <tr>
                  <th><?php echo "$username" ?></th>
                  <th><?php echo "$email" ?></th>
                  <th><?php echo "$contact" ?></th>
                  <th><?php echo "$gender" ?></th>
                  <th><?php echo "$city" ?></th>
              </tr>
          </table>

  </body>
</html>
