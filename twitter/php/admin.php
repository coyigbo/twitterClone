<?php

  session_start();

  require "../inc/database.inc.php";
  require "../inc/functions.inc.php";

  if (isset($_SESSION["username"])) {
    if (!$_SESSION["username"] === "c2300") {
      header("Location: ../home.php?error=onlyadmincanaccessthispage!");
    }
  }




?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Twitter - Home</title>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>

    <nav>
  		<ul>
  			<li><a href="">Admin - You are here</a></li>
        <li><a href="./post.php">Create Post</a></li>
        <li><a href="">Welcome, <?php echo $_SESSION["username"] . " aka Admin"; ?></a></li>
        <li><a href="../inc/logout.inc.php">Logout</a></li>
  		</ul>
  	</nav>
    <br><br>
    <h1>This is a landing page for Admin users only!</h1>


  </div>
  </body>
  <script type="text/javascript" src="../js/login.js"></script>
</html>
