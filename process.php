<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the form data (e.g., send an email, store in a database, etc.)

    // Redirect the user to a success page
    header("Location: success.html");
    exit();
  }
?>
