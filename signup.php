<?php 
  include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAY Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>

</div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
    
          </ul>
          <span class="navbar-text">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">MENU</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ORDER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login1.php">LOGIN</a>
              </li>
            </ul>
          </span>
        </div>
      </nav>
      
      <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="images/login.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
            <h1 class="header">SIGNUP</h1>
            <div class="card-body">
                <form action="sumbit.php" method="post">
                    <div class="form-group">
                      <label for="_name">Name</label>
                      <input type="text" class="form-control" id="_name" name="Name">
                    </div>
                    <div class="form-group">
                        <label for="_fname">Father's Name</label>
                        <input type="text" class="form-control" id="_fname" name="FName">
                      </div>

                    <div class="form-group">
                      <label for="_email">Email</label>
                      <input type="email" class="form-control" id="_email" name="Email">
                    </div>
                    <div class="form-group">
                        <label for="_password">Password</label>
                        <input type="password" class="form-control" id="_password" name="Password">
                      </div>
                      
                    
                    <button type="submit" class="btn btn-primary"><a href="login1.php">Login</button></a>
                    <a href=""><button type="submit" class="btn btn-primary">Signup</button></a>
                  </form>
            </div>
          </div>
        </div>
      </div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>