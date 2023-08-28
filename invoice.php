<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);

$name=$_POST['vendor_name'];
$invoice=$_POST['invoice_no'];
$gst = $_POST['gst_no'];
$prate = $_POST['p_rate'];
$srate = $_POST['s_rate'];
$quan = $_POST['quantity'];
$id = $_POST['store_id'];
$code = $_POST['code'];


$sql="insert into invoice values ('$name','$invoice','$gst','$prate','$srate','$quan','$id','$code')";

if(mysqli_query($conn, $sql)){
    header('Location: s4.html');

} else{
echo "ERROR: $sql. "
. mysqli_error($conn);
}
mysqli_close($conn);
?>