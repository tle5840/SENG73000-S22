<nav class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="login.php">Logbook Hosting Wbsite</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php">Registration</a></li>
        <li><a href="login.php">Login</a></li>
        <?php session_start(); if(isset($_SESSION['id'])){ ?>
        <li><a href="logout.php">Logout</a></li><?php } ?>
      </ul>
  </nav>