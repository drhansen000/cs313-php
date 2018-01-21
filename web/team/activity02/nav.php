<link rel="stylesheet" type="text/css" href="/bootstrap-css/bootstrap.css">
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php checkFile("home.php") ?>">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item <?php checkFile("login.php") ?>">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item <?php checkFile("about-us.php") ?>">
        <a class="nav-link" href="about-us.php">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    </form>
  </div>
</nav>

<?php
    function checkFile($fileName)
    {
        if ($_SERVER["SCRIPT_FILENAME"] == "/home/drhansen000/lappstack-5.6.32-1/apache2/htdocs/Team/" . $fileName) 
        {
            echo("active");
        }
    }
?>