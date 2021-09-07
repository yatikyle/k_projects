
<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connection, $sql);
  $count = mysqli_num_rows($result);
  if($count == 1){
    $_SESSION['username'] = $username;
  }else{  
    $fmsg = "Invalid Username/Password";
  }
}
if(isset($_SESSION['username'])){
  $smsg = "User already logged in";
}
?>

<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="index.php"><img style="height: 75px; width: 75px;" alt="" src="assets/img/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="diet.php">Diet</a> </li>
                    <li><a href="food.php">Food</a> </li>
                    <li><a href="template.php">Template</a> </li>
                    <?php if(isset($smsg)){ ?> 
                    <li><a href="logout.php" class="btn btn-danger btn-fill">Logout</a>  </li>
                    <?php } else { echo '<li><a href="login.php" class="btn btn-danger btn-fill">Login</a> </li>' ; } 
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
</nav>