<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" action="store_data.php"> 
            <table >
                <tr><td>Book ID</td><td><input type="text" name="bookid"></td><tr>
                <tr><td>Book Name</td><td><input type="text" name="bookname"></td><tr>
                <tr><td>Author</td><td><input type="text" name="authorname"></td></tr>
                <tr><td>ISBN</td><td><input type="text" name="isbnnumber"></td></tr>
                <tr><td>Publisher</td><td><input type="text" name="publisher"></td></tr>
                <tr><td>Publication Year</td>
                    <td><select name="year">
                        <option value="2010" selected >2010</option>
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
                    </td></tr>
                <tr><td>Pages (200-400)</td><td><input type="range" name="noOfPages" min="200" max="400" id="range_weight" oninput="range_weight_disp.value = range_weight.value"><output  id="range_weight_disp"></output></td></tr>
                <tr><td>Book Type</td>
                    <td><input type="radio" name="Type" value="action">action
                        <br>
                        <input type="radio" name="Type" value="adventure">Adventure
                        <br>
                        <input type="radio" name="Type" value="classics">Classics
                        <br>
                        <input type="radio" name="Type" value="comic book">Commic Book
                        <br>
                        <input type="radio" name="Type" value="graphic novel">Graphic Novel
                        <br>
                        <input type="radio" name="Type" value="detective">Detective
                        <br>
                        <input type="radio" name="Type" value="mystery">Mystery
                        <br>
                        <input type="radio" name="Type" value="historical fiction">Historical Fiction
                        <br>
                        <input type="radio" name="Type" value="horror">Horror
                        <br>
                        <input type="radio" name="Type" value="literary fiction">Literary Fiction</td></tr>
                <tr><td><input type="submit" name="btn"></td></tr>
            </table>
        </form>
</body>
</html>