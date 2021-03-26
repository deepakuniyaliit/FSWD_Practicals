<!DOCTYPE html>

<html>

    <head>
        <title>Form</title>

        <style>
            body {
                margin: 20px;
                padding: 20px;
                }

           
        </style>

        <script>
            function validateForm() {
                var a = document.forms["form"]["name"].value;
                var b = document.forms["form"]["email"].value;
                var c = document.forms["form"]["number"].value;
                var d = document.forms["form"]["city"].value;
                
                if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "" ) {
                    alert("Please Fill All Required Field");
                    return false;
                }
                return true;
            }

            function ValidateEmail() {
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                inputText = document.getElementById("email");
                if (inputText.value.match(mailformat))
                    return true;
                else {
                    alert("You have entered an invalid email address!");
                    return false;
                }
            }

            function validatephonenumber() {
                var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                inputtxt = document.getElementById("number");
                if (inputtxt.value.match(phoneno))
                    return true;
                else {
                    alert("Please enter a valid Phone Number");
                    return false;
                }
            }

            
        </script>

    </head>

    <body>
        <form action="" method="GET" name="form" id="form">
            Name: <input type="text" id="name" name="name" placeholder=" Enter Your Name" required><br><br>
            E-Mail: <input type="email" id="email" name="email" placeholder="abc@gmail.com" required><br><br>
            Contact: <input type="text" id="number" name="number" placeholder="Contact " minlength="10" maxlength="10" required onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));"><br><br>
            Gender:<input type="radio" id="male" name="gender" value="Male" required>
                <label for="male"> Male </label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female"> Female </label>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other"> Other </label>
                <br><br>
            <label for="city">City: </label>
                <select name="city" id="city" required>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Mussoorie">Mussoorie</option>
                    <option value="Nanital">Nanital</option>
                    <option value="chennai">chennai</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Pune">Pune</option>
                    <option value="Banglore">Banglore</option>
                    <option value="Hyderabad">Hyderabad</option>
                </select>
            
            <br><br>
            <input id="submit" type="submit" name="submit" value="SUBMIT" onclick="if( !(validateForm() && ValidateEmail() && validatephonenumber() ){
                    event.preventDefault();
                }">
            <br><br><br><br>
        </form>

        

    </body>

</html>