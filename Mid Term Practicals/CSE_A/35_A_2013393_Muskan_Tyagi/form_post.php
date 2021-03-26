<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form method="POST" action="form_post.php">
            Name*<input type="text" name="Username" placeholder="Username" required/><br>
            E-mail*<input type="email" name="mail" placeholder="Mail@example.com"required/><br>
            Contact No.*<input type="contact" name="contact" placeholder="Phone Number" required/><br>
            Gender:<p>female<input type="radio" name="Gender" value="female"></p>
            <p>male<input type="radio" name="Gender" value="male"></p>
            <p>other<input type="radio" name="Gender" value="male"></p>
            City*<Select name="city" required>
                <option value="1"> Mumbai</option>
                <option value="2"> Delhi</option>
                <option value="3"> Nainital</option>
                <option value="4"> Chennai</option>
                <option value="5"> Jaipur</option>
                <option value="6"> Banglore</option>
                <option value="7">Mussourie</option>
                <option value="8"> Pune</option>
                <option value="9"> Hyderabad</option>
                <option value="10"> Lucknow</option>
             </Select><br>
            <button class="submit" type="submit" name="submit" value="submit">SUBMIT</button></td></tr>
        </form>

        <?php 
        if(isset($_POST['submit'])){
            $nm= $_POST['Username'];
            $ml= $_POST['mail'];
            $ct= $_POST['contact'];
            $cty= $_POST['gender'];
            $crse= $_POST['city'];
            echo" ";
            echo "<table border='1px'>
            <thead>
            <tr>
                <td>Name</td>
                <td>Email ID</td>
                <td>Contant No.</td>
                <td>Gender</td>
                <td>City</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>$nm</td>
                <td>$ml</td>
                <td>$ct</td>
                <td>$gen</td>
                <td>$cty</td>
            </tr>
            </tbody>
        </table> ";
        }
        else{
            echo "No input";
        }
        ?>
    </body>
</html>