<html>
  <head>
    <title> Login </title>
  </head>
  <body>
    <style>
      body {
        background-image: url('background.png');
        background-attachment: fixed;
        background-size: 100%100%;
      }
    </style>
    <div>
      <h2 style="color:violet;" align="center">Login</h2>
      <form style="color:violet;" align="center" method="POST">
        Username:<input type="text" name="userid"> <br>
        Password:&nbsp;<input type="password" name="password"> <br>
        <input type="submit" value="login">
      </form>
    </div>
    <?php
    if(isset($_POST['userid']) && isset($_POST['password']))
    {
      $user = $_POST['userid'];
      $pass= $_POST['password'];
    }
    if($user == "atnshop1" && $pass == "admin"){
      header("location:login1.php");
    }
    
    if($user == "atnshop2" && $pass == "admin"){
   header("location:login2.php");
    }
    if($user == "admin" && $pass == "admin"){
      header("location:admin.php");
    }
    ?>
  </body>
</html>
