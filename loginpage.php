<!doctype html>
<html lang="en">
  <head>
    <?php 
    session_start()
    include ("../class.dataclass.php");
     ?>
     <?php 
     $regdate="";
     $username="";
     $password="";
     $emailid="";
     $contactno="";
     $query="";
     ?>
     <?php 
     if(isset($_POST['submit'])){
        $regdate=date(y-m-d)
        $username=$_POST[username];
        $password=$_POST[password];
        $emailid=$_POST[enailid];
        $contactno=$_POST[contactno];
        $query=
     }
     
     
     
     
     ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>responsive login page</title>
  </head>
  <body>
    <div class="container">
        <div class="form-box login">
            <form action="">
                <h1>Sign In</h1>
                <div class="input-box">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Sign in</button>
                <!-- <p>or sign in with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>

                </div> -->
            </form>
        </div>
        <div class="form-box register">
            <form action="" method="post">
                <h1>Sign Up</h1>
                <div class="input-box">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="contact" id="contact" placeholder="Contact" required>
                    <i class='bx bxs-phone'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm-Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">Sign up</button>
            </form>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Welcome to<br> Dental Care!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">Sign Up</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Sign In</button>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
  </body>
</html>
<html>