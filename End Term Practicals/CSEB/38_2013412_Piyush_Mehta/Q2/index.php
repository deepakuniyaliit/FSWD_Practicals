<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1,
            shrink-to-fit=no"
    />
    <title>Q2</title>
    <style type="text/css">
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td,
      th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
  </head>

  <body>
    <div>
      <div>
        <div>
          <div>
            <?php
                include_once 'config.php';
                $result= mysqli_query($conn," SELECT * FROM user");
            ?>
            <?php
                 if (mysqli_num_rows($result)>
            0) { ?>
            <table>
              <tr>
                <td>Book ID</td>
                <td>Book Name</td>
                <td>Author</td>
                <td>ISBN</td>
                <td>Publisher</td>
                <td>Publication Year</td>
                <td>Pages</td>
                <td>Book Type</td>
              </tr>
              <?php
                                        $i=0;
              while($row= mysqli_fetch_array($result))
                                        {
                                        ?>
              <tr>
                <td>
                  <?php echo $row[" book_id" ]; ?>
                </td>
                <td>
                  <?php echo $row[" bookName"
                                                        ]; ?>
                </td>
                <td>
                  <?php echo $row["authorName" ]; ?>
                </td>
                <td>
                  <?php echo $row["isbnNumber" ]; ?>
                </td>
                <td>
                  <?php echo
                    $row["publisherName"]; ?>
                </td>
                <td>
                  <?php echo
                    $row["publishYear"]; ?>
                </td>
                <td>
                  <?php
                   echo
                        $row["volume"];
                                                                            ?>
                </td>
                <td>
                  <?php
                  echo
                    $row["bookType"];
                                                                                ?>
                </td>
              </tr>
              <?php
                  $i++;
          }
              ?>
            </table>
            <?php
                                                                            }
           else{
                  echo"empty"; 
           }
?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
