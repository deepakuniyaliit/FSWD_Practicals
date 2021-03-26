<DOCTYPE HTML>
    <html>
        <head>
            <?php include_once'configforp.php';
            ?>
</head>
        <body>
            <?php
            $sql="SELECT * FROM `users`";
            $re=mysqli_query($conn,$sql);?>
           


     
        <ol type="1">
        <?php
           $re=mysqli_query($conn,$sql);
         while($ro=$re->fetch_assoc()){?>
          <li >Details of user with id=-<?php echo $ro['id'];?>
              <ul>
                  <li>username-<?php echo $ro['username'];?></li>
                  <li>Email-<?php echo $ro['email'];?></li>
                  <li>Gender-<?php echo $ro['gebder'];?></li>
                  <li>Contact-<?php echo $ro['contact'];?></li>
                  <li>city-<?php echo $ro['city'];?></li>
              </ul> 
            </li>
            <?php } ?>
      </ol>
    
</body>
</html>