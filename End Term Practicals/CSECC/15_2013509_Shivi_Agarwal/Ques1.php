<html>
    <head>
    
    </head>
    <body>
        <form action="book.php" method="POST">
            Book Name:<input type="text" name="bookName">
            <br/>
            Author Name:<input type="text" name="authorName">
            <br/>
            ISBN Number:<input type="text" name="isbnNumber">
            <br>
            Publisher Name:<input type="text" name="publisherName">
            <br>
            Publication Year:
            <select name="publicationYear">
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2010">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>            
            <br>
            No. of Pages: <input type="range" min="200" max="400" name="noOfPages">
            <br>
            Book Type:
            <input type="radio" name="bookType" value="Action">Action <br>
            <input type="radio" name="bookType" value="Adventure">Adventure <br>
            <input type="radio" name="bookType" value="Classics">Classics <br>
            <input type="radio" name="bookType" value="Comic Book">Comic Book <br>
            <input type="radio" name="bookType" value="Graphic Novel">Graphic Novel <br>
            <input type="radio" name="bookType" value="Detective">Detective<br> 
            <input type="radio" name="bookType" value="Mystery">Mystery<br>
            <input type="radio" name="bookType" value="Historical Fiction">Historical Fiction <br>
            <input type="radio" name="bookType" value="Horror">Horror <br> 
            <input type="radio" name="bookType" value="Literary Fiction">Literary Fiction<br>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>