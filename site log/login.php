<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');
        </style>
    <link rel="stylesheet" href="login22.css">
</head>
<body>
<section>
  <div class="form-box">
    <div class="form-value">
      <form action="" method="post" class="login-form">
        <h2>Login</h2>
        <?php if ($is_invalid): ?>
          <em class="error-message">Invalid login</em>
        <?php endif; ?>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" required>
          <label for="email">Email</label>
        </div>
        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="password" id="password" required>
          <label for="password">Password</label>
        </div>
        <div class="forget">
          <label>
            <input type="checkbox"> Remember me
          </label>
          <label>
            <a href="#">Forgot password?</a>
          </label>
        </div>
        <button>Log in</button>
        <div class="register">
          <p>Don't have an account? <a href="signup.html">Register</a></p>
        </div>
      </form>
    </div>
  </div>
</section>

</body>
</html>









