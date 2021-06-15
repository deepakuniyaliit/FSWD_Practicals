<?php
   require_once('config.php');

?>

<?php
$showAlert=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include('config.php');
     $bname = $_POST['bname'];
       $aname = $_POST['aname'];
       $isbn = $_POST['isbn'];
       $pname = $_POST['pname'];
       $pyear = $_POST['pyear'];
       $btype = $_POST['btype'];
       $volume = $_POST['volume'];
       $sql = "INSERT INTO `users` (`Book_Name`, `Author_Name`, `ISBN_Number`, `Publisher_Name`, `Publication_Year`,`Book_Type`,`Number_Of_Pages`) VALUES ('$bname', '$aname', '$isbn', '$pname', '$pyear','$btype','$volume')";
        mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<html>
    <head>
        <title>
            Book
        </title>
    </head>
    <body>
        <form method="POST" action="form.php">
            Book Name <input type="text" placeholder="Enter Book Name" name="bname"><br><br>
            Author Name <input type="text" placeholder="Enter Author Name" name="aname"><br><br>
            ISBN Number <input type="text" placeholder="Enter ISBN Number" name="isbn"><br><br>
            Publisher Name <input type="text" placeholder="Enter Publisher Name" name="pname"><br><br>
            <br>Publication Year<br>
            <select name="pyear">
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
              </select><br>
            <br> Book Type <br>
            Action <input type="radio" value="Action" name="btype"><br>
            Adventure <input type="radio" value="Adventure" name="btype"><br>
            Classics <input type="radio" value="Classics" name="btype"><br>
            Comic Book <input type="radio" value="Comic_Book" name="btype"><br>
            Graphic Novel <input type="radio" value="Graphic_Novel" name="btype"><br>
            Detective <input type="radio" value="Detective" name="btype"><br>
            Mystery <input type="radio" value="Mystery" name="btype"><br>
            Historical Fiction <input type="radio" value="Historical_Fiction" name="btype"><br>
            Horror <input type="radio" value="Horror" name="btype"><br>
            Literary Fiction <input type="radio" value="Literary_Fiction" name="btype"><br>
            <br>
            Number Of Pages<br>
            <input type="range" name="volume" min="200" max="400"> <br><br>
            <input type="submit" name="submit">
        </form>
                      
    
</body>
</html>