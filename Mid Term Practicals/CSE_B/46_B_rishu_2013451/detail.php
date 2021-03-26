<?php
include('config.php');
?>
<?php
$sql ="SELECT * FROM `user`";
$result = mysqli_query($conn,$sql);

$no_rows = mysqli_num_rows($result);
if($no_rows > 0)
{
    $row  =mysqli_fetch_assoc($result);
    $row =mysqli_fetch_assoc($result);
    while($row!=NULL){
        ?>
    <ul>
    <li>ID-<?php echo $row['id'] ?></li>
    <li>USERNAME-<?php echo $row['username'] ?></li>
    <li>EMAIL-<?php echo $row['email'] ?></li>
    <li>contact-<?php echo $contact['contact'] ?></li>
    <li>GENDER-<?php echo $row['gender'] ?></li>
    <li>CITY-<?php echo $row['city'] ?></li>
    </ul>
    <?php
    
        
       
    }
}
?>
