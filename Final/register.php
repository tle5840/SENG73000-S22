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
          <form action="checkRegistration.php" method="post" onsubmit="return validate()">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-default pull-right">Create</button>
          </form>
        </div>
      </div><center>
      <p><i>*Username and password must be atleast 7 characters</i></p>
      <p><i>**Email address required for password recovery</i></p></center>
    </div>
  </div>
  <!-- end of container div -->
</div>
<script type="text/javascript" src="validation.js"></script>
</body>
</html>