<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$uname=$_POST['uname'];
$password=$_POST['pass'];
$email = $_POST['email'];
$phno = $_POST['phno'];

$sql="insert into login values ('$uname','$password','$email','$phno')";

if(mysqli_query($conn, $sql)){
    header('Location: sucess.html');

echo nl2br("\n$uname\n $password\n ");
} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>