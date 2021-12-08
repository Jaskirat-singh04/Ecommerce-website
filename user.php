<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/login.css">
    <title>UPWale.com</title>
  </head>
  <body>
  
  <?php 
		include "include/login.php";
		include "include/registration.php";
        if($signup_status_success == true)
        {
			$signup_status_success = false;
            echo "<script> alert('$username registered successfully!!!'); </script>";     
        }
		if($signup_status_failed == true){
			$signup_status_failed = false;
			echo "<script> alert('registration failed!!!'); </script>"; 
		}
		if(isset($_GET['logout'])){
			echo "<script> alert('logged out successfully'); </script>";
		}

    ?>

    <!-- Container -->
    <div class="container" id="container">
      <!-- Row -->
      <div class="row">
        <!-- Sign Up -->
        <div class="col align-center flex-col sign-up">
          <div class="form-wrapper align-center">
            
			<form class="form sign-up" method="post" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="text" name="sign_user" placeholder="Username" />
              </div>
			  <p>
                <b><?php echo $usernameErr; ?></b>
              </p>
              <div class="input-group">
                <i class="bx bx-mail-send"></i>
                <input type="email" name="email" placeholder="Email" />
              </div>
			  <p>
                <b><?php echo $emailErr; ?></b>
              </p>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" name="sign_pass" placeholder="Password" />
              </div>
			  <p>
                <b><?php echo $passwordErr; ?></b>
              </p>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" name="cnfrm" placeholder="Confirm password" />
			  </div>
			  <p>
                <b><?php echo $cnfrmErr; ?></b>
              </p>
              <div class="input-group">
				<input type="submit"  id="out" name="sign_up" placeholder="sign up" />
			  </div>
              <p>
                <span>Already have an account?</span>
                <b id="sign-in">Sign in here</b>
              </p>
            </form>
			
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-up">
              <div class="align-center facebook-bg">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="align-center google-bg">
                <i class="bx bxl-google"></i>
              </div>
              <div class="align-center twitter-bg">
                <i class="bx bxl-twitter"></i>
              </div>
              <div class="align-center insta-bg">
                <i class="bx bxl-instagram-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign Up -->
        <!-- Sign In -->
        <div class="col align-center flex-col sign-in">
          <div class="form-wrapper align-center">
            <div class="form sign-in">
			<form method="post" action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <div class="input-group">
                <i class="bx bxs-user"></i>
                <input type="text" name="username" placeholder="Username" />
              </div>
			  <p>
                <b><?php echo $log_usernameErr; ?></b>
              </p>
              <div class="input-group">
                <i class="bx bxs-lock-alt"></i>
                <input type="password" name="password" placeholder="Password" />
              </div>
			  <p>
                <b><?php echo $log_passwordErr; ?></b>
              </p>
			  <div class="input-group">
                <input type="submit" id="in" name="sign_in" placeholder="SIGN IN" />
			  </div>
              <p>
                <b><a href="index.php?username=null"> continue without loggin </a></b>
              </p>
              <p>
                <span> Don't have an account? </span>
                <b id="sign-up">Sign up here</b>
              </p>
			  </form>
			 
            </div>
          </div>

          <div class="form-wrapper">
            <div class="social-list align-center sign-in">
              <div class="align-center facebook-bg">
                <i class="bx bxl-facebook"></i>
              </div>
              <div class="align-center google-bg">
                <i class="bx bxl-google"></i>
              </div>
              <div class="align-center twitter-bg">
                <i class="bx bxl-twitter"></i>
              </div>
              <div class="align-center insta-bg">
                <i class="bx bxl-instagram-alt"></i>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sign In -->
      </div>
      <!-- End Row -->
      <!-- Content Section -->
      <div class="row content-row">
        <!-- Sign In Content -->
        <div class="col align-items flex-col">
          <div class="text sign-in">
            <h2>Welcome Back</h2>
            <p>
              To UPWale.com.
            </p>
          </div>
          <div class="img sign-in">
            <img src="images/E-Commerce Illustration Kit-03_adobespark.png" alt="" />
          </div>
        </div>

        <!-- Sign Up Content -->
        <div class="col align-items flex-col">
          <div class="img sign-up">
            <img src="images/E-Commerce Illustration Kit-07_adobespark.png" alt="" />
          </div>
          <div class="text sign-up">
            <h2>Join with us</h2>
            <p>
             Get Exclusive rewards and Cashback!
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Container -->

    <!-- Script -->
    <script src="js/login.js"></script>
  </body>
</html>
