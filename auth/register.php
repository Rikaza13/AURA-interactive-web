<?php
include '../includes/db.php';

$registrationMessage = "";  // Initialize message variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get user inputs
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $registrationMessage = "Email already registered. <a href='login.php'>Login here</a>";
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            $registrationMessage = "Registration successful. <a href='login.php'>Login here</a>";
        } else {
            $registrationMessage = "Error: " . $conn->error;
        }

        $stmt->close();
    }

    $check->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup | AURA</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="login-signup-page">

  <section class="section form-section">
    <div class="container">

      <!-- Display registration message at the top -->
      <?php if ($registrationMessage): ?>
        <div class="alert"><?php echo $registrationMessage; ?></div>
      <?php endif; ?>

      <h1 class="h2-large section-title">Create Your AURA Account</h1>

      <form action="../auth/register.php" method="POST" class="form-card">
        <div class="input-wrapper">
          <input type="text" name="username" placeholder="Full Name" required class="email-field">
        </div>

        <div class="input-wrapper">
          <input type="email" name="email" placeholder="Email Address" required class="email-field">
        </div>

        <div class="input-wrapper">
          <input type="password" name="password" placeholder="Password" required class="email-field">
        </div>

        <button type="submit" class="btn btn-primary">Signup</button>

        <p class="form-link">Already have an account? <a href="login.php" class="btn-link">Login Here</a></p>
      </form>

    </div>
  </section>

</body>
</html>
