<?php

    $fullname = $email = $gender = $pasword = $age = "";

    if ($_
  SERVER["REQUEST_METHOD"] == "POST") { 

      $fullname = test_input($_POST["name"]);

      $email = test_input($_POST["email"]);

      $pasword = test_input($_POST["comment"]);

      $gender = test_input($_POST["gender"]);

      $age = test_input($_POST["age"]);

    }

    function test_input($data) {

      $data = trim($data);

      $data = stripslashes($data);

      $data = htmlspecialchars($data);

      return $data;

    }

  ?>