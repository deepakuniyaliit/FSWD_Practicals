<?php
include_once('config.php');
?>
<?php
if(isset($_POST['submit'])){
    $bookname = $_POST['bookName'];
    $authorname = $_POST['authorName'];
    $publisher = $_POST['publishName']
    $ISBNnumber = $_POST['isbn']
    $publishYear = $_POST['publishYear']
    $pages = $_POST['pages']
    $booktype = $_POST['bookType']
    $sql = "INSERT INTO `BookStore` (`id`, 'bookName', 'authorName', 'isbnNumber',
    'publisherName', 'publicationYear', 'pages', 'bookType') VALUES (NULL, '$bookname', '$authorname', '$ISBNnumber', '$publisher', '$publishYear', '$pages', '$booktype')";
    mysqli_query($conn,$sql);
}
else{
    echo "Submit form";
}

?>
