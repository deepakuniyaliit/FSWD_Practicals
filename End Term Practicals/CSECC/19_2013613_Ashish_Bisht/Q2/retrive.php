<?php

echo
"<html>
<body>
<table border='1px solid'>
<tr>
<td>BOOk ID</td>
<td> Book Name</td>
<td>BOOk ID</td>
<td> Author</td>
<td>ISBN</td>
<td> Published</td>
<td>Published Year</td>
<td> Pages</td>
<td>Book TYpe</td>
</tr>
<tr id='value'>

</tr>
</table>
</body>
</html>"

$conn = newsqli_connect("127.0.0.1","root","","BookStore");
if($conn)
{
    $sql="SELECT * from record";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        $i=0;
        while($row=mysqli_fetch_assoc($result))
        {
            echo "let n =document.createElement('td');td.innerHTML='$row[$i]';document.getElementById('value').innerHTML+=n;"
            i++;
        }
    }
}
?>