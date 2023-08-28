<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$name=$_POST['name'];
$location = $_POST['location'];
$gst = $_POST['gst_no'];
$id = $_POST['store_id'];
$type = $_POST['delivery_type'];

$sql="insert into vendors values ('$name','$location','$gst','$id','$type')";

if(mysqli_query($conn, $sql)){
    header('Location: s3.html');

} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>