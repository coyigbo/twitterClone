<?php
  // THIS AND ALL SCRIPTS ASSUME USER PROVIDED DATA IS SANITIZED, HOWEVER,
  // ALL SCRIPTS PROTECT AGAINST SQL INJECTION USING PREPARED STATEMENTS
  require "./database.inc.php";
  require "./functions.inc.php";

  if (isset($_POST["submit"])) {
    // USER INPUTTED DATA
    $username = strtolower($_POST["username"]);
    $first_name = strtolower($_POST["first_name"]);
    $last_name = strtolower($_POST["last_name"]);
    $email = strtolower($_POST["email"]);
    $dob = strtolower($_POST["dob"]);
    $profile_photo = "C:\\xampp\\htdocs\\twitter\\img\\default.jpg";
    $password = password_hash(strtolower($_POST["password"]), PASSWORD_BCRYPT);
    $confirm_password = password_hash(strtolower($_POST["confirm_password"]), PASSWORD_BCRYPT);

    // CHECK DATA
    if (isEmpty($username, $first_name, $last_name, $email, $dob, $password, $confirm_password)) {
      header("Location: ../php/signup.php?error=somefieldempty!");
      exit();
    }

    if (passwordsMatch($password, $confirm_password) === false) {
        header("Location: ../php/signup.php?error=passwordsdontmatch!");
        exit();
      } else {
        // INPUT DATA INTO DATABASE
        $stmt = $conn->prepare("INSERT INTO users (username, first_name, last_name, email, dob, profile_photo, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $username, $first_name, $last_name, $email, $dob, $profile_photo, $password);
        $stmt->execute();
        $stmt->close();

        header("Location: ../php/login.php?success=accountcreatedsuccessfully!");
      }





  } else {
    echo "Please submit form!";
  }


?>
