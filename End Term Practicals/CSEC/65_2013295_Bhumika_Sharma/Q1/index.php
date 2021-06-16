<?php 
	include "connection.php"
	include "register.php"
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Registration Form</title>
</head>
<body>
    <h3>Book Registration Form </h3>
    <form name="form1" method = "post">
        <table border="5" width="50%" height = "70px">
                <tr><td>Book Name: <input type="text" name="book_name" /></td></tr>
                <br>
                <tr><td>Author Name: <input type="text" name="author_name" /></td></tr>
                <br>
                <tr><td>ISBN number: <input type="text" name="isbn"></td></tr>
                <br>
                <tr><td>Publisher Name: <input type="text" name="publisher"></td></tr>
                <br>
                <tr><td>Book ID: <input type="text" name="bookid"></td></tr>
                <br>
                <tr><td>
                    <label>Publication Year: </label>
                    <select name="dropdown" id = "pubyear">
                </select></td></tr>

                <tr><td>No. of pages: <input type="number" id="quantity" name="quantity" min="200" max="400"></td></tr>
                <br>
                <tr><td><label>Book Type: </label>
                    <br>
                    <input type="radio" name="genre" value="action">Action<br>
                    <input type="radio" name="genre" value="adventure">Adventure<br>
                    <input type="radio" name="genre" value="classics">Classics<br>
                    <input type="radio" name="genre" value="comic">Comic Book<br>
                    <input type="radio" name="genre" value="graphic">Graphic Novel<br>
                    <input type="radio" name="genre" value="detective">Detective<br>
                    <input type="radio" name="genre" value="mystery">Mystery<br>
                    <input type="radio" name="genre" value="historical">Historical Fiction<br>
                    <input type="radio" name="genre" value="horror">Horror<br>
                    <input type="radio" name="genre" value="literary">Literary Fiction<br>
            </td></tr>

                <br>
            </table>
    </form>


    <script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var pubyear = document.getElementById("pubyear");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = 2010; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            pubyear.appendChild(option);
        }
    };
    </script>
</body>
</html>