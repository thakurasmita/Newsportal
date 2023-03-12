<?php 
  $_SESSION['status'] = 1;//if logged in
  $_SESSION['status'] = 0;//if logged out
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">

        <a class="navbar-brand" href="index.php"><h5>INDIA NEWS</h5><h6>NEWS ON DEMAND, ANYWHERE, ANYTIME!</h6></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link" href="login.php" <?php echo ($_SESSION['status'] == 1) ? 'style="display:none;"' : '' ?>>Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>