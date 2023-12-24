<?php

  session_start();
  require "./database.inc.php";
  require "./functions.inc.php";

  if (isset($_POST["submit"])) {
    $user_id = $_SESSION["user_id"];
    $content = $_POST["content"];

    if (empty($content)) {
      header("Location: ../php/post.php?error=pleaseentercontent!");
      exit();
    } else {
      $_SESSION["content"] = $content;
      header("Location: ../php/postreview.php?success=".$content);
      exit();
    }
  } else {
    echo "Please submit form!";
  }



?>
