<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QUIZ 2</title>
</head>
<body>

	<h2>Welcome to member page</h2>
	<form method="post" action="">
		<label>Enter Floor Number:</label>
		<input type="text" name="floorNum" placeholder="Enter floor number">
		<input type="submit" value="GO">
	</form> <br><br>
</body>
</html>
<?php 
	
	if (isset($_POST['floorNum'])) {
		$servername = "localhost";
		$username = "root";
		$password = "";

		try {
		  $conn = new PDO("mysql:host=$servername;dbname=quizelevator", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
		$sql = "UPDATE carNode SET floorNumber = :fno WHERE nodeID = :id";
		$stmt = $conn->prepare($sql);
		$stmt->execute([':fno'=>$_POST['floorNum'], ':id'=>1]);

		$sql = "SELECT e.nodeID, e.info,e.status,c.floorNumber FROM elevatorNodes as e LEFT JOIN carNode as c on e.nodeID = c.nodeID";
		$result = $conn->query($sql);

		if ($result->rowCount() > 0) {
		  // output data of each row
			echo "<b>nodeID --|------ Info ------|-- Status --|-- FloorNumber </b> <br>";
		  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		    echo "----" . $row["nodeID"]. "------|-- " . $row["info"]. "--|-----" . $row["status"]. "------|----".$row['floorNumber']."<br>";
		  }
		} else {
		  echo "0 results";
		}
		$conn=null;
	}

?>