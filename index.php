<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PiratesBank</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pirata+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Spirax&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/74a063bb38.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <section style="background-color:#2C2E43;"id="title">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
         <a class="navbar-brand" href="#" style="color: white;">PiratesBank</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#" style="color: #F7F7F7;">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.html" style="color: #F7F7F7;">View Transactions</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Title Section -->
      <div id="title" style="background-color:#595260;">
        <div class="row">
          <div class="col-lg-6 ">
            <h1 style="font-family: 'Pirata One', cursive;color:#262A53;font-size:65px;">This is the Pirate Bank<br>
              Stack and slash your cash</h1>
          </div>
          <div class="col-lg-4">
            <img class="front-img" src="logo.png" alt="Bank">
          </div>
        </div>
      </div>
    </div>
</section>

<section id="View" style="background-color:#B2B1B9;">
  <div class="container-fluid">
    <div class="row">
      <div class="feature-box col-lg-6 col-md-6 col-sm-12" style="padding-left:250px;">
      <a class="link" href="users.php">  <i class="icon-user fas fa-users fa-8x"></i></a>
        <h3 class="feature-title" style="margin-left: 35px;"><a class="link" href="users.php">Users</a></h3>
      </div>

    <div class="feature-box col-lg-6 col-md-6 col-sm-12"  style="padding-left:200px;">
    <a class="link" href="viewtrans.php">  <i class="icon-receipt fas fa-coins fa-7x"></i></a>
    <!--<i class="icon-receipt fas fa-receipt fa-8x"></i>-->
      <h3 class="feature-title"><a class="link" href="viewtrans.php">View Transaction</a></h3>
    </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f footer-icon"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter footer-icon"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g footer-icon"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in footer-icon"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble footer-icon"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">For Illegal trading<a href=#> click here to become a premium member</a> <br> Made for Pirates
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
