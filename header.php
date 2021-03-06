<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <?php
  include_once('product.php');
  $listo = array();
  $prod = new product();
  $prod->createConnection();
  $listo = $prod->listOfCategories();

  ?>
</head>

<body>
  <div class="header navbar-dark mdb-color pl-4 pt-3">
    <div class="navbar-brand">
      <a class="navbar-brand text-white" href="index.php">
        <img src="img/logo.jpg" alt="logo" class="rounded-circle" width="140px" height="100px" />
      </a>
    </div>
    <div class="contact float-right pt-0">
      <p class="text-white pr-4">
        <i class="far fa-envelope" style="font-size:24px"></i> Email:
        printlo@godady.com
      </p>
      <p class="text-white pr-4 "></p>
    </div>
  </div>

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark mdb-color pl-4">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Printlo</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">


            <?php
            foreach ($listo as $category) {
              echo '<a class="dropdown-item"
        href="shop.php?Category=' . $category . '"
        >' . $category . '</a>';
            }
            ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
      </ul>
      <!-- Links -->

      <form class="form-inline" action="shop.php" method="GET">
        <div class="md-form my-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="keyword" />
        </div>
      </form>
    </div>
    <!-- Collapsible content -->
  </nav>
  <!--/.Navbar-->
</body>

</html>