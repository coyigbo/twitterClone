<!DOCTYPE HTML>
<html>
  <head>
    <title>Twitter - Sign Up Now</title>
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>

    <nav>
  		<ul>
        <li><a href="">Sign Up - You are here</a></li>
  			<li><a href="./login.php">Login</a></li>
  		</ul>
  	</nav>

    <div class="form-class">
      <form method="POST" action="../inc/signup.inc.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Username:" required>

        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" placeholder="First Name:" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" placeholder="Last Name:" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Email Address:" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter a secure password:" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password:"required>

        <input type="submit" name="submit" value="Sign Up">
      </form>
    </div>
  </body>
  <script type="text/javascript" src="../js/signup.js"></script>
</html>
