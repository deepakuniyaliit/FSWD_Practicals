<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" action="form.html">
        <label for="bookName">Book Name:</label>
        <input type="text" id="bookName" name="bookName" value=""><br>
        <label for="authorName">Author name:</label>
        <input type="text" id="authorName" name="authorName" value=""><br>
        <label for="isbnNumber">ISBN Number:</label>
        <input type="text" id="isbnNumber" name="isbnNumber" value=""><br>
        <label for="publisherName">Publisher Name:</label>
        <input type="text" id="publisherName" name="publisherName" value=""><br>
        <label for="publicationYear">Publication Year:
        <select name="Year" id="" name = "publicationYear">
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
        </label>
        <br>
        <label for="noOfPages">No of Pages:
        <input type="number" min="200" max="400" name="noOfPages">
        </label>
        <br>
        <label for="bookType">Book Type:</label>
        <input type="radio" id="action" name="bookType" value="action">
        <label for="action">Action</label>
        <br>
        <input type="radio" id="adventure" name="bookType" value="adventure">
        <label for="adventure">Adventure</label>
        <br>
        <input type="radio" id="classisc" name="bookType" value="classisc">
        <label for="classisc">Classisce</label>
        <br>
        <input type="radio" id="comicbook" name="bookType" value="comicbook">
        <label for="comicbook">Comicbook</label>
        <br>
        <input type="radio" id="graphicnovel" name="bookType" value="graphicnovel">
        <label for="graphicnovel">Graphicnovel</label>
        <br>
        <input type="radio" id="Detective" name="bookType" value="Detective">
        <label for="Detective">Detective</label>
        <br>
        <input type="radio" id="Mystery" name="bookType" value="Mystery">
        <label for="Mystery">Mystery</label>
        <br>
        <input type="radio" id="Historical Fiction" name="bookType" value="Historical Fiction">
        <label for="Historical Fiction">Historical Fiction</label>
        <br>
        <input type="radio" id="Horror" name="bookType" value="Horror">
        <label for="Horror">Horror</label>
        <br>
        <input type="radio" id=" Literary Fiction" name="bookType" value=" Literary Fiction">
        <label for=" Literary Fiction"> Literary Fiction</label>
        <br>
        <br>    
        <input type="submit" value="Submit">
      </form> 
    
</body>
</html>