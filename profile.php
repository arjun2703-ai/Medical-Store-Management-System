
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="./css/profile.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk">

			<div class="profile">
				<!-- <form action="tr.php" method="post"> -->
					<label for="chk">Profile</label>
					<?php
						$conn = mysqli_connect("localhost", "root", "", "medicalstore");
						// Check connection
						if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT * FROM login";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["username"]. "</td><td>" . $row["password"]    . "</td><br><td>"
						. $row["email"]. "</td><td>" .$row["ph_no"];
						}
} else { echo "0 results"; }
$conn->close();
?>
					
					<br>
					
					
					<br>
					<br>
					<center><a href="index.html"><button>Log Out</button></a></center>
					<center><a href="home2.html"><button>Main Menu</button></a></center>


					

				<!-- </form> -->
			</div>
	</div>
</body>
</html>