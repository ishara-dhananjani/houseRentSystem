<!DOCTYPE html>
<html lang="en">
<head>
  <title>RentHouse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<nav class="navbar navbar-expand-sm navbar-light justify-content-between" style="background-color: #e3f2fd;">
  <div class="container-fluid">
  <a class="navbar-header" href="index.php">
    <img src="../images/logo.png" alt="logo" style="height:50px;">
  </a>
  
  <!-- Links -->
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="admin-index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
      <?php 
if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
  echo '<li><a href="../logout.php">Logout</a></li>';
}

else {?>
      <li><a href="../how-to-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="../how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php } ?>
    </ul>
  </div>
</nav>

<div class="container text-center">
  
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">About us</a></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Product for Mac</a></li>
          <li><a href="#">Product for Windows</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Web analytics</a></li>
          <li><a href="#">Presentations</a></li>          
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#">Product Help</a></li>
          <li><a href="#">Developer API</a></li>
        </ul>
      </div>  
    </div>
  </div>
  <hr>
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li><a href="/">© 2013 Company Name.</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
</div>

</body>
</html>
