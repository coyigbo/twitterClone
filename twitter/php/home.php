<?php

  session_start();

  require "../inc/database.inc.php";
  require "../inc/functions.inc.php";

  if (!isset($_SESSION["username"])) {
    header("Location: ./login.php");
  } else {
    $stmt = $conn->prepare("SELECT * FROM posts");
    //$stmt->bind_param("");
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
      echo "<br><br>";
      echo "<div class='post'>";
      echo "<p>" . $row["username"] . "</p>";
      echo "<p>" . $row["content"] . "</h1>";
      echo "<p>Date Posted: " . $row["date_posted"] . "</h1>";
      echo "</div>";
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
  			<li><a href="">Home - You are here</a></li>
        <li><a href="./post.php">Create Post</a></li>
        <li><a href="">Welcome, <?php echo $_SESSION["username"]; ?></a></li>
        <li><a href="../inc/logout.inc.php">Logout</a></li>
  		</ul>
  	</nav>


  </div>
  </body>
  <script type="text/javascript" src="../js/login.js"></script>
</html>
