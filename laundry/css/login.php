<?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
    if($_SESSION['status_login']==true){
        header('location: home.php');
    }else{
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Laundry Lilhurts</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
  <div id = "particles-js">+
    <div class="center">
      <h1>Login</h1>
      <form action="proses_login.php" method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label><i class="fas fa-user"></i>&nbsp;Username</label>
        </div>
        
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label><i class="fas fa-key"></i>&nbsp;Password</label>
        </div>
        <input type="submit" name="login" value="Login">
        </div>
      </form>
    </div>
    </div>
  </body>
</html>

<?php
}
?>