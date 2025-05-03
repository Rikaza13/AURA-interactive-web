<?php
session_start();
include '../includes/db.php';

// Display errors for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Check if the password matches the hash
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;  // Store the user ID in the session
            header("Location: ../dashboard.php");
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Email not found.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | AURA</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="login-signup-page">

  <section class="section form-section">
    <div class="container">

      <h1 class="h2-large section-title">Login to AURA</h1>

      <form action="login.php" method="POST" class="form-card">
        <div class="input-wrapper">
          <input type="email" name="email" placeholder="Email Address" required class="email-field">
        </div>

        <div class="input-wrapper">
          <input type="password" name="password" placeholder="Password" required class="email-field">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

        <p class="form-link">Don't have an account? <a href="register.php" class="btn-link">Signup Here</a></p>
      </form>

    </div>
  </section>

</body>
</html>
