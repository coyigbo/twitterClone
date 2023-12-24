<?php
  // THIS AND ALL SCRIPTS ASSUME USER PROVIDED DATA IS SANITIZED, HOWEVER,
  // ALL SCRIPTS PROTECT AGAINST SQL INJECTION USING PREPARED STATEMENTS
  require "./database.inc.php";
  require "./functions.inc.php";

  if (isset($_POST["submit"])) {
    // USER INPUTTED DATA
    $username = strtolower($_POST["username"]);
    $password = password_hash(strtolower($_POST["password"]), PASSWORD_BCRYPT);

    // CHECK DATA
    if (empty($username) || empty($password)) {
      header("Location: ../php/login.php?error=somefieldsempty!");
      exit();
    }

    // COMPARE DATA TO DATA IN DATABASE
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (!$row) {
      header("Location: ../php/login.php?error=nouserexists!");
      exit();
    } else {
      if ($username === $row["username"] && $password = $row["password"]) {
        session_start();
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["email"] = $row["email"];
        header("Location: ../php/home.php?success=loginsuccessful!");
        exit();
      } else {
        header("Location: ../php/login.php?error=usernameorpasswordisincorrect!");
      }
    }

    $stmt->close();


  } else {
    echo "Please submit form!";
  }
