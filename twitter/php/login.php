<!DOCTYPE HTML>
<html>
  <head>
    <title>Twitter - Login Now</title>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>

    <nav>
  		<ul>
  			<li><a href="">Login - You are here</a></li>
  			<li><a href="./signup.php">Sign Up</a></li>
  		</ul>
  	</nav>

    <div class="form-class">
    <form method="POST" action="../inc/login.inc.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="Enter Username:" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter Password:" required>

      <input type="submit" name="submit" value="Login">
    </form>
  </div>
  </body>
  <script type="text/javascript" src="../js/login.js"></script>
</html>
