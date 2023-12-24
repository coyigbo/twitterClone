<?php

  session_start();
  if (!isset($_SESSION["username"])) {
    header("Location: ./login.php");
  }


?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Twitter - Create Post</title>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>

    <nav>
  		<ul>
  			<li><a href="">Create Post - You are here</a></li>
  			<li><a href="./home.php">Home</a></li>
        <li><a href="../inc/logout.inc.php">Logout</a></li>
  		</ul>
  	</nav>

  <div class="form-class">
    <form method="POST" action="../inc/post.inc.php">

      <label for="content">Content:</label>
      <input type="text" id="content" name="content" placeholder="Enter content:" required>

      <input type="submit" name="submit" value="Post">
    </form>
  </div>
  </body>
  <script type="text/javascript" src="../js/login.js"></script>
</html>
