<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Bordered Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Users List</h2>
</div>
<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM users");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>book id</td>
<td>book name</td>
<td>author</td>
<td>isbn</td>
<td>publisher</td>
<td>pages</td>
<td>book type</td>
</tr>
<?php

while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["book id"]; ?></td>
<td><?php echo $row["book name"]; ?></td>
<td><?php echo $row["author"]; ?></td>
<td><?php echo $row["isbn"]; ?></td>
<td><?php echo $row["publisher"]; ?></td>
<td><?php echo $row["pages"]; ?></td>
<td><?php echo $row["book type"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
</body>
</html>