<?php 

$host="localhost";
$user="root";
$password="";
$db="medicalstore";

$conn = mysqli_connect($host, $user, $password,$db);


if(! $conn ) {
         die('Could not connect: ' . mysqli_error($conn));
      }
$retval = mysqli_select_db( $conn, 'medicalstore' );
if(! $retval ) {
         die('Could not select database: ' . mysqli_error($conn));
      }
#echo'worked';
if(isset($_POST['uname'])){
    
$uname=$_POST['uname'];
$password=$_POST['pass'];
#echo $uname;
#echo $password;
    
$sql="select username,password from login where username ='".$uname."'AND password='".$password."' limit 1";
    
$result=mysqli_query($conn,$sql);  
if(mysqli_num_rows($result)==1){
    header('Location: home2.html');
    die();
    }
else{
    header('Location: error.html');
        exit();
    }
}  
#echo'worked again';
?>

<style>
ec{
color:red;
 font-size:56px;
 font-family:arial,sans-serif;
 padding:330px;

}