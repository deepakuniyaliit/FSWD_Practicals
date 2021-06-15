<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $bookName = $_POST['bookName'];
      $authorName = $_POST['authorName'];
      $isbnNumber = $_POST['isbnNumber'];
      $publicationName = $_POST['publicationName'];
      $publicationNumber = $_POST['publicationNumber'];
      $noOfPages = $_POST['noOfPages'];
      $bookType = $_POST['bookType'];
    $sql = "INSERT INTO `book` (`BookName`,`Author`, `ISBN`, `Publisher`, `PublicationYear`,`Pages`,`BookType`) VALUES ('$bookName','$authorName', '$isbnNumber', '$publicationName', '$publicationNumber','$noOfPages','$bookType')";
    
    mysqli_query($conn, $sql);
}
else if(isset($_SESSION['username']) ){
    echo "Please click submit button to submit the data..";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Data</title>
    <style>
      .container {
        width: 100%;
        height: 100vh;
        display: grid;
        place-items: center;
      }
      .form {
        width: 30%;
      }
      label {
        margin-right: 0.75em;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="insert.php" method="POST" class="form" id="form">
        <div class="form-control">
          <label for="bookName">bookName</label>
          <input type="text" id="bookName" name="bookName" />
        </div>
        <div class="form-control">
          <label for="authorName">authorName</label>
          <input type="text" id="authorName" name="authorName" />
        </div>
        <div class="form-control">
          <label for="isbnNumber">isbnNumber</label>
          <input type="text" id="isbnNumber" name="isbnNumber" />
        </div>
        <div class="form-control">
          <label for="publisherName">publisherName</label>
          <input type="text" id="publisherName" name="publisherName" />
        </div>
        <div class="form-control">
          <label for="publicatoinYear">publicatoinYear</label>
          <select id="publicatoinYear">
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
        </div>
        <div class="form-control">
          <label for="noOfPages">noOfPages</label>
          <input type="number" name="noOfPages" id="noOfPages" min="200" max="400" />
        </div>
        <div class="form-control">
          <label for="bookType">bookType</label>
          <label for="action">
            Action:
            <input type="radio" name="bookType" id="action" value="action" />
          </label>
          <label for="adventure">
            Adventure:
            <input type="radio" name="bookType" id="adventure" value="adventure" />
          </label>
          <label for="classic">
            Classic:
            <input type="radio" name="bookType" id="classic" value="classic" />
          </label>
          <label for="comic">
            Comic:
            <input type="radio" name="bookType" id="comic" value="comic" />
          </label>
          <label for="graphicNovel">
            Graphic Novel:
            <input type="radio" name="bookType" id="graphicNovel" value="graphicNovel" />
          </label>
          <label for="detective">
            Detective:
            <input type="radio" name="bookType" id="detective" value="detective" />
          </label>
          <label for="mystery">
            Mystery:
            <input type="radio" name="bookType" id="mystery" value="mystery" />
          </label>
          <label for="historicalFiction">
            Historical Fiction:
            <input type="radio" name="bookType" id="historicalFiction" value="historicalFiction" />
          </label>
          <label for="horror">
            Horror:
            <input type="radio" name="bookType" id="horror" value="horror" />
          </label>
          <label for="literaryFiction">
            Literary Fiction:
            <input type="radio" name="bookType" id="literaryFiction" value="literaryFiction" />
          </label>
        </div>
        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>