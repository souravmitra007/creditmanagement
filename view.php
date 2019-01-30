<!DOCTYPE html>
<html>
<head>
	<title>UsersView</title>
  	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body class="bg-primary">
<h2 class="text-center text-warning">Users</h2>	
<?php
$servername = "localhost";
$username = "root";
$password = "root12345";
$dbname = "spark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `user1`;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table class='table table-striped bg-light text-dark'><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Credits</th><th>Operations</th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo "<tbody><tr><td>".$row["userid"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["credits"]."</td><td><a href='userview.php?id=$row[userid]'>View</a></td></tr></tbody>";
    }

     echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
</body>
</html>
