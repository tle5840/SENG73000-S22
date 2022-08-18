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
    <div class="col-md-4"></div>
    <div class="col-md-4"> 
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
        	<h3>Profile</h3>
         <?php 
		  require "db.php";
		  // session_start();
		  $id = @$_GET['id'];
		  $sql = "SELECT * from credentials where id ='$id'";
		  $statement = $db->prepare($sql);
		  $statement->execute();
		  $sql1 = "SELECT * from logbookentries where id ='$id'";
		  $statement1 = $db->prepare($sql1);
		  $statement1->execute();
		  include('guest.php');
		  $guest = new Guest();
		  $guest->getInfo($statement,$statement1);
		  ?>
        </div>
      </div>
    </div>
  </div>
  <!-- end of container div -->
</div>
<script type="text/javascript" src="validation.js"></script>
</body>
</html>
