<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
<form action="action.php" method="POST">
  <label for="Bookname">Book name:</label><br>
  <input type="text" id="Bookname" name="Bookname"><br>
  <label for="Authorname">Author name:</label><br>
  <input type="text" id="Authorname" name="Authorname" ><br>
  <label for="Isbn">ISBN number:</label><br>
  <input type="text" id="Isbn" name="Isbn"><br>
  <label for="Publishername">Publisher name:</label><br>
  <input type="text" id="Publishername" name="Publishername"><br>
  <label for="Publicationyear">Publication year:</label><br>
  <select name="Publicationyear" id="Publicationyear">
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
  <label for="vol">No of pages (between 200 and 400):</label><br>
  <input type="range" id="Noofpages" name="Noofpages" min="200" max="400"><br>
  <p>Book type :</p>
  <input type="radio" id="Action" name="bookType" value="Action">
  <label for="Action">Action</label><br>
  <input type="radio" id="Adventure" name="bookType" value="Adventure">
  <label for="Adventure">Adventure</label><br>
  <input type="radio" id="Classics" name="bookType" value="Classics">
  <label for="Classics">Classics</label><br>
  <input type="radio" id="Comicbook" name="bookType" value="Comicbook">
  <label for="Comicbook">Comic book</label><br>
  <input type="radio" id="GraphicNovel" name="bookType" value="GraphicNovel">
  <label for="GraphicNovel">Graphic Novel</label><br>
  <input type="radio" id="Detective" name="bookType" value="Detective">
  <label for="Detective">Detective</label><br>
  <input type="radio" id="Mystery" name="bookType" value="Mystery">
  <label for="Mystery">Mystery</label><br>
  <input type="radio" id=" HistoricalFiction" name="bookType" value=" HistoricalFiction">
  <label for=" HistoricalFiction"> Historical Fiction</label><br>
  <input type="radio" id="Horror" name="bookType" value="Horror">
  <label for="Horror"> Horror</label><br>
  <input type="radio" id=" LiteraryFiction" name="bookType" value=" LiteraryFiction">
  <label for=" LiteraryFiction">  Literary Fiction</label><br>
  <input type="submit" value="Submit">bookType
</form>
</body>
</html>