<!DOCTYPE html>
<html>
<head>
<title>Invoice Profits</title>
<style>
body {background-color: white;
}
table {
border-collapse: collapse;
width: 100%;
color: white;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #17408b;
color: #b1d9e9;
}
tr:nth-child(even) {background-color: #073f6e}
tr:nth-child(odd) {background-color: #37c4da}
.button {
  background-color: #025b9b; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
 
}
.container{  
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
   }
</style>
</head>
<body>


<table align="center">
<tr>
<th>Invoice Number</th>
<th>Investements</th>
<th>Total</th>
<th>Profits</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "medicalstore");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$invoice = $_POST['invoice'];
$sql = "CALL INVOICE_PROFITS($invoice)";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["INVOICE_NO"]. "</td><td>" . $row["INVESTMENTS"]    . "</td><br><td>"
. $row["TOTAL"]. "</td><td>" . $row["PROFITS"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<button class="button" onclick="location.href='view.html'" type="button">BACK</button>
</table>
</body>
</html>