 
<?php
$host='localhost';
$username='root';
$password="";
$database="online_food";
$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn)
{
    die ("Database is not connect");
}
 ?>