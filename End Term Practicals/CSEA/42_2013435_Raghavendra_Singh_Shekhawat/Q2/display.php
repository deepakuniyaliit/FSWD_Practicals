<?php
    include('config.php');
    include('Templates/layout.html');
    // Fetch Data from database
    $fetch_data = "SELECT * FROM `data`";
    $result = $conn -> query($fetch_data);
    
    
    // Display the output data
    
    echo '<div id=Display_Table style="position: relative;top: 150px;left: 400px;">';
    echo '<h3 style="position: relative; left: 80">The Entered Data is!!! </h3>';
    echo "<table border='4' class='stats' cellspacing='0'>
            <tbody>
            <tr> 
                <th>Book ID</th> 
                <th>Book Name</th> 
                <th>Author</th> 
                <th>ISBN</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>Pages</th>
                <th>Book Type</th> 
            </tr>" ; 
    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['b_name'] . "</td>";
            echo "<td>" . $row['author'] . "</td>";
            echo "<td>" . $row['isbn'] . "</td>";  
            echo "<td>" . $row['publisher'] . "</td>";
            echo "<td>" . $row['publication_year'] . "</td>";
            echo "<td>" . $row['pages'] . "</td>";
            echo "<td>" . $row['book_type'] . "</td>";  
            echo "</tr>";
        }
    echo "</tbody>";
    echo "</table>"; 
    }

?>