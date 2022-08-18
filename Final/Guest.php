<?php 

	class Guest{
		public function getInfo($id){
				require "db.php";
				  $sql = "SELECT * from credentials where id ='$id'";
				  $statement = $db->prepare($sql);
				  $statement->execute();
				  $sql1 = "SELECT * from logbookentries where id ='$id'";
				  $statement1 = $db->prepare($sql1);
				  $statement1->execute();
			while($row = $statement->fetch()){
				echo "ID:".$row["username"]."<br>";
				echo "Username:".$row["username"]."<br>";
				echo "Email:".$row["email"];}
				echo '<h3>Logbook Entries</h3>
				<table class="table">
					<tr>
						<th>ID</th>
						<th>Date</th>
						<th>Time</th>
						<th>Text</th>
					</tr>';
				while ($row1 = $statement1->fetch()) {	
					echo "<tr><td>".$row1["id"]."</td>";
					echo "<td>".$row1["date"]."</td>";
					echo "<td>".$row1["time"]."</td>";
					echo "<td>".$row1["text"]."</td></tr>";}
				echo '</table>';
		}
	}
