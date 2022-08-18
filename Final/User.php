<?php 
	include 'Guest.php';
	class User extends Guest{
		public function setPassword($pass){include 'db.php';
			session_start();
	 		$id = $_SESSION['id'];
			// select username from record
			$sql = 'UPDATE credentials set password=:pass where id=:id';
			$statement = $db->prepare($sql);
			$statement->execute(['pass'=>$pass,'id'=>$id]);
			
			header("Location:logbook.php?id=$id&flag=u");
		}
		public function setEmail($email){include 'db.php';
			session_start();
	 		$id = $_SESSION['id'];
			// select username from record
			$sql = 'UPDATE credentials set email=:email where id=:id';
			$statement = $db->prepare($sql);
			$statement->execute(['email'=>$email,'id'=>$id]);
			
			header("Location:logbook.php?id=$id&flag=u");
		}
		public function addText($entry){include 'db.php';
			session_start();
			$id = $_SESSION['id'];
			// select username from record
			$sql = 'INSERT INTO logbookEntries (id,date,time,text) VALUES(:id,:date,:time,:text)';
			$statement = $db->prepare($sql);
			$statement->execute([':id'=>$id,':date'=>date('Y-m-d'),':time'=>date('h:s:m'),'text'=>$entry]);
			$id = $_SESSION['id'];
			header("Location:logbook.php?id=$id&flag=u");
		}
	}
?>