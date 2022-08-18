<?php  require "db.php";
  if(isset($_POST['username']) && $_POST['password'] != ""){
   
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT id from credentials where username =:name and password =:pass";
    $statement = $db->prepare($sql);
    $statement->execute([':name'=>$name,':pass'=>$pass]);
    $column = $statement->fetchColumn();
    if($column){
      session_start();
      $_SESSION['id'] = $column;
      echo "<script>alert('Access Granted as User')</script>";
      echo "<script>window.open('logbook.php?id=$column&flag=u','_self')</script>";
    }else{
      echo "<script>alert('Wrong username or password')</script>";
    }
  }
  if(isset($_POST['username']) && $_POST["password"] == ""){
    $name = $_POST['username'];
    $sql = "SELECT id from credentials where username = :name";
    $statement = $db->prepare($sql);
    $statement->execute([':name'=>$name]);
    $column = $statement->fetchColumn();
    if($column){
      echo "<script>alert('Access Granted as Guest')</script>";
      echo "<script>window.open('logbook.php?id=$column&flag=g','_self')</script>";
    }else{
      echo "<script>alert('logbook username does not exist')</script>";
    }
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
    <div class="col-md-4"></div>
    <div class="col-md-4"> 
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          <form action="" method="post" onsubmit="return validate()">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-default pull-right">Login</button>
          </form>
        </div>
      </div><center>
      <p><i>Guest level access (view only):Enter the logbook username without entering password</i></p>
      <p><i>User level access (view and edit):Enter the logbook username and password</i></p></center>
      <div>
        <h3>Available logbook usernames</h3>
        <?php 
          $sql = 'SELECT username from credentials order by username asc';
          $statement = $db->prepare($sql);
          $statement->execute();
          while($row = $statement->fetch()){
        ?>
        <ul>
          <li><?php echo $row["username"]; ?></li>
        </ul>
      <?php } ?>
      </div>
    </div>
  </div>
  <!-- end of container div -->
</div>
<script type="text/javascript" src="validation.js"></script>
</body>
</html>