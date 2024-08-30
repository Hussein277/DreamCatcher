<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>test ui</title>
    <link rel="stylesheet" href="main.css" />
  </head>
  <body>
    <header>
      <nav>
        <h2><span>H__</span>ussein</h2>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="Discourse.html">Discourse on Inspiration</a></li>
          <li><a href="about.html">about Us</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>

        </ul>
      </nav>
    </header>

    <div class="about">
      <div class="container">
        <div class="content">
          <h2>Login</h2>
        </div>

        <form action="login.php" method="post">
            <div class="inputBox">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="inputBox">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="btns">
                <input type="submit" name="submit" value="Login">
            </div>
        </form>


        <div class="success none">
            <h2>Login successful!</h2>
            <a href="/" class="homelink">Go To Home</a>
        </div>
     
      </div>
    </div>

    <script src="master.js"></script>

    <?php
  if (isset($_POST['submit'])) {

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'mydatabase';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<script>document.querySelector('form').classList.add('none');</script>";
      echo "<script>document.querySelector('.success').classList.remove('none');</script>";
    } else {
      echo "<script>alert('Invalid email or password');</script>";
    }

    $conn->close();
  }
  ?>
  
  </body>
</html>
