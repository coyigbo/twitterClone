<?php

  session_start();
  if (!isset($_SESSION["username"])) {
    header("Location: ./login.php");
  }


?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Twitter - Review Post</title>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>

    <nav>
  		<ul>
  			<li><a href="./home.php">Home</a></li>
        <li><a href="">Create Post - You are here</a></li>
        <li><a href="">Welcome, <?php echo $_SESSION["username"]; ?></a></li>
        <li><a href="../inc/logout.inc.php">Logout</a></li>
  		</ul>
  	</nav>
    <div class="form-class">
      <form method="POST" action="../inc/postreview.inc.php">
        <label for="content">Are you sure you want to post this? Make any changes now:</label>
        <input type="text" id="content" name="content" value=<?php echo $_GET["success"]; ?>>

        <input type="submit" name="post" value="Post">
        <a href="./home.php"><input type="submit" name="back" value="Home"></a>
      </form>
    </div>


  </div>
  </body>
  <script type="text/javascript" src="../js/login.js"></script>
</html>
