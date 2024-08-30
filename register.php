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
          <h2>Register With Us</h2>
        </div>

        <form action="register.php" method="post">
            <div class="inputBox">
                <label for="username">Username:</label>
                <input type="text" name="username" required >
            </div>
            <div class="inputBox">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="inputBox">
                <label for="age">Age:</label>
                <input type="number" name="age" required>
            </div>
            <div class="inputBox">
                <label for="country">Country:</label>
                <input type="text" name="country" required>
            </div>
            <div class="inputBox">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="btns">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
        
        <div class="success none">
            <h2>Register successful!</h2>
            <a href="login.php" class="homelink">Go To Login</a>
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

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $country = $_POST['country'];


    $sql = "INSERT INTO users (username, email, password, age, country) VALUES ('$username', '$email', '$password', $age, '$country')";

    if ($conn->query($sql) === TRUE) {
      echo "<script>document.querySelector('form').classList.add('none');</script>";
      echo "<script>document.querySelector('.success').classList.remove('none');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  ?>
  
  </body>
</html>
