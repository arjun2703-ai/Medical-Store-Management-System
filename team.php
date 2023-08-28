<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$uname=$_POST['uname'];
$password=$_POST['pass'];


$sql="insert into team values ('$uname','$pass')";

if(mysqli_query($conn, $sql)){
    echo 'data stored in a database successfully!';

echo nl2br("\n$uname\n $pass\n ");
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>