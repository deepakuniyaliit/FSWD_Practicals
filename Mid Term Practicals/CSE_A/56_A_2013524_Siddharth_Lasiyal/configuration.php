$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'WebPractical';

$db = mysqli_connect($host, $username, $password, $db_name);
if($db == false)
{
    echo "Failed to connect with database!";
}
?>
