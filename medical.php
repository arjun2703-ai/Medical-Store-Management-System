<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$name=$_POST['name'];
$id=$_POST['store_id'];
$location = $_POST['location'];
$staff = $_POST['staff_no'];
$date = $_POST['start_date'];

$sql="insert into medical_store values ('$name','$id','$location','$staff','$date')";

if(mysqli_query($conn, $sql)){
    header('Location: s1.html');

} else{
echo " $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>