 <?php 
 	if(isset($_POST['entry']) != ""){
 		include 'User.php';
 		$u = new User();
 		$u->addText($_POST['entry']);
 	}
 	if(isset($_POST['password']) != ""){
 		include 'User.php';
 		$u = new User();
 		$u->setPassword($_POST['password']);
 		
 	}
 	if(isset($_POST['email']) != ""){
 		include 'User.php';
 		$u = new User();
 		$u->setEmail($_POST['email']);
 		
 	}
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>logbook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <?php require_once "navigation.php"; ?>
  <!-- end of navigation -->
  <div class="row"><br><br>
    <div class="col-md-2"></div>
    <div class="col-md-8"> <br><br>
      <div class="panel panel-default">
        <div class="panel-body"><br><br>
        	<?php if(isset($_SESSION['id'])){ ?>
        	<div class="panel panel-default col-md-6">
        		<div class="panel-heading">Profile</div>
        		<div class="panel-body">
        			<form action="" method="post">
	            <div class="form-group">
	              <label for="username">Password:</label>
	              <input type="password" class="form-control" id="password" name="password">
	            </div>
	            <button type="submit" class="btn btn-default pull-right">Update</button><br>
	            <div class="form-group">
	              <label for="pwd">Email:</label>
	              <input type="email" class="form-control" id="email" name="email">
	            </div>
	            <button type="submit" class="btn btn-default pull-right">Update</button>
	          </form>
        		</div>
        	</div><?php } ?>
        	<div class="col-md-6">
        		<h3>Profile</h3>
         <?php 
				  require "db.php";
				  if(isset($_GET['id'])){
				  	if($_GET['flag'] == 'g'){
				  		include 'Guest.php';
				  		$g = new Guest();
				  		$g->getInfo($_GET['id']);
				  	}
				  	if($_GET['flag'] == 'u'){
				  		include 'User.php';
				  		$u = new User();
				  		$u->getInfo($_GET['id']);
				  	?>
				  	
				  	<?php
				  	}
				  }
				  ?>
        	</div>
        	<?php if(isset($_SESSION['id'])){ ?>
        	<div class="panel panel-default col-md-6">
        		<div class="panel-heading">Logbook</div>
        		<div class="panel-body">
        			<form action="" method="post">
	            <div class="form-group">
	              <label for="username">New Entry:</label>
	              <textarea class="form-control" name="entry"></textarea>
	            </div>
	            <button type="submit" class="btn btn-default pull-right">Add</button>
	          </form>
        		</div>
        	</div><?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- end of container div -->
</div>
<script type="text/javascript" src="validation.js"></script>
</body>
</html>
