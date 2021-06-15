
<?php include("insert1.php"); ?>

<!DOCTYPE html>

<html>
    <head>
        <title>Form</title>

        <style>
            body {
                margin: 30px;
                padding: auto;
            }
        </style>
    </head>

    <body>
        <form action="" method="POST" name="form1" id="form1">
            <div>
                <label for="bookname">Book_Name: </label>
                <input type="text" id="bookname" name="bookname" placeholder="Your Book Name" required>
                <br><br>
            </div>
            <div>
                <label for="authorName">Author_Name: </label>
                <input type="text" id="authorName" name="authorName" placeholder="Your Author Name">
                <br><br>
            </div>
            <div>
                <label for="isbnNumber">ISBN_Number: </label>
                <input type="text" id="isbnNumber" name="isbnNumber" placeholder="Your Isbn No">
                <br><br>
            </div>
            <div>
                <label for="publisherName">Publisher_Number: </label>
                <input type="text" id="publisherName" name="publisherName" placeholder="Your Publisher Name">
                <br><br>
            </div>
            <div>
                Publisher_Year:
                
                <select name="publisherYear">
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

                <br><br>
            </div>
            <div>
                <label for="noOfPages">Number_of_pages: </label>
                <input type="text" id="noOfPages" name="noOfPages" placeholder="No Of Pages" min="200" max="400">
                <br><br>
            </div>
            <div>
                <span>Book_Type: </span>
                <input type="radio" id="Action" name="genre" value="Action" required>
                <label for="Action"> Action </label>
                <input type="radio" id="Adventure" name="genre" value="Adventure">
                <label for="Adventure"> Adventure </label>
                <input type="radio" id="Classics" name="genre" value="Classics">
                <label for="Classics"> Classics </label>
                <input type="radio" id="Comic" name="genre" value="Comic">
                <label for="Comic"> Comic </label>
                <input type="radio" id="Graphic" name="genre" value="Graphic">
                <label for="Graphic"> Graphic </label>
                <input type="radio" id="Detective" name="genre" value="Detective">
                <label for="Detective">Detective </label>
                <input type="radio" id="Mystery" name="genre" value="Mystery">
                <label for="Mystery"> Mystery </label>
                <input type="radio" id="Historical" name="genre" value="Historical">
                <label for="Historical"> Historical </label>
                <input type="radio" id="Horror" name="genre" value="Horror">
                <label for="Horror"> Horror </label>
                <input type="radio" id="Literary" name="genre" value="Literary">
                <label for="Literary"> Literary </label>
                <br><br>
            </div>
            
            <div>
                <input type="submit" name="submit" id="submit" value="SUBMIT">
                <br><br>
            </div>
            
        </form>
    </body>
</html>