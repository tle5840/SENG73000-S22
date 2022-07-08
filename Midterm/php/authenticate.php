<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script type="text/javascript" src="../js/custom.js"></script>
    <title>Tori’s Website</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-laravel" id="mynav">
    <div class="container">
        <a class="navbar-brand" href="#">Tori’s Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="signup.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<main class="login-form"><br><br><br><br><br><br>
    <div class="cotainer">
        <div class="row justify-content-center" id="nopad"> 
            <div class="col-md-5">
                <div class="card">
                    <?php
                        session_start();

                      //  Get username and password already stored in json
                      $users = file_get_contents('../json/authorizedUsers.json');
                      //  Convert file contents to array.
                      $usersArray = json_decode($users, true);
                      $access = -1;
                      foreach ($usersArray as $user) {
                        if(strcmp($user["username"], $_POST['uname']) == 0 && strcmp($user["password"], $_POST['password']) == 0)  {
                          $access = 1;
                            $_SESSION['uname']=$_POST['uname'];
                            echo "You are authorized to access!" . "<br />";
                          header('Location: members.php');
                        }

                      }
                      if($access == -1){
                        echo "User does not exist. Please try again with different credentials<br/>";
                        echo"<a href='../login.html' class='btn btn-success' role='button'>Log In</a>";

                      }
                      ?>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

</body>
</html>

