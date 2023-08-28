<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$code = $_POST['drug_code'];
$quan = $_POST['quantity'];


$sql="update stock_details set sheets = '$quan' where drug_code = '$code'";

if(mysqli_query($conn, $sql)){
    header('Location: us1.html');

} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn)
?>