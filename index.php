<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAY Cafe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>

    <div class="loader">
        <img src="images/loading.gif" alt="Loading..." />
    </div>
    <h2 id="title"></h2>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
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
                    <a class="nav-link" href="order.php">ORDER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login1.php">LOGIN</a>
                </li>
                </ul>
                </span>
            </div>
        </nav>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slider3.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/slider4.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <marquee class="marq">This project is made by Neeraj, Arsal and Yasir...hence the name NAY Cafe</marquee>

        <h2 class="heading">WELCOME TO NAY CAFE. HERE YOU SHALL FIND A VARIETY OF COFFEES,ICE-CREAMS AND BEVERAGES.<br>ENJOY!</br></h2>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="images/first.PNG">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="images/second.PNG">
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-primary">
            <div class="container">
                <div class="row">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <h3 class="header">Coffe shop <i class="fas fa-copyright"></i> All Rights Reserved</h3>
                </div>
            </div>
        </footer>

        <script>
            window.addEventListener("load", function() {
                const loader = document.querySelector(".loader");
                loader.className += " hidden"; // class "loader hidden"
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>