<!DOCTYPE html>
<html>
<head>
	<title>Credit Transfer</title>
  	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body class="bg-warning">
<h2 class="text-center text-warning">Selected User</h2>	
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
$uid = $_GET['id2'];
$userid = $_GET['id'];
$cred = $_GET['credits'];
$cret = $_GET['cre'];
$sql="UPDATE `user1` SET `credits`='$cret'+'$cred' WHERE `userid`='$userid'; ";
$sqll="UPDATE `user1` SET `credits`=`credits`-'$cred' WHERE `userid`='$uid'; ";
$result= mysqli_query($conn,$sql);
$resulty= mysqli_query($conn,$sqll);
if($result&&$resulty){
	echo "<font color='green'>Updated<br>";
	echo "<font color='green'><a href='view.php'>Go Back</a>";

}
else
{
	echo "Failed";
}
$conn->close();
?>
</body>
</html>