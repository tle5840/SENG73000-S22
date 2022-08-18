<?php 
	require "db.php";
	if(isset($_POST['username'])){
		$name = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];
		// select username from record
		$sql = 'SELECT username from credentials where username = :name';
		$statement = $db->prepare($sql);
		$statement->execute([':name'=>$name]);
		$count = $statement->fetchColumn();
		if($count == ""){
			$sql = 'INSERT INTO credentials(username,password,email) VALUES(:name,:pass,:email)';
			$statement = $db->prepare($sql);
			$statement->execute([
				':name' => $name,
				':pass' => $pass,
				':email' => $email
			]);
		echo "<script>window.open('login.php','_self')</script>";
		}else{
			echo "<script>alert('The username is aready taken, please choose different one')</script>";
			echo "<script>window.open('login.php','_self')</script>";
		}
		//end record
	}
	
?>