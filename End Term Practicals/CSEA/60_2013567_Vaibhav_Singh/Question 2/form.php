<?php
    include('config.php');
    if(isset($_POST['submit']))
    {
        $bookName = $_POST['bookName'];
        $authorName = $_POST['authorName'];
        $isbnNumber = $_POST['isbnNumber'];
        $publisherName = $_POST['publisherName'];
        $publicationYear = $_POST['pyear'];
        $noOfPages = $_POST['noOfPages'];
        $bookType = $_POST['btype'];   
        $sqlQuery = "INSERT INTO `books`(`id`, `bookName`, `authorName`, `isbnNumber`, `publisherName`, `publicationYear`, `bookType`, `noOfPages`) VALUES (NULL,'$bookName', '$authorName', '$isbnNumber', '$publisherName', '$publicationYear', '$noOfPages', '$bookType')";
        if (!(mysqli_query($db, $sqlQuery))) {
            echo "Invalid Query";
        }
    }
?>

<html>
    <head>
        <title>Book Store</title>
    </head>
    <body>
        <form method="post" action="form.php">
            <table>
                <tbody>
                    <tr>
                        <td>bookName</td>
                        <td>
                            <input type="text" name="bookName" placeholder="Enter Book name" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>authorName</td>
                        <td>
                            <input type="text" name="authorName" placeholder="Enter author name" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>isbnNumber</td>
                        <td>
                            <input type="text" name="isbnNumber" placeholder="Enter isbn" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>publisherName</td>
                        <td>
                            <input type="text" name="publisherName" placeholder="Enter publisher name" required/>
                        </td>
                    </tr>
                    <tr>
                        <td>publicationYear</td>
                        <td>
                            <select name="pyear">
                                <option value="select">Select Year...</option>
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
                        </td>
                    </tr>
                    <tr>
                        <td>bookType</td>
                        <td>
                            <input type="radio" name="btype" value="Action" required/>Action
                            <input type="radio" name="btype" value="Adventure" required/>Adventure
                            <input type="radio" name="btype" value="Classics" required/>Classics
                            <input type="radio" name="btype" value="Comic Book" required/>Comic Book
                            <input type="radio" name="btype" value="Graphic Novel" required/>Graphic Novel
                            <input type="radio" name="btype" value="Detective" required/>Detective
                            <input type="radio" name="btype" value="Mystery" required/>Mystery
                            <input type="radio" name="btype" value="Historical Fiction" required/>Historical Fiction
                            <input type="radio" name="btype" value="Horror" required/>Horror
                            <input type="radio" name="btype" value="Literary Fiction" required/>Literary Fiction                       </td>
                        </td>
                    </tr>
                    <tr>
                        <td>noOfPages</td>
                        <td>
                            <input type="number" name="noOfPages" min="200" max="400" required/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" style="width:100px;" name="submit" value="SUBMIT"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>