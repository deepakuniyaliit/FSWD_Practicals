<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['City'];
    $course = $_POST['Course'];
    $interest = $_POST['interest'];
   
    //echo "Name : $name <br/>";
       // echo "Email : $email <br/>";
        //echo "Contact : $contact <br/>";
        //echo "Course : $course <br/>";
    //if (sizeof($interest) < 3||sizeof($interest)>5) {
        //echo "At least select any 3 and at max 5 Interests.";}}
    echo "
    <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>City</th>
    <th>Course</th>
    <th colspan='3'>Interests</th>
    </tr>
    <tr>
    <td>$name</td>
    <td>$email</td>
    <td>$contact</td>
    <td>$city</td>
    <td>$course</td>
    <td>$interest[0]</td>
    <td>$interest[1]</td>
    <td>$interest[2]</td>
     </tr>
     </table>
        ";}

 ?>