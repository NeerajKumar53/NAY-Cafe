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
    <link rel="stylesheet" href="order.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>


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
                <a class="nav-link" href="order.php">ORDER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login1.php">LOGIN</a>
            </li>
            </ul>
            </span>
        </div>
    </nav>

    <div class="card mb-3">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="images/login.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <h1 class="header">Your Orders</h1>
                <div class="card-body">
                    <form action="submit2.php" method="post">
                        <div class="form-group">
                            <label for="_name">Name</label>
                            <input type="text" name="Name" class="form-control" id="_name">
                        </div>
                        <div class="form-group">
                            <label for="_address">Address</label>
                            <input type="text" name="Address" class="form-control" id="_address">
                        </div>

                        <div class="form-group">
                            <label for="_contact">Contact</label>
                            <input type="charset" name="contact" class="form-control" id="_contact">
                        </div>
                        <div class="form-group">
                            <label for="_catagory">Catagory</label>
                            <div></div>
                            <select id="_catagory" class="form-control">
                          <option value="catagory">Select Catagory</option>
                          <optgroup label="Cold Coffees">
                            <option value="Cold Brew Coffee">Cold Brew Coffee</option>
                            <option value="Dark Night Coffee">Dark Night Coffee</option>
                            <option value="Ice Coffee">Ice Coffee</option>
                            <option value="Chilled Latte and Mocha">Chilled Latte and Mocha</option>
                            <option value="Cold Cinnamon Coffee">Cold Cinnamon Coffee</option>
                            <option value="Herbal Coffee">Herbal Coffee
                          </option>
                          </optgroup>
                          <optgroup label="Hot Coffees">
                            <option value="Pitch Black Coffee">Pitch Black Coffee</option>
                            <option value="Choco Beans Coffee">Choco Beans Coffee</option>
                            <option value="Takeaway Coffee">Takeaway Coffee</option>
                            <option value="Latte Coffee">Latte Coffee</option>
                            <option value="Chai Coffee">Chai Coffee</option>
                            <option value="Creamy Coffee">Creamy Coffee</option>
                          </optgroup>
                          <optgroup label="Cappucinos">
                            <option value="Golden Fig Cappucino">Golden Fig Cappucino</option>
                            <option value="Fiery Leaf Cappucino">Fiery Leaf Cappucino</option>
                            <option value="White Cloud Cappucino">White Cloud Cappucino</option>
                            <option value="Sensational Delight Cappucino">Sensational Delight Cappucino</option>
                            <option value="Traditional Turkish Cappucino">Traditional Turkish Cappucino</option>
                            <option value="Brown Cinnamon Cappucino">Brown Cinnamon Cappucino</option>
                          </optgroup>
                          <optgroup label="Espresso">
                            <option value="Plain Espresso
                            ">Plain Espresso
                          </option>
                            <option value="Black African Espresso">Black African Espresso</option>
                            <option value="Black Heart Espresso">Black Heart Espresso</option>
                            <option value="Brown Bean Espresso">Brown Bean Espresso</option>
                            <option value="Honey Espresso">Honey Espresso</option>
                            <option value="Double Cream Espresso">Double Cream Espresso</option>
                          </optgroup>
                          <optgroup label="Desserts">
                            <option value="Strawberry Icecream">Strawberry Icecream</option>
                            <option value="strawberry vanilla cake">strawberry vanilla cake</option>
                            <option value="Vanilla minicone">Vanilla minicone</option>
                            <option value="Pakola Watermelon icecream">Pakola Watermelon icecream</option>
                            <option value="Choco Rolls">Choco Rolls</option>
                            <option value="Mint Choco Cup">Mint Choco Cup</option>
                          </optgroup>
                          <optgroup label="Shakes">
                            <option value="Red Berry Smoothie">Red Berry Smoothie</option>
                            <option value="Chocolate Vanilla Milkshake">Chocolate Vanilla Milkshake</option>
                            <option value="Cinnamon Milkshake">Cinnamon Milkshake</option>
                            <option value="Strawberry Milkshake">Strawberry Milkshake</option>
                            <option value="Red cherry Milkshake">Red cherry Milkshake</option>
                            <option value="Banana Strawberry milkshake">Banana Strawberry milkshake</option>
                          </optgroup>
                          <optgroup label="Beverages">
                            <option value="Ice Tea">Ice Tea</option>
                            <option value="Blue Berry Limka">Blue Berry Limka</option>
                            <option value="Lemonade">Lemonade</option>
                            <option value="Mint Margarita">Mint Margarita</option>
                            <option value="Pakola Soda">Pakola Soda</option>
                            <option value="Cocktail">Cocktail</option>
                          </optgroup>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="_quantity">Quantity</label>
                            <input type="charset" name="quantity" class="form-control" id="_quantity">
                        </div>
                        <div>
                            <label for="_Date">Date Of Delivery:</label>
                            <div></div>
                            <input type="date" id="_Date" name="Date_Of_Delivery" value="yyyy-mm-dd" class="form-group">
                        </div>
                        <div>
                            <label for="location">Location</label>
                            <input type="charset" name="Location" class="form-control" id="location">
                        </div>
                </div>

                <button type="submit" class="btn btn-primary"><a href="order.php">Submit</button></a>
                </form>


                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>