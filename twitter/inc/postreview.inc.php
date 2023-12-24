<?php
  session_start();
  // THIS AND ALL SCRIPTS ASSUME USER PROVIDED DATA IS SANITIZED, HOWEVER,
  // ALL SCRIPTS PROTECT AGAINST SQL INJECTION USING PREPARED STATEMENTS
  require "./database.inc.php";
  require "./functions.inc.php";

  if (isset($_POST["post"])) {
    $content = $_POST["content"];
    $user_id = $_SESSION["user_id"];
    $username = $_SESSION["username"];

    // CHECK DATA
    if (empty($content)) {
      header("Location: ../php/post.php?error=pleaseentercontentandtryagain!");
      exit();
    } else {
      // INSERT DATA INTO DATABASE
      $stmt = $conn->prepare("INSERT INTO posts (user_id, username, content) VALUES (?, ?, ?)");
      $stmt->bind_param("iss", $user_id, $username, $content);
      $stmt->execute();
      $stmt->close();
      header("Location: ../php/home.php?success=postcreatedsuccessfully!");
    }
  } else {
    echo "Please submit form!";
  }
?>
