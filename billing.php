<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$name=$_POST['drug_name'];
$no = $_POST['bill_no'];
$code = $_POST['drug_code'];
$quantity = $_POST['quantity'];
$rate = $_POST['rate'];
$total= $_POST['total'];
$pname = $_POST['patient_name'];
$id = $_POST['id'];

$sql="insert into billings values ('$name','$no','$code','$quantity','$rate','$total','$pname','$id')";

if(mysqli_query($conn, $sql)){
    header('Location: s5.html');

} else{
echo "ERROR : $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>