<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$drug=$_POST['drug_name'];
$code=$_POST['drug_code'];
$id = $_POST['id'];
$sheets = $_POST['sheets'];
$mdate = $_POST['manufactured_date'];


$sql="insert into stock_details values ('$drug','$code','$id','$sheets','$mdate')";

if(mysqli_query($conn, $sql)){
    header('Location: s2.html');

} else{
echo "ERROR: $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>