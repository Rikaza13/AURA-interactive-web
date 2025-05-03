<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);
  $stmt->execute();
  
  // Display alert in JavaScript after the form is submitted
  echo "<script>alert('Thank you for contacting AURA! Your message has been sent.'); window.location.href = 'contact.php';</script>";
}
?>

