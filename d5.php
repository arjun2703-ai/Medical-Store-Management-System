<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$code = $_POST['drug_code'];
$sql = "select * from billings where bill_no = '$code'";
$result=mysqli_query($conn,$sql);  

if(mysqli_num_rows($result)== 0 ) {
    echo "Invalid Tuple";
    
}
else{
$sql2="delete from billings where bill_no = '$code'";
if(mysqli_query($conn, $sql2)){
    header('Location: ds5.html');

} 

else{
echo "ERROR: Hush! Sorry $sql."
. mysqli_error($conn);
}
}
mysqli_close($conn)
?>