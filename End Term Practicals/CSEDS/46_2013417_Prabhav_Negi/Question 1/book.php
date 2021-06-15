<?php
include_once('config.php');
?>
<?php
if(isset($_POST['submit'])){
    $bookname = $_P['bookName'];
    $authorname = $_P['authorName'];
    $publisher = $_P['publishName']
    $ISBNnumber = $_P['isbn']
    $publishYear = $_P['publishYear']
    $pages = $_P['pages']
    $booktype = $_P['bookType']
    $sql = "INSERT INTO `BookStore` (`id`, 'bookName', 'authorName', 'isbnNumber',
    'publisherName', 'publicationYear', 'pages', 'bookType') VALUES (NULL, '$bookname', '$authorname', '$ISBNnumber', '$publisher', '$publishYear', '$pages', '$booktype')";
    mysqli_query($conn,$sql);
}
else{
    echo "Submit form";
}

?>
