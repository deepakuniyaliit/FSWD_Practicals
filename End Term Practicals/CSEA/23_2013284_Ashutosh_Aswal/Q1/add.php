<html>
<head>
    <title>ADD DATA</title>
    <link rel='stylesheet' href='CSS/styles.css' />
</head>

<body>
    <form action='add.php' method='post'>
        <table>
            <tr>
                <td>Book Name</td>
                <td>
                    <input type='text' name='bookName' placeholder='Enter Book Name' required />
                </td>
            </tr>
            <tr>
                <td>Author Name</td>
                <td>
                    <input type='text' name='authorName' placeholder='Enter Author Name' required />
                </td>
            </tr>
            <tr>
                <td>ISBN Number</td>
                <td>
                    <input type='number' name='isbnNumber' pattern = '[0-9]{13}' placeholder='Enter ISBN Number' required />
                </td>
            </tr>
            <tr>
                <td>Publisher Name</td>
                <td>
                    <input type='text' name='publisherName' placeholder='Enter Publisher Name' required />
                </td>
            </tr>
            <tr>
                <td>Publication Year</td>
                <td>
                <select name='publicationYear'>
                        <option value='2010'>2010</option>
                        <option value='2011'>2011</option>
                        <option value='2012'>2012</option>
                        <option value='2013'>2013</option>
                        <option value='2014'>2014</option>
                        <option value='2015'>2015</option>
                        <option value='2016'>2016</option>
                        <option value='2017'>2017</option>
                        <option value='2018'>2018</option>
                        <option value='2019'>2019</option>
                        <option value='2020'>2020</option>
                        <option value='2021'>2021</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Number Of Pages</td>
                <td>
                    <input type='number' name='noOfPages' min = '200' max = '400' placeholder='Enter Number Of Pages' required />
                </td>
            </tr>
            <tr>
                <td>Book Type</td>
                <td>
                    <input type='radio' name='bookType' value='Action' required />Action
                    <input type='radio' name='bookType' value='Adventure' required />Adventure
                    <input type='radio' name='bookType' value='Classics' required />Comic Book
                    <input type='radio' name='bookType' value='Comic Book' required />Comic Book
                    <input type='radio' name='bookType' value='Graphic Novel' required />Graphic Novel
                    <input type='radio' name='bookType' value='Detective' required />Detective
                    <input type='radio' name='bookType' value='Mystery' required />Mystery
                    <input type='radio' name='bookType' value='Historical Fiction' required />Historical Fiction
                    <input type='radio' name='bookType' value='Horror' required />Horror
                    <input type='radio' name='bookType' value='Literary Fiction' required />Literary Fiction
                </td>
            </tr>
            <tr>
                <td colspan='2' align='center'>
                    <input type='submit' name='add' value='ADD' />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>