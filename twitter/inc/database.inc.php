<?php

  $conn = new mysqli("localhost", "admin", "test", "twitter");
  if ($conn->connect_errno) {
    die("Connection failed: ($conn->connect_errno) $conn->connect_error");
  }



?>
