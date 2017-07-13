<?php
	include('head.php');
  include("config.php");
  session_start();
?>
<?php
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT admin_id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: admin/dashboard.php");
      }
      else {
       $error = "Name or Password is invalid";
      }
   }
?>

          <body class="hold-transition login-page">
          <div class="login-box">
            <div class="login-logo">
              <a href="index.php"><b>Admin Login</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
              <p class="login-box-msg">Sign in to start your session</p>

              <form action="" method="post">
                <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="Username" name="username" required="">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="password" class="form-control" placeholder="Password" name="password" required="">
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <!-- /.col -->
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                  </div>
                </div>
                  <!-- /.col -->
                </div>
              </form>

            </div>
          </body>
            <!-- /.login-box-body -->