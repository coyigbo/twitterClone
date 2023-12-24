<?php

  function isEmpty($username, $first_name, $last_name, $email, $dob, $password, $confirm_password) {
    $result;
    if (empty($username) || empty($first_name) || empty($last_name) || empty($email) || empty($dob) || empty($password) || empty($confirm_password)) {
      $result = true;
    } else {
      $result = false;
    }
  }

  function passwordsMatch($password, $confirm_password) {
    $result;
    if ($password !== $confirm_password) {
      $result = false;
    } else {
      $result = true;
    }
  }

  
