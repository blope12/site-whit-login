<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');
    </style>
    <link rel="stylesheet" href="index2.css">


<body>



<div class="container">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">contact</a></li>
        <li><a href="#">shop</a></li>
    </ul>
    <nav>


    

      <div class="navbar">
        <div class="container22 nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  

          <div class="menu-items">
          <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">contact</a></li>
        <li><a href="#">shop</a></li>
          </div>
        </div>
      </div>
    </nav>




    <?php if (isset($user)): ?>
        <p class="hh">Hello <span><?= htmlspecialchars($user["name"]) ?></span> </p>
        <button class="logout"><a href="logout.php">Log out</a></button>
    </div>
</div>

<div class="container2">
<?php else: ?>
        <button class="aa1" ><a href="login.php">Log in</a></button>
        <button class="aa2"><a href="signup.html">sign up</a></button>

        
</div>

<?php endif; ?>  



<div class="container3">

    <img src="pic1.jpg" alt="pic1">

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, f
    ugiat in assumenda natus sed non ut sit quisquam ex, ullam deserunt iure nulla maiores. Aliquam nisi repudiandae voluptates placeat
    laborum.</p>

</div>


<div class="card-container">
    <div class="card">
        <img src="1.jpg" alt="">
        <h2>--CSS--</h2>
        <p>This is some text for card 1.</p>
        <button>Button 1</button>
    </div>
    <div class="card">
        <img src="22.jpg" alt="">
        <h2>--CSS--</h2>
        <p>This is some text for card 1.</p>
        <button>Button 1</button>
    </div>
    <div class="card">
        <img src="333.jpg" alt="">
        <h2>--CSS--</h2>
        <p>This is some text for card 1.</p>
        <button>Button 1</button>
    </div>


</div>
<div class="container44">
    <p>arya armade</p>
</div>

</body>
</html>
    
    
    
    
    
    
    
    
    
    
    