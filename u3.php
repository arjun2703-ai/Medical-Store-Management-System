<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$code = $_POST['drug_code'];
$price = $_POST['price'];


$sql="update invoice set s_rate = '$price' where drug_code = '$code'";

if(mysqli_query($conn, $sql)){
    header('Location: us3.html');

} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn)
?>