<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$name=$_POST['name'];
$staffid = $_POST['staff_id'];
$storeid = $_POST['store_id'];
$address = $_POST['address'];
$phno = $_POST['phno'];
$salary = $_POST['salary'];

$sql="insert into staff_details values ('$name','$staffid','$storeid','$address','$phno','$salary')";

if(mysqli_query($conn, $sql)){
    header('Location: s6.html');

} else{
echo "ERROR: $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>