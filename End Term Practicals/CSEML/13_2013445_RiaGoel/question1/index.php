<?php $book = array("Action", "Adventure", "Classics", "Comic Book", "Graphic Novel", "Detective", " Mystery", "Historical Fiction", "Horror", " Literary Fiction"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <div class="container" style="width:1000px">
        <form action="./main.php" method="post">
            <div class="form-group row">
                <label for="publication_year"> Publication Year</label>
                <div class="col">
                    <select class="form-control" name="publication_year" id="publication_year">
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <label for=""></label>
                <?php
                $x = 0;
                foreach ($book as $data) {
                    $x++;
                ?>
                    <div class="col">
                        <input type="radio" name="book_type" id="book_type<?php echo $x; ?>" value="<?php echo $data ?>"> <?php echo $data; ?>
                    </div>
                <?php  } ?>
            </div>
            <div class="row">
                <div class="col">
                    <label for="bookName">Book Name</label>
                    <input type="text" name="bookName" class="form-control">
                </div>
                <div class="col">
                    <label for="authorName">Author Name</label>
                    <input type="text" name="authorName" class="form-control">
                </div>
                <div class="col">
                    <label for="isbnNumber">Is Bn Number</label>
                    <input type="text" name="isbnNumber" class="form-control">
                </div>
                <div class="col">
                    <label for="publisherName">Publisher Name</label>
                    <input type="text" name="publisherName" class="form-control">
                </div>
                <div class="col">
                    <label for="noOfPages">No. of Pages(200 to 400) </label>
                    <input type="number"min="200" max="400" name="noOfPages" class="form-control">
                </div>
            </div>
            <br>
            <center>
            <input type="submit" name="add_books"class="btn btn-primary">
            </center>
        </form>
    </div>
</body>
</html>