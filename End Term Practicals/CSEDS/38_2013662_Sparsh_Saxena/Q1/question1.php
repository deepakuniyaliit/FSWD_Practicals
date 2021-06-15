<?php
include('q1con.php');
?>

<?php
if(isset($_POST['submit'])){
    $Bookname = $_POST['bn'];
    $Authorname = $_POST['an'];
    $isbn = $_POST['in'];
    $Publishername = $_POST['pn'];
    $Noofpages = $_POST['nop'];
    $Booktype = $_POST['btype'];
    $Publicationyear = $_POST['Year'];


    $sql = "INSERT INTO `Bookstore` (`bn`, `an`, `in`, `pn`,`nop`, `btype`, `PYear`) VALUES ('$Bookname', '$Authorname', '$isbn', '$Publishername','$Noofpages', '$Booktype', '$Publicationyear')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>

    </head>
    <body>
        <form name="myform" method="POST">
            bookName: <input type= "text" name="bn" required/><br/>
            authorName: <input type= "text" name="an" required/><br/>
            isbnNumber: <input type= "text" name="in" required/><br/>
            publisherName: <input type= "text" name="pn" required/><br/>
            <label for="Year">publicationYear:</label>
            <select name="Year" id=:"Year">
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
            </select>
            <br/>
            noOfPages: <input type= "number" name="nop" min="200" max="400" required/><br/>
            <br>bookType<br>
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
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>