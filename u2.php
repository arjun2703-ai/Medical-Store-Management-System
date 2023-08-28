<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$staff = $_POST['staff'];
$quan = $_POST['salary'];


$sql="update staff_details set salary = '$quan' where staff_id = '$staff'";

if(mysqli_query($conn, $sql)){
    header('Location: us2.html');

} else{
echo "ERROR: Hush! Sorry $sql. "
. mysqli_error($conn);
}
mysqli_close($conn)
?>