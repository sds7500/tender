<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ver2";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query="select * from bug";
$result=$conn->query($query);
$ss='';
if(mysqli_num_rows($result)!=0)
while($rowsub = $result -> fetch_assoc())
				{
					
				$ss= '<hr />'.$rowsub['syp'].$ss;
	
				}
echo $ss;


?>

<html>
<body>
</body>
</html>